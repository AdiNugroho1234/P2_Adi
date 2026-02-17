@extends('menu/navbar')

@section('content')

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Form Rujukan Pasien</h5>
                </div>
                <div class="card-body">
                    <form id="rujukanForm">
                        <div class="mb-3">
                            <label for="nama_pasien" class="form-label">Nama Pasien</label>
                            <input type="text" class="form-control" id="nama_pasien" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="umur_pasien" class="form-label">Umur</label>
                            <input type="text" class="form-control" id="umur_pasien" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="alamat_pasien" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat_pasien" rows="2" readonly></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="keluhan" class="form-label">Keluhan</label>
                            <textarea class="form-control" id="keluhan" rows="3" readonly></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="rumah_sakit_tujuan" class="form-label">Rumah Sakit Tujuan</label>
                            <input type="text" class="form-control" id="rumah_sakit_tujuan" placeholder="Masukkan nama rumah sakit">
                        </div>
                        <div class="mb-3">
                            <label for="alasan_rujukan" class="form-label">Alasan Rujukan</label>
                            <textarea class="form-control" id="alasan_rujukan" rows="3" placeholder="Masukkan alasan rujukan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="diagnosis" class="form-label">Diagnosis</label>
                            <textarea class="form-control" id="diagnosis" rows="2" placeholder="Masukkan diagnosis"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="catatan_tambahan" class="form-label">Catatan Tambahan</label>
                            <textarea class="form-control" id="catatan_tambahan" rows="2" placeholder="Masukkan catatan tambahan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_rujukan" class="form-label">Tanggal Rujukan</label>
                            <input type="date" class="form-control" id="tanggal_rujukan">
                        </div>
                        <div class="mb-3">
                            <label for="nama_dokter" class="form-label">Nama Dokter</label>
                            <input type="text" class="form-control" id="nama_dokter" placeholder="Masukkan nama dokter">
                        </div>

                        <button type="button" class="btn btn-success" onclick="printSurat()">Print Surat Rujukan</button>
                        <button type="button" class="btn btn-secondary" onclick="window.history.back()">Kembali</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h5 class="card-title mb-0">Preview Surat Rujukan</h5>
                </div>
                <div class="card-body">
                    <div id="suratPreview" class="border p-3 bg-light" style="font-family: 'Times New Roman', serif; font-size: 14px;">
                        <div class="text-center mb-4">
                            <h4><strong>SURAT RUJUKAN</strong></h4>
                            <p>Rumah Sakit Asal: [Nama Rumah Sakit Asal]</p>
                            <p>Alamat: [Alamat Rumah Sakit Asal]</p>
                            <p>Telp: [No Telp]</p>
                        </div>

                        <p>Kepada Yth.</p>
                        <p>Direktur <span id="preview_rumah_sakit_tujuan">[Rumah Sakit Tujuan]</span></p>
                        <p>Di tempat</p>
                        <br>
                        <p>Dengan hormat,</p>
                        <p>Bersama ini kami rujuk pasien:</p>
                        <ul>
                            <li>Nama: <span id="preview_nama_pasien">[Nama Pasien]</span></li>
                            <li>Umur: <span id="preview_umur_pasien">[Umur]</span></li>
                            <li>Alamat: <span id="preview_alamat_pasien">[Alamat]</span></li>
                        </ul>
                        <p>Dengan keluhan: <span id="preview_keluhan">[Keluhan]</span></p>
                        <p>Diagnosis: <span id="preview_diagnosis">[Diagnosis]</span></p>
                        <p>Alasan rujukan: <span id="preview_alasan_rujukan">[Alasan Rujukan]</span></p>
                        <p>Catatan tambahan: <span id="preview_catatan_tambahan">[Catatan Tambahan]</span></p>
                        <br>
                        <p>Demikian surat rujukan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>
                        <br>
                        <div class="text-end">
                            <p>[Kota], <span id="preview_tanggal_rujukan">[Tanggal]</span></p>
                            <p>Dokter,</p>
                            <br><br>
                            <p><u><span id="preview_nama_dokter">[Nama Dokter]</span></u></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const urlParams = new URLSearchParams(window.location.search);
    const riwayatId = window.location.pathname.split('/').pop(); 

    fetch(`/Riwayat/detail/${riwayatId}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('nama_pasien').value = data.pasien?.nama ?? '';
            document.getElementById('umur_pasien').value = data.pasien?.umur ?? '';
            document.getElementById('alamat_pasien').value = data.pasien?.alamat ?? '';
            document.getElementById('keluhan').value = data.pemeriksaan?.keluhan ?? '';

            updatePreview();
        });

    function updatePreview() {
        document.getElementById('preview_nama_pasien').innerText = document.getElementById('nama_pasien').value || '[Nama Pasien]';
        document.getElementById('preview_umur_pasien').innerText = document.getElementById('umur_pasien').value || '[Umur]';
        document.getElementById('preview_alamat_pasien').innerText = document.getElementById('alamat_pasien').value || '[Alamat]';
        document.getElementById('preview_keluhan').innerText = document.getElementById('keluhan').value || '[Keluhan]';
        document.getElementById('preview_rumah_sakit_tujuan').innerText = document.getElementById('rumah_sakit_tujuan').value || '[Rumah Sakit Tujuan]';
        document.getElementById('preview_alasan_rujukan').innerText = document.getElementById('alasan_rujukan').value || '[Alasan Rujukan]';
        document.getElementById('preview_diagnosis').innerText = document.getElementById('diagnosis').value || '[Diagnosis]';
        document.getElementById('preview_catatan_tambahan').innerText = document.getElementById('catatan_tambahan').value || '[Catatan Tambahan]';
        document.getElementById('preview_tanggal_rujukan').innerText = document.getElementById('tanggal_rujukan').value ? new Date(document.getElementById('tanggal_rujukan').value).toLocaleDateString('id-ID') : '[Tanggal]';
        document.getElementById('preview_nama_dokter').innerText = document.getElementById('nama_dokter').value || '[Nama Dokter]';
    }

    document.querySelectorAll('#rujukanForm input, #rujukanForm textarea').forEach(element => {
        element.addEventListener('input', updatePreview);
    });

    function printSurat() {
        const printContent = document.getElementById('suratPreview').innerHTML;
        const originalContent = document.body.innerHTML;

        document.body.innerHTML = printContent;
        window.print();
        document.body.innerHTML = originalContent;
    }
</script>

@endsection