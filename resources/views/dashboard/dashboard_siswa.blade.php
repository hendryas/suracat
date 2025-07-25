@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('layouts.partials.page-title', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
        ])

        <div class="row">
            <div class="col-md-4">
                <div class="card bg-corner-img">
                    <div class="card-body">
                        <p class="text-muted fs-13 mb-0">Ujian Tersedia</p>
                        <h4 class="fw-medium">{{ $totalUjianTersedia }}</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-corner-img">
                    <div class="card-body">
                        <p class="text-muted fs-13 mb-0">Ujian Selesai</p>
                        <h4 class="fw-medium">{{ $totalUjianSelesai }}</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-corner-img">
                    <div class="card-body">
                        <p class="text-muted fs-13 mb-0">Nilai Tertinggi</p>
                        <h4 class="fw-medium">{{ $nilaiTertinggi ?? 0 }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
