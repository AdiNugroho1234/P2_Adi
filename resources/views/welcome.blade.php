<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/lexa-mvc5/layouts/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jan 2026 08:17:54 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Login | Lexa - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet">
    <!-- App Css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">


</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="card-body pt-0">

                            <h3 class="text-center mt-5 mb-4">
                                <a href="index.html" class="d-block auth-logo">
                                    <img src="/assets/images/logo-dark.png" alt="" height="30" class="auth-logo-dark">
                                    <img src="/assets/images/logo-light.png" alt="" height="30" class="auth-logo-light">
                                </a>
                            </h3>

                            <div class="p-3">
                                <h4 class="text-muted font-size-18 mb-1 text-center">Welcome Back !</h4>
                                <p class="text-muted text-center">Sign in to continue to Lexa.</p>
                                <form class="form-horizontal mt-4" action="https://themesbrand.com/lexa-mvc5/layouts/index.html">
                                    <div class="mb-3">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                    </div>
                                    <div class="mb-3 row mt-4">
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customControlInline">
                                                <label class="form-check-label" for="customControlInline">Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-4">
                                            <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Don't have an account ? <a href="{{ route('register') }}" class="text-primary">Signup Now</a>
                        </p>
                        © <script>
                            document.write(new Date().getFullYear())
                        </script> Lexa <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>


<!-- Mirrored from themesbrand.com/lexa-mvc5/layouts/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jan 2026 08:17:54 GMT -->

</html>