<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/lexa-mvc5/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jan 2026 08:16:48 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Adi Nugroho</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="{{ asset('assets/libs/admin-resources/rwd-table/rwd-table.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">

</head>


<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    @php
                    $role = auth()->user()->role;
                    @endphp

                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Main</li>
                        {{-- ================= ADMIN ================= --}}
                        @if($role == 'Admin')

                        <li>
                            <a href="{{ route('dashboard') }}" class="waves-effect">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        {{-- ================= USER ================= --}}
                        <li>
                            <a href="javascript:void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-account-group-outline"></i>
                                <span>Manajemen User</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="{{ route('Dokter.dokter') }}">
                                        <i class="mdi mdi-stethoscope"></i> Data Dokter
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('Farmasi.farmasi') }}">
                                        <i class="mdi mdi-pill"></i> Data Farmasi
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {{-- ================= PELAYANAN ================= --}}
                        <li>
                            <a href="javascript:void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-hospital-box-outline"></i>
                                <span>Manajemen Pelayanan</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="{{ route('Pasien.pasien') }}">
                                        <i class="mdi mdi-account"></i> Data Pasien
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('Antrian.antrian') }}">
                                        <i class="mdi mdi-ticket-confirmation-outline"></i> Data Antrian
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('Klinik.klinik') }}">
                                        <i class="mdi mdi-medical-bag"></i> Ambil Obat
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {{-- ================= MASTER ================= --}}
                        <li>
                            <a href="javascript:void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-database-outline"></i>
                                <span>Master Data</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="{{ route('Poli.poli') }}">
                                        <i class="mdi mdi-hospital-building"></i> Data Poli
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('Obat.obat') }}">
                                        <i class="mdi mdi-capsule"></i> Data Obat
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('Rumah.rumah') }}">
                                        <i class="mdi mdi-hospital-box-outline"></i> Data Rumah Sakit
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {{-- ================= LAPORAN ================= --}}
                        <li>
                            <a href="{{ route('Riwayat.riwayat') }}" class="waves-effect">
                                <i class="mdi mdi-history"></i>
                                <span>Riwayat Pelayanan</span>
                            </a>
                        </li>

                        @endif




                        {{-- ================= DOKTER ================= --}}
                        @if($role == 'Dokter')

                        <li>
                            <a href="{{ route('dashboard') }}" class="waves-effect">
                                <i class="mdi mdi-calendar-check"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('Antrian.antrian') }}" class="waves-effect">
                                <i class="mdi mdi-calendar-check"></i>
                                <span>Tabel Antrian</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('Obat.obat') }}" class="waves-effect">
                                <i class="mdi mdi-calendar-check"></i>
                                <span>Tabel Obat</span>
                            </a>
                        </li>

                        @endif


                        {{-- ================= FARMASI ================= --}}
                        @if($role == 'Farmasi')

                        <li>
                            <a href="{{ route('dashboard') }}" class="waves-effect">
                                <i class="mdi mdi-calendar-check"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('Klinik.klinik') }}" class="waves-effect">
                                <i class="mdi mdi-calendar-check"></i>
                                <span>Tabel Ambil Obat</span>
                            </a>
                        </li>

                        @endif

                    </ul>

                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- Start Header Area -->
        @include('layouts.header')
        <!-- End Header Area -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script> Lexa <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">

            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />


            <div class="px-4 py-2">
                <h6 class="mb-3">Select Custome Colors</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                        id="theme-default" value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')" checked>
                    <label class="form-check-label" for="theme-default">Default</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                        id="theme-red" value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
                    <label class="form-check-label" for="theme-red">Red</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                        id="theme-teal" value="teal" onchange="document.documentElement.setAttribute('data-theme-mode', 'teal')">
                    <label class="form-check-label" for="theme-teal">Teal</label>
                </div>
            </div>


            <h6 class="text-center mb-0 mt-3">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="{{ asset('assets/images/layouts/layout-1.jpg') }}" class="img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ asset('assets/images/layouts/layout-2.jpg') }}" class="img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="{{ asset('assets/css/bootstrap-dark.min.css') }}" data-appStyle="{{ asset('assets/css/app-dark.min.html') }}" />
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ asset('assets/images/layouts/layout-3.jpg') }}" class="img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-5">
                    <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="{{ asset('assets/css/app-rtl.min.css') }}" />
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>


            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- RIGHT BAR -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="p-4">
                <img src="{{ asset('assets/images/layouts/layout-1.jpg') }}" class="img-thumbnail mb-3">
                <img src="{{ asset('assets/images/layouts/layout-2.jpg') }}" class="img-thumbnail mb-3">
                <img src="{{ asset('assets/images/layouts/layout-3.jpg') }}" class="img-thumbnail">
            </div>
        </div>
    </div>

    <div class="rightbar-overlay"></div>

    <!-- JS -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>


<!-- Mirrored from themesbrand.com/lexa-mvc5/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jan 2026 08:17:12 GMT -->

</html>