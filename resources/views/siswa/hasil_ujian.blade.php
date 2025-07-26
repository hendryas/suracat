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
                        <h4 class="card-title">Hasil Ujian Saya</h4>
                    </div>
                    <div class="pt-0 card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered datatable" id="datatable_1">
                                <thead>
                                    <tr>
                                        <th>Nama Ujian</th>
                                        <th>Jadwal</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Nilai</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($hasil as $row)
                                        <tr>
                                            <td>{{ $row->nama_ujian }}</td>
                                            <td>{{ \Carbon\Carbon::parse($row->jadwal)->format('d M Y H:i') }}</td>
                                            <td>{{ $row->waktu_mulai }}</td>
                                            <td>{{ $row->waktu_selesai }}</td>
                                            <td><strong>{{ round($row->nilai, 2) }}</strong></td>
                                            <td>
                                                <a href="{{ route('siswa.hasil-ujian.cetak', ['ujian_id' => $row->ujian_id ?? 0]) }}"
                                                    target="_blank" class="btn btn-sm btn-danger">
                                                    <i class="ri-file-pdf-line"></i> PDF
                                                </a>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center text-muted">Belum ada hasil ujian.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
