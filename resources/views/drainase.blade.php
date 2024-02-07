@extends('layouts.main')
@section('page')
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100"
        style="background: url('https://ministry.phicos.co.id/tegal-sip/assets/front/images/bg-alun-tegal.jpeg') center center; background-repeat: no-repeat; background-size: cover;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <h2 class="text-white title-dark"> Data Drainase </h2>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Drainase</li>
                    </ul>
                </nav>
            </div>
        </div> <!--end container-->
    </section>
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
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-form border-0">
                        <div class="card-body">
                            <form class="rounded shadow p-4"
                                action="https://ministry.phicos.co.id/tegal-sip/export/excel_drainase/export"
                                method="POST">
                                <input type="hidden" name="tegal-sip-token" value="9037360785d265fd2d3156f7100b3b34">
                                <input type="hidden" name="jenis" value="front">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Kecamatan :</label>
                                            <select class="form-control form-select" name="kecamatan" id="filter-kec">
                                                <option value="">--Semua Kecamatan--</option>
                                                <option value="337601">Tegal Barat</option>
                                                <option value="337602">Tegal Timur</option>
                                                <option value="337603">Tegal Selatan</option>
                                                <option value="337604">Margadana</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Kelurahan :</label>
                                            <select class="form-control form-select" name="kelurahan" id="filter-kel">
                                                <option value="">--Semua Kelurahan--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-success text-center">Cetak Excel</button>
                                    </div>
                                </div><!--end row-->
                            </form><!--end form-->
                        </div>
                    </div><!--end custom-form-->
                </div>
            </div>
            <!-- data table start -->
            <div class="card custom-form border-0">
                <div class="card-body">
                    <div class="table-responsive rounded shadow p-4">
                        <div id="table-data_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <table id="myTable" class="table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Nama Ruas Jalan</th>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th>Nomor Sertifikat</th>
                                        <th>Luas Sertifikat (m<sup>2</sup>)</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td>1.</td>
                                        <td>Saluran Jalan Gurame</td>
                                        <td>Tegal Barat</td>
                                        <td>Tegalsari</td>
                                        <td>HP 00270</td>
                                        <td>109</td>
                                        <td>
                                            <div class="btn-group"><button
                                                    class="btn btn-primary btn-sm btn-detail" type="button"
                                                    data-id="TllxVm80b2VTWHM0azkybDJBbG9JZWFUVElSNzJSeWVZUi9OWCtFLzdzdz0="
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Detail">Detail</button></div>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td>4.</td>
                                        <td>Saluran Jalan Koi</td>
                                        <td>Jagal Utara</td>
                                        <td>Tegalsari</td>
                                        <td>HP 00270</td>
                                        <td>109</td>
                                        <td>
                                            <div class="btn-group"><button
                                                    class="btn btn-primary btn-sm btn-detail" type="button"
                                                    data-id="TllxVm80b2VTWHM0azkybDJBbG9JZWFUVElSNzJSeWVZUi9OWCtFLzdzdz0="
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Detail">Detail</button></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- data table ends -->
        </div><!--end container-->
    </section>
@endsection
