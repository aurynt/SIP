<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
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
    <link rel="apple-touch-icon" sizes="76x76" href="assets/admin/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/admin/img/favicon.png">
    <title>
        Sistem Informasi Pertanahan Kota Tegal - {{ $title }}
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assets/admin/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="assets/admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/admin/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>
<div class="container mt-9">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header pb-0 text-left">
                    <h3 class="font-weight-bolder text-info text-gradient">SIP Kota Tegal</h3>
                    <p class="mb-0">Masukkan username dan Password</p>
                </div>
                <div class="card-body">
                    <form action="login" method="POST">
                        @csrf
                        <label>Username</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username">
                        </div>
                        <label>Password</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Sign in</button>
                        </div>
                    </form>
                </div>
                {{-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-4 text-sm mx-auto">
                        Don't have an account?
                        <a href="" class="text-info text-gradient font-weight-bold">Sign up</a>
                    </p>
                </div> --}}
            </div>
        </div>
    </div>
</div>

    <!--   Core JS Files   -->
    <script src="assets/admin/js/core/popper.min.js"></script>
    <script src="assets/admin/js/core/bootstrap.min.js"></script>
    <script src="assets/admin/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/admin/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="assets/admin/js/plugins/chartjs.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/admin/js/soft-ui-dashboard.min.js?v=1.0.3"></script>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>

</html>
