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
    <link rel="apple-touch-icon" sizes="76x76" href="template/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="template/assets/img/favicon.png">
    <title>
        SPMI PT | Login Akun Perguruan Tinggi
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="template/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="template/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="template/assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="">
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('template/assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
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
                        @endif
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Login</h4>
                                    <p class="mb-0">Masukkan kode perguruan tinggi beserta password</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" action="{{route('pt_login')}}" method="post">
                                        @csrf
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Kode Perguruan Tinggi</label>
                                            <input type="text" class="form-control" name="npsn" autofocus required>
                                        </div>
                                        <span class="text-danger">@error('npsn'){{ $message }} @enderror</span>
                                        
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="template/assets/js/core/popper.min.js"></script>
    <script src="template/assets/js/core/bootstrap.min.js"></script>
    <script src="template/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="template/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="template/assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>