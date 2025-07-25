@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('layouts.partials.page-title', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
        ])

        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="card bg-corner-img">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-muted mb-1 fw-normal fs-13">Jumlah Soal Buatan Anda</p>
                                <h4 class="fw-medium">{{ $jumlahSoal }}</h4>
                            </div>
                            <div class="col-3">
                                <div class="thumb-md border-dashed border-primary rounded mx-auto text-center">
                                    <i class="iconoir-book fs-22 text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="card bg-corner-img">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-muted mb-1 fw-normal fs-13">Jumlah Ujian yang Anda Buat</p>
                                <h4 class="fw-medium">{{ $jumlahUjian }}</h4>
                            </div>
                            <div class="col-3">
                                <div class="thumb-md border-dashed border-info rounded mx-auto text-center">
                                    <i class="iconoir-document fs-22 text-info"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
