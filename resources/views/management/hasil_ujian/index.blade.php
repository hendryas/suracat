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
                        <h4 class="card-title">Hasil Ujian Siswa</h4>
                    </div>

                    <div class="pt-0 card-body">
                        <div class="table-responsive">
                            <table class="table table-striped datatable" id="datatable_1">
                                <thead class="table-light">
                                    <tr>
                                        <th>Nama Siswa</th>
                                        <th>Nama Ujian</th>
                                        <th>Jadwal</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Nilai</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($hasilUjian as $hasil)
                                        <tr>
                                            <td>{{ $hasil->nama_siswa }}</td>
                                            <td>{{ $hasil->nama_ujian }}</td>
                                            <td>{{ \Carbon\Carbon::parse($hasil->jadwal)->format('d M Y H:i') }}</td>
                                            <td>{{ $hasil->waktu_mulai }}</td>
                                            <td>{{ $hasil->waktu_selesai }}</td>
                                            <td><strong>{{ round($hasil->nilai, 2) }}</strong></td>
                                            <td>
                                                <a href="{{ route('hasil-ujian.export-pdf-per-ujian', ['siswa_id' => $hasil->siswa_id, 'ujian_id' => $hasil->ujian_id]) }}"
                                                    target="_blank" class="btn btn-sm btn-danger">
                                                    <i class="ri-file-pdf-2-line"></i> PDF
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center text-muted">Belum ada hasil ujian
                                                tersedia.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div>
        </div>
    </div>
@endsection
