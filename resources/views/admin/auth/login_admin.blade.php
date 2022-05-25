<!--
=========================================================
* Material Dashboard 2 - v3.0.2
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('template')}}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{asset('template')}}/assets/img/favicon.png">
    <title>
        SPMI PT | Login Akun Admin
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{asset('template')}}/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{asset('template')}}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('template')}}/assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="bg-gray-200">
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100" style="background-image: url('{{asset('template')}}/assets/img/meeting.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Login Akun</h4>
                                    <p class="text-white text-center mt-2 mb-0 small">Masukkan email beserta password </p>
                                </div>
                            </div>
                            <div class="card-body">
                                @if ($message = Session::get('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="alert-icon align-middle">
                                <span class="material-icons text-md">
                                thumb_down_off_alt
                                </span>
                                </span>
                                <span class="alert-text">{{ $message }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @elseif ($message = Session::get('gagal'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="alert-icon align-middle">
                                <span class="material-icons text-md">
                                thumb_down_off_alt
                                </span>
                                </span>
                                <span class="alert-text">{{ $message }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                                <form role="form" action="{{route('admin_login')}}" method="post">
                                    @csrf
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" autofocus required>
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute bottom-2 py-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-12 col-md-6 my-auto">
                            <div class="copyright text-center text-sm text-white text-lg-start">
                                © <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                made by
                                <a href="https://pcr.ac.id/" class="font-weight-bold text-white" target="_blank">Politeknik Caltex Riau</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="{{asset('template')}}/assets/js/core/popper.min.js"></script>
    <script src="{{asset('template')}}/assets/js/core/bootstrap.min.js"></script>
    <script src="{{asset('template')}}/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{asset('template')}}/assets/js/plugins/smooth-scrollbar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('template')}}/assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>