@extends('layouts.main')
@section('page')
    <!-- content Start -->
    <section class="bg-half-170 bg-half-mobile d-table w-100 vh-100 d-flex align-items-center"
        style="background: url('assets/images/bg-alun-tegal.jpeg') center center; background-repeat: no-repeat; background-size: cover;"
        id="home">
        <div class="bg-overlay-tegal"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="title-heading mt-4">
                        <p class="para-desc text-muted text-left">Selamat Datang di Website</p>
                        <h1 class="mb-1 text-left text-uppercase text-white">Sistem Informasi Pertanahan Kota Tegal
                        </h1>
                        <p class="mb-2 text-left text-white opacity-7 fw-light">Sistem Informasi Pertanahan Kota Tegal
                            memfasilitasi pengelolaan dan akses informasi pertanahan dengan efisiensi.
                            Meningkatkan transparansi, akuntabilitas, dan pelayanan terkait pertanahan di Kota
                            Tegal.</p>
                    </div>
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="d-flex flex-column justify-content-center align-items-center"
                        style="position: relative; z-index: 1;">
                        <div class="d-flex menu-list position-relative gap-4 flex-wrap justify-content-center">
                            <a href="tanah-lahan" class="menu-item">
                                <img src="assets/images/custom/Tanah-dan-Lahan.png" class="w-50" alt="">
                                <p>Tanah dan Lahan</p>
                            </a>
                            <a href="ruas-jalan" class="menu-item">
                                <img src="assets/images/custom/Ruas-Jalan.png" class="w-50" alt="">
                                <p>Ruas Jalan</p>
                            </a>
                            <a href="drainase" class="menu-item">
                                <img src="assets/images/custom/drainase.png" class="w-50" alt="">
                                <p>Drainase</p>
                            </a>
                            <a href="peraturan" class="menu-item">
                                <img src="assets/images/custom/Peraturan.png" class="w-50" alt="">
                                <p>Peraturan</p>
                            </a>
                            <a href="statistik" class="menu-item">
                                <img src="assets/images/custom/Statistik.png" class="w-50" alt="">
                                <p>Statistik</p>
                            </a>
                            <a href="peta" class="menu-item">
                                <img src="assets/images/custom/Peta.png" class="w-50" alt="">
                                <p>Peta</p>
                            </a>
                        </div>
                    </div>
                    <div class="classic-app-image position-relative d-none d-sm-block">
                        <div class="bg-app-shape-left position-relative"></div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- content End -->
@endsection
