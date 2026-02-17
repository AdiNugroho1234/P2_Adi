   <header id="page-topbar">
       <div class="navbar-header">
           <div class="d-flex">
               <!-- LOGO -->
               <div class="navbar-brand-box">
                   <a href="index.html" class="logo logo-dark">
                       <span class="logo-sm">
                           <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                       </span>
                       <span class="logo-lg">
                           <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="17">
                       </span>
                   </a>

                   <a href="index.html" class="logo logo-light">
                       <span class="logo-sm">
                           <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                       </span>
                       <span class="logo-lg">
                           <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="18">
                       </span>
                   </a>
               </div>

               <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                   <i class="mdi mdi-menu"></i>
               </button>

               <div class="d-none d-sm-block">
                   <div class="dropdown dropdown-topbar pt-3 mt-1 d-inline-block">
                       <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Create <i class="mdi mdi-chevron-down"></i>
                       </a>

                       <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                           <a class="dropdown-item" href="#">Action</a>
                           <a class="dropdown-item" href="#">Another action</a>
                           <a class="dropdown-item" href="#">Something else here</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="#">Separated link</a>
                       </div>
                   </div>
               </div>
           </div>

           <div class="d-flex">

               <!-- App Search-->
               <form class="app-search d-none d-lg-block">
                   <div class="position-relative">
                       <input type="text" class="form-control" placeholder="Search...">
                       <span class="fa fa-search"></span>
                   </div>
               </form>

               <div class="dropdown d-inline-block d-lg-none ms-2">
                   <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="mdi mdi-magnify"></i>
                   </button>
                   <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                       aria-labelledby="page-header-search-dropdown">

                       <form class="p-3">
                           <div class="form-group m-0">
                               <div class="input-group">
                                   <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                   <div class="input-group-append">
                                       <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                   </div>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>



               <div class="dropdown d-none d-md-block ms-2">
                   <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <img class="me-2" src="{{ asset('assets/images/flags/us_flag.jpg') }}" alt="Header Language" height="16"> English <span class="mdi mdi-chevron-down"></span>
                   </button>
                   <div class="dropdown-menu dropdown-menu-end">

                       <!-- item-->
                       <a href="javascript:void(0);" class="dropdown-item notify-item">
                           <img src="{{ asset('assets/images/flags/germany_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> German </span>
                       </a>

                       <!-- item-->
                       <a href="javascript:void(0);" class="dropdown-item notify-item">
                           <img src="{{ asset('assets/images/flags/italy_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Italian </span>
                       </a>

                       <!-- item-->
                       <a href="javascript:void(0);" class="dropdown-item notify-item">
                           <img src="{{ asset('assets/images/flags/french_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> French </span>
                       </a>

                       <!-- item-->
                       <a href="javascript:void(0);" class="dropdown-item notify-item">
                           <img src="{{ asset('assets/images/flags/spain_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Spanish </span>
                       </a>

                       <!-- item-->
                       <a href="javascript:void(0);" class="dropdown-item notify-item">
                           <img src="{{ asset('assets/images/flags/russia_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Russian </span>
                       </a>
                   </div>
               </div>

               <div class="dropdown d-none d-lg-inline-block">
                   <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                       <i class="mdi mdi-fullscreen font-size-24"></i>
                   </button>
               </div>

               


               <div class="dropdown d-inline-block">
                   <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/user-4.jpg') }}"
                           alt="Header Avatar">
                   </button>
                   <div class="dropdown-menu dropdown-menu-end">
                       <!-- item-->
                       <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 text-muted align-middle me-1"></i> Profile</a>
                       <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 text-muted align-middle me-1"></i> My Wallet</a>
                       <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog font-size-17 text-muted align-middle me-1"></i> Settings<span class="badge bg-success ms-auto">11</span></a>
                       <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 text-muted align-middle me-1"></i> Lock screen</a>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item text-danger"
                           href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                           <i class="mdi mdi-power font-size-17 text-muted align-middle me-1 text-danger"></i>
                           Logout
                       </a>

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                       </form>
                   </div>
               </div>

              
           </div>
       </div>
   </header>