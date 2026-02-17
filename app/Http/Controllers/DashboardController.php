<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahPasien  = DB::table('t_pasien')->count();
        $jumlahObat    = DB::table('t_obat')->count();
        $jumlahDokter  = DB::table('users')->where('role', 'Dokter')->count();
        $jumlahFarmasi = DB::table('users')->where('role', 'Farmasi')->count();

        $user = Auth::user();

        return view('dashboard', compact(
            'jumlahPasien',
            'jumlahObat',
            'jumlahDokter',
            'jumlahFarmasi',
            'user'
        ));
    }
}
