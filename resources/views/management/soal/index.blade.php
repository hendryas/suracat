@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('layouts.partials.page-title', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
        ])
        <div class="row justify-content-center">
            <div class="col-12">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Manajemen Soal Ujian</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <a href="{{ route('soal.create') }}" class="btn btn-primary">
                                    + Tambah Soal
                                </a>
                            </div>
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="pt-0 card-body">
                        <div class="table-responsive">
                            <table class="table datatable" id="datatable_1">
                                <thead class="table-light">
                                    <tr>
                                        <th>Kode Soal</th>
                                        <th>Pertanyaan</th>
                                        <th>Kategori</th>
                                        <th>Jawaban Benar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataSoal as $soal)
                                        <tr>
                                            <td>{{ $soal->kode_soal }}</td>
                                            <td>{{ Str::limit(strip_tags($soal->pertanyaan), 50) }}</td>
                                            <td>{{ $soal->kategori ?? '-' }}</td>
                                            <td><strong>{{ $soal->jawaban_benar }}</strong></td>
                                            <td>
                                                <a href="{{ route('soal.edit', $soal->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <button class="btn btn-sm btn-danger btn-delete"
                                                    data-id="{{ $soal->id }}">Hapus</button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Belum ada soal</td>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('.btn-delete').click(function() {
                let id = $(this).data('id');

                Swal.fire({
                    title: 'Hapus Soal?',
                    text: 'Data soal ini akan dihapus permanen.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, hapus',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `/admin/soal/${id}`,
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                _method: 'DELETE'
                            },
                            success: function(res) {
                                if (res.status === 'success') {
                                    Swal.fire('Berhasil', res.message, 'success').then(
                                        () => {
                                            location.reload();
                                        });
                                } else {
                                    Swal.fire('Gagal', res.message, 'error');
                                }
                            },
                            error: function() {
                                Swal.fire('Error',
                                    'Terjadi kesalahan saat menghapus soal.',
                                    'error');
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
