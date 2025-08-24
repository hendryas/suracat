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
                    {{-- <video id="localVideo" autoplay muted playsinline></video>
                    <video id="remoteVideo" autoplay playsinline></video> --}}
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Kelola Peserta Ujian</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahPeserta">
                                    + Tambah Peserta
                                </button>
                            </div>
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="pt-0 card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="tablePeserta">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Siswa</th>
                                        <th>Ujian</th>
                                        <th>Waktu Daftar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($peserta as $i => $row)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $row->siswa_nama ?? '-' }}</td>
                                            <td>{{ $row->nama_ujian ?? '-' }}</td>
                                            <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d/m/Y H:i') }}
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-warning btnEdit"
                                                    data-id="{{ $row->peserta_id }}">
                                                    Edit
                                                </button>
                                                <button class="btn btn-sm btn-danger btnDeletePeserta"
                                                    data-id="{{ $row->peserta_id }}" data-nama="{{ $row->siswa_nama }}">
                                                    Hapus
                                                </button>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->
    </div>

    <!-- Modal Tambah Peserta -->
    <div class="modal fade" id="modalTambahPeserta" tabindex="-1" aria-labelledby="modalTambahPesertaLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form id="formTambahPeserta" method="POST" action="{{ route('peserta.store') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Peserta Ujian</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="siswa_id" class="form-label">Pilih Siswa</label>
                            <select name="siswa_id" class="form-select" required>
                                <option value="">-- Pilih Siswa --</option>
                                @foreach ($siswa as $s)
                                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ujian_id" class="form-label">Pilih Ujian</label>
                            <select name="ujian_id" class="form-select" required>
                                <option value="">-- Pilih Ujian --</option>
                                @foreach ($ujian as $u)
                                    <option value="{{ $u->id }}">{{ $u->nama_ujian }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Edit Peserta -->
    <div class="modal fade" id="modalEditPeserta" tabindex="-1" aria-labelledby="modalEditPesertaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="formEditPeserta">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="edit_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Peserta Ujian</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_siswa_id" class="form-label">Pilih Siswa</label>
                            <select name="siswa_id" id="edit_siswa_id" class="form-select" required>
                                @foreach ($siswa as $s)
                                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit_ujian_id" class="form-label">Pilih Ujian</label>
                            <select name="ujian_id" id="edit_ujian_id" class="form-select" required>
                                @foreach ($ujian as $u)
                                    <option value="{{ $u->id }}">{{ $u->nama_ujian }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            // $('#tablePeserta').DataTable();

            $('.btnDeletePeserta').on('click', function() {
                let id = $(this).data('id');
                let nama = $(this).data('nama');

                Swal.fire({
                    title: 'Hapus Peserta?',
                    text: `Peserta atas nama "${nama}" akan dihapus dari ujian.`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `/admin/peserta-ujian/${id}`,
                            type: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(res) {
                                Swal.fire('Berhasil!', res.message, 'success').then(
                                    () => location.reload());
                            },
                            error: function() {
                                Swal.fire('Gagal!',
                                    'Terjadi kesalahan saat menghapus data.',
                                    'error');
                            }
                        });
                    }
                });
            });

        });
    </script>

    <script>
        $(document).ready(function() {
            $('.btn-delete').on('click', function() {
                const siswaId = $(this).data('id');
                const siswaName = $(this).data('name');

                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: `Data siswa "${siswaName}" akan dihapus!`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `/admin/siswa/${siswaId}`,
                            type: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                _method: 'DELETE'
                            },
                            success: function(res) {
                                if (res.status === 'success') {
                                    Swal.fire('Berhasil!', res.message, 'success').then(
                                        () => {
                                            location.reload();
                                        });
                                } else {
                                    Swal.fire('Gagal', res.message, 'error');
                                }
                            }
                        });
                    }
                });
            });
        });
    </script>

    <script>
        $('.btnEdit').on('click', function() {
            let id = $(this).data('id');

            // Ambil data dari baris tabel
            let row = $(this).closest('tr');
            let siswa = row.find('td:eq(1)').text().trim();
            let ujian = row.find('td:eq(2)').text().trim();

            $('#edit_id').val(id);
            $('#edit_siswa_id option').filter(function() {
                return $(this).text().trim() === siswa;
            }).prop('selected', true);

            $('#edit_ujian_id option').filter(function() {
                return $(this).text().trim() === ujian;
            }).prop('selected', true);

            $('#modalEditPeserta').modal('show');
        });

        // Submit update
        $('#formEditPeserta').on('submit', function(e) {
            e.preventDefault();
            const id = $('#edit_id').val();
            const data = $(this).serialize();

            $.ajax({
                url: `/admin/peserta-ujian/${id}`,
                type: 'POST',
                data: data,
                success: function(res) {
                    Swal.fire('Berhasil!', res.message, 'success').then(() => location.reload());
                },
                error: function(err) {
                    Swal.fire('Gagal!', 'Terjadi kesalahan saat update.', 'error');
                }
            });
        });
    </script>
@endsection
