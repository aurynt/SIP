@extends('layouts.main')
@section('page')
 <!-- Hero Start -->
 <section class="bg-half-170 d-table w-100" style="background: url('assets/images/bg-alun-tegal.jpeg') center center; background-repeat: no-repeat; background-size: cover;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h2 class="text-white title-dark"> Statistik </h2>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Statistik</li>
                </ul>
            </nav>
        </div>
    </div> <!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-color-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->

<!-- data filter start -->
<section class="section">
    <div class="container">
        <!-- data table start -->
        <div class="card custom-form border-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mt-4 pt-2">
                        <ul class="nav nav-pills nav-justified flex-column rounded shadow p-3 mb-0 sticky-bar" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link rounded active" id="webdeveloping" data-bs-toggle="pill" href="#developing" role="tab" aria-controls="developing" aria-selected="false">
                                    <div class="text-center py-1">
                                        <h6 class="mb-0">Luas Tanah Per-Kecamatan</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->

                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="database" data-bs-toggle="pill" href="#data-analise" role="tab" aria-controls="data-analise" aria-selected="false">
                                    <div class="text-center py-1">
                                        <h6 class="mb-0">Luas Tanah Per-Kelurahan</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->

                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="server" data-bs-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
                                    <div class="text-center py-1">
                                        <h6 class="mb-0">Aset Tanah Kelurahan</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                        </ul><!--end nav pills-->
                    </div><!--end col-->

                    <div class="col-md-8 col-12 mt-4 pt-2">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active p-4 rounded shadow" id="developing" role="tabpanel" aria-labelledby="webdeveloping">
                                <p class="text-muted mb-0">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                            </div><!--end teb pane-->

                            <div class="tab-pane fade p-4 rounded shadow" id="data-analise" role="tabpanel" aria-labelledby="database">
                                <p class="text-muted mb-0">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                            </div><!--end teb pane-->

                            <div class="tab-pane fade p-4 rounded shadow" id="security" role="tabpanel" aria-labelledby="server">
                                <p class="text-muted mb-0">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                            </div><!--end teb pane-->
                        </div><!--end tab content-->
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </div>
        <!-- data table ends -->
    </div><!--end container-->
</section>
<!-- data filter ends -->
@include('layouts.footer')
@endsection
