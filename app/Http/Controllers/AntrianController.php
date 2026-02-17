<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AntrianController extends Controller
{

    public function index()
    {
        $Antrian = DB::table('t_antrian')
            ->orderBy('waktu_masuk', 'asc')
            ->get();

        return view('Antrian.antrian', compact('Antrian'));
    }

    public function periksa($id)
    {
        $antrian = DB::table('t_antrian')
            ->where('id', $id)
            ->first();

        if (!$antrian) {
            return redirect()->back()
                ->with('error', 'Data antrian tidak ditemukan');
        }

        $riwayat = DB::table('t_pemeriksaan')
            ->where('kode_pasien', $antrian->kode_pasien)
            ->orderBy('created_at', 'desc')
            ->get();

        $last = DB::table('t_pemeriksaan')
            ->where('kode_pasien', $antrian->kode_pasien)
            ->orderBy('created_at', 'desc')
            ->first();



        return view('Antrian.pemeriksaan', compact('antrian', 'riwayat', 'last'));
    }


    public function store(Request $request)
    {
        $aksi = $request->aksi; 

        if ($aksi === 'simpan') {
            $request->validate([
                'kode_pasien'   => 'required|exists:t_pasien,kode_pasien',
                'tinggi_badan'  => 'required|numeric',
                'berat_badan'   => 'required|numeric',
                'suhu_badan'    => 'required|numeric',
                'tensi'         => 'required|string',
                'keluhan'       => 'nullable|string',
                'catatan_obat'  => 'nullable|string',
            ]);

            DB::table('t_pemeriksaan')->insert([
                'kode_pasien'   => $request->kode_pasien,
                'tinggi_badan'  => $request->tinggi_badan,
                'berat_badan'   => $request->berat_badan,
                'suhu_badan'    => $request->suhu_badan,
                'tensi'         => $request->tensi,
                'keluhan'       => $request->keluhan,
                'catatan_obat'  => $request->catatan_obat,
                'created_at'    => now(),
            ]);

            DB::table('t_pasien')
                ->where('kode_pasien', $request->kode_pasien)
                ->update([
                    'status_kunjungan' => 'pemeriksaan',
                    'updated_at' => now()
                ]);

            DB::table('t_antrian')
                ->where('kode_pasien', $request->kode_pasien)
                ->update([
                    'status_kunjungan' => 'pemeriksaan',
                    'updated_at' => now()
                ]);

            $pemeriksaan = DB::table('t_pemeriksaan')
                ->where('kode_pasien', $request->kode_pasien)
                ->latest()
                ->first();

            DB::table('t_farmasi')->insert([
                'kode_pasien'      => $request->kode_pasien,
                'catatan_obat'     => $pemeriksaan->catatan_obat ?? '-',
                'status_kunjungan' => 'ambil obat',
                'created_at'       => now(),
            ]);


            return redirect()->back()->with('success', 'Data pemeriksaan disimpan dan status antrian diperbarui');
        } elseif ($aksi === 'akhiri') {

            $kode = $request->kode_pasien;

            $pemeriksaan = DB::table('t_pemeriksaan')
                ->where('kode_pasien', $kode)
                ->latest()
                ->first();

            if (!$pemeriksaan) {
                return back()->with('error', 'Data pemeriksaan tidak ditemukan');
            }

            DB::table('t_farmasi')->insert([
                'kode_pasien'      => $kode,
                'catatan_obat'     => $pemeriksaan->catatan_obat ?? '-',
                'status_kunjungan' => 'ambil obat',
                'created_at'       => now(),
            ]);

            DB::table('t_antrian')
                ->where('kode_pasien', $kode)
                ->delete();

            return redirect()->route('Antrian.antrian')
                ->with('success', 'Pasien masuk ke farmasi');
        }
    }
}
