@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('layouts.partials.page-title', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
        ])

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-corner-img">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-9">
                                        <p class="text-muted text-uppercase mb-0 fw-normal fs-13">Total Guru</p>
                                        <h4 class="mt-1 mb-0 fw-medium">{{ $totalGuru }}</h4>
                                    </div>
                                    <div class="col-3 align-self-center">
                                        <div
                                            class="d-flex justify-content-center align-items-center thumb-md border-dashed border-primary rounded mx-auto">
                                            <i class="iconoir-user-tag fs-22 text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-corner-img">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-9">
                                        <p class="text-muted text-uppercase mb-0 fw-normal fs-13">Total Siswa</p>
                                        <h4 class="mt-1 mb-0 fw-medium">{{ $totalSiswa }}</h4>
                                    </div>
                                    <div class="col-3 align-self-center">
                                        <div
                                            class="d-flex justify-content-center align-items-center thumb-md border-dashed border-success rounded mx-auto">
                                            <i class="iconoir-user-square fs-22 text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-corner-img">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-9">
                                        <p class="text-muted text-uppercase mb-0 fw-normal fs-13">Total Soal</p>
                                        <h4 class="mt-1 mb-0 fw-medium">{{ $totalSoal }}</h4>
                                    </div>
                                    <div class="col-3 align-self-center">
                                        <div
                                            class="d-flex justify-content-center align-items-center thumb-md border-dashed border-warning rounded mx-auto">
                                            <i class="iconoir-docs fs-22 text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-corner-img">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-9">
                                        <p class="text-muted text-uppercase mb-0 fw-normal fs-13">Total Ujian</p>
                                        <h4 class="mt-1 mb-0 fw-medium">{{ $totalUjian }}</h4>
                                    </div>
                                    <div class="col-3 align-self-center">
                                        <div
                                            class="d-flex justify-content-center align-items-center thumb-md border-dashed border-danger rounded mx-auto">
                                            <i class="iconoir-book fs-22 text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!--end row-->
            </div>
        </div>
    </div>
@endsection
