@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('layouts.partials.page-title', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
        ])

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Daftar Ujian Aktif</h4>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->

                    <div class="pt-0 card-body">
                        <div class="table-responsive">
                            <table class="table datatable" id="datatable_1">
                                <thead class="table-light">
                                    <tr>
                                        <th>Nama Ujian</th>
                                        <th>Durasi</th>
                                        <th>Jadwal</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($ujians as $ujian)
                                        <tr>
                                            <td>{{ $ujian->nama_ujian }}</td>
                                            <td>{{ $ujian->durasi_menit }} menit</td>
                                            <td>{{ \Carbon\Carbon::parse($ujian->jadwal)->format('d M Y H:i') }}</td>
                                            <td>
                                                <span
                                                    class="text-white badge bg-success">{{ ucfirst($ujian->status) }}</span>
                                            </td>
                                            <td>
                                                <a href="{{ route('monitoring.ujian.show', $ujian->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    👁 Lihat Monitoring
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">Tidak ada ujian aktif.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->
    </div>
@endsection
