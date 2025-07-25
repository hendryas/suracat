@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('layouts.partials.page-title', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
        ])

        <div class="row">
            <div class="col-md-6">
                <div class="card bg-corner-img">
                    <div class="card-body">
                        <p class="text-muted fs-13 mb-0">Total Ujian Aktif</p>
                        <h4 class="fw-medium">{{ $totalUjianAktif }}</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-corner-img">
                    <div class="card-body">
                        <p class="text-muted fs-13 mb-0">Peserta Sedang Ujian</p>
                        <h4 class="fw-medium">{{ $totalPesertaUjian }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
