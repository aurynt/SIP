@extends('layouts.main')
@section('page')
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('assets/images/bg-alun-tegal.jpeg') center center; background-repeat: no-repeat; background-size: cover;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h2 class="text-white title-dark"> Data Tanah dan Lahan </h2>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Tanah dan Lahan</li>
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
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card custom-form border-0">
                    <div class="card-body">
                        <form class="rounded shadow p-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Kecamatan :</label>
                                        <select class="form-control form-select" id="Sortbylist-Shop">
                                            <option>Pilih</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Kelurahan :</label>
                                        <select class="form-control form-select" id="Sortbylist-Shop">
                                            <option>Pilih</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Luas :</label>
                                        <div class="d-flex gap-3">
                                            <input name="number" id="number1" type="number" class="form-control" placeholder="Luas Min">
                                            <input name="number" id="number2" type="number" class="form-control" placeholder="Luas Max">
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Lahan Terbangun :</label>
                                        <select class="form-control form-select" id="Sortbylist-Shop">
                                            <option>Pilih</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Pemegang Hak :</label>
                                        <select class="form-control form-select" id="Sortbylist-Shop">
                                            <option>Pilih</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Kode :</label>
                                        <select class="form-control form-select" id="Sortbylist-Shop">
                                            <option>Pilih</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Status :</label>
                                        <select class="form-control form-select" id="Sortbylist-Shop">
                                            <option>Pilih</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div><!--end col-->
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
                    <table id="myTable" class="table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan</th>
                                <th>Pemegang HAK</th>
                                <th>Luas Terbangun</th>
                                <th>Status</th>
                                <th>Penggunaan Lahan</th>
                                <th>Kode</th>
                                <th>Nomor</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Tegal Timur</td>
                                <td>Tegal</td>
                                <td>Pemerintah Kota Tegal</td>
                                <td>Terbangun</td>
                                <td>Sudah Bersertifikat Tahun 1986</td>
                                <td>Kantor Kelurahan Tegal</td>
                                <td>HP</td>
                                <td>HP 04</td>
                                <td>
                                    <div class="d-flex gap-2 justify-content-center">
                                        <button class="btn btn-primary flex-grow-1" style="padding: 6px 8px; font-size: 12px;">Detail</button>
                                        <button class="btn btn-danger flex-grow-1" style="padding: 6px 8px; font-size: 12px;">Cetak</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <th class="text-center">No</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>Pemegang HAK</th>
                            <th>Luas Terbangun</th>
                            <th>Status</th>
                            <th>Penggunaan Lahan</th>
                            <th>Kode</th>
                            <th>Nomor</th>
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
