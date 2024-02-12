@extends('layouts.main')
@section('page')
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('assets/images/bg-alun-tegal.jpeg') center center; background-repeat: no-repeat; background-size: cover;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <h2 class="text-white title-dark"> Peraturan </h2>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Peraturan</li>
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
                    <div class="table-responsive rounded shadow p-4">
                        <table id="myTable" class="table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama Peraturan</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Undang Undang Nomor 5 Tahun 1960 Tentang Peraturan Dasar-Dasar Pokok Agraria</td>
                                    <td>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <button class="btn btn-primary flex-grow-1" style="padding: 6px 8px; font-size: 12px;">Download</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>Undang Undang Nomor 10 Tahun 1960 Tentang Peraturan Dasar-Dasar Pokok Agraria</td>
                                    <td>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <button class="btn btn-primary flex-grow-1" style="padding: 6px 8px; font-size: 12px;">Download</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">8</td>
                                    <td>Undang Undang Nomor 25 Tahun 1960 Tentang Peraturan Dasar-Dasar Pokok Agraria</td>
                                    <td>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <button class="btn btn-primary flex-grow-1" style="padding: 6px 8px; font-size: 12px;">Download</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <th class="text-center">No</th>
                                    <th>Nama Peraturan</th>
                                    <th>Option</th>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!-- data table ends -->
        </div><!--end container-->
    </section>
    <!-- data filter ends -->
    @include('layouts.footer')
@endsection
