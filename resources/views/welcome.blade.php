<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adi Nugroho S2 </title>

    <link rel="shortcut icon" href="/assets/images/favicon.ico" />

    <!-- Bootstrap Css -->
    <link
        href="{{ asset('assets/css/bootstrap.min.css') }}"
        rel="stylesheet" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" />
    <!-- App Css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" />


</head>

<body>

    <body class="bg-light">

        <div class="container mt-5">
            <div class="row">
                <!-- Ini untuk Tampilan From surat -->

                <div class="col-md-5">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h5 class="mb-0 mdi mdi-file-document-outline" style="color: blue; ">Application Letter Form</h5>
                        </div>
                        <div class="card-body">

                            <h6>Tanggal & Kota</h6>
                            <div class="mb-2">
                                <input type="text" class="form-control" id="your_name" placeholder="date & city">
                            </div>
                            <h6>Subjek Surat</h6>
                            <div class="mb-2">
                                <input type="text" class="form-control" id="subjek_surat" placeholder="Subjek">
                            </div>
                            <h6>Penerima dan Alamat</h6>
                            <div class="mb-2">
                                <textarea rea class="form-control" id="penerima_alamat" placeholder="Penerima"></textarea>
                            </div>

                            <h6>Paragraf 1 Pembuka</h6>
                            <div class="mb-2">
                                <textarea class="form-control" id="paragraf_satu" placeholder="Paragraf satu"></textarea>
                            </div>

                            <h6>Paragraf 2 Isi</h6>
                            <div class="mb-2">
                                <textarea class="form-control" id="paragraf_dua" placeholder="Paragraf dua"></textarea>
                            </div>

                            <h6>Paragraf 3 Penutup</h6>
                            <div class="mb-2">
                                <textarea class="form-control" id="paragraf_tiga" placeholder="Paragraf tiga"></textarea>
                            </div>


                            <div class="mb-2">
                                <input type="text" class="form-control" id="signature"
                                    placeholder="Signatur (Signature)">
                            </div>

                            <div class="d-flex gap-2 mt-4">
                                <button type="button" class="btn btn-primary w-100" id="btnSave">Tambahkan ke Database</button>
                                <button type="button" class="btn btn-success w-100" id="btnPrint">Cetak ke PDF</button>
                                <button type="button" class="btn btn-warning w-100" id="btnClear">Clear</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Ini untuk Tampilan surat -->
                <div class="col-md-7 d-flex justify-content-center">
                    <div class="card shadow-sm w-100" style="max-width:650px;">
                        <div class="card-body" style="font-family:'Times New Roman', serif;">

                            <!-- Judul Surat -->
                            <h4 class="text-center fw-bold mb-4">
                                Application Letter
                            </h4>

                            <p class="text-end">
                                Tanggal dan Kota : <br>
                                <span id="p_name">[date]</span>
                            </p>

                            <strong>Subjek Surat :</strong>
                            <p id="p_subjek">[Subjek]</p>

                            <strong>Penerima Surat :</strong>
                            <p id="p_penerima">[Penerima]</p>

                            <br>

                            <p id="p_paragraf_1">[Paragraf satu]</p>
                            <br>
                            <p id="p_paragraf_2">[Paragraf dua]</p>
                            <br>
                            <p id="p_paragraf_3">[Paragraf tiga]</p>

                            <br>

                            <p>Sincerely,</p>
                            <br>
                            <br>
                            <p id="p_signature">[Signature]</p>

                        </div>
                    </div>
                </div>



            </div>
        </div>

    </body>


    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!--Morris Chart-->
    <script src="{{ asset('assets/libs/morris.js/morris.min.js') }}"></script>
    <script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        function live(inputId, previewId) {
            const input = document.getElementById(inputId);
            const preview = document.getElementById(previewId);

            input.addEventListener("input", () => {
                preview.innerText = input.value || preview.dataset.default;
            });
        }

        // Script js live text surat
        document.querySelectorAll('[id^="p_"]').forEach((el) => {
            el.dataset.default = el.innerText;
        });

        live("your_name", "p_name");
        live("subjek_surat", "p_subjek");
        live("penerima_alamat", "p_penerima");
        live("paragraf_satu", "p_paragraf_1");
        live("paragraf_dua", "p_paragraf_2");
        live("paragraf_tiga", "p_paragraf_3");
        live("signature", "p_signature");
    </script>

    <script>
        document.getElementById("btnSave").addEventListener("click", () => {
            alert("Data berhasil ditambahkan ke Database (simulasi)");
        });

        //document.getElementById('btnPrint').addEventListener('click', () => {
        // window.print();
        //});

        document.getElementById("btnClear").addEventListener("click", () => {
            document.querySelectorAll("input, textarea").forEach((el) => {
                el.value = "";
            });

            document.querySelectorAll('[id^="p_"]').forEach((el) => {
                el.innerText = el.dataset.default;
            });
        });
    </script>

</html>