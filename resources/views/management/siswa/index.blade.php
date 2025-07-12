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
                                <h4 class="card-title">Data Siswa</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalTambahSiswa">
                                    + Tambah Siswa
                                </button>
                            </div>
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="pt-0 card-body">
                        <div class="table-responsive">
                            <table class="table datatable" id="datatable_1">
                                <thead class="table-light">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Tanggal Dibuat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataSiswa as $row)
                                        <tr>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <!-- Tombol Edit -->
                                                <button type="button" class="btn btn-sm btn-warning btn-edit"
                                                    data-id="{{ $row->id }}" data-name="{{ $row->name }}"
                                                    data-email="{{ $row->email }}" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditSiswa">
                                                    Edit
                                                </button>

                                                <!-- Tombol Delete -->
                                                <button type="button" class="btn btn-sm btn-danger btn-delete"
                                                    data-id="{{ $row->id }}" data-name="{{ $row->name }}">
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

    <!-- Modal Tambah Siswa -->
    <div class="modal fade" id="modalTambahSiswa" tabindex="-1" aria-labelledby="modalTambahSiswaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahSiswaLabel">Tambah Data Siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Siswa</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password Login</label>
                            <input type="password" class="form-control" name="password" id="password" required>
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

    <!-- Modal Edit Siswa -->
    <div class="modal fade" id="modalEditSiswa" tabindex="-1" aria-labelledby="modalEditSiswaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="formEditSiswa" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditSiswaLabel">Edit Data Siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="edit-id">
                        <div class="mb-3">
                            <label for="edit-nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="name" id="edit-nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="edit-email" required>
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
                            },
                            error: function() {
                                Swal.fire('Error', 'Gagal menghapus data.', 'error');
                            }
                        });
                    }
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('form').on('submit', function(e) {
                e.preventDefault();

                var form = $(this);
                var formData = form.serialize();
                var actionUrl = form.attr('action');

                $.ajax({
                    url: actionUrl,
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.status === 'success') {
                            $('#modalTambahSiswa').modal('hide');

                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.message,
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                location.reload(); // reload page to show new data
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: response.message || 'Terjadi kesalahan.'
                            });
                        }
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Saat tombol edit diklik
            $('.btn-edit').on('click', function() {
                let id = $(this).data('id');
                let name = $(this).data('name');
                let email = $(this).data('email');

                $('#edit-id').val(id);
                $('#edit-nama').val(name);
                $('#edit-email').val(email);

                // Set action URL untuk form update
                $('#formEditSiswa').attr('action', `/admin/siswa/${id}`);
            });

            // Handle form update dengan AJAX dan SweetAlert
            $('#formEditSiswa').on('submit', function(e) {
                e.preventDefault();

                let form = $(this);
                let actionUrl = form.attr('action');
                let formData = form.serialize();

                $.ajax({
                    url: actionUrl,
                    type: 'POST',
                    data: formData,
                    success: function(res) {
                        if (res.status === 'success') {
                            $('#modalEditSiswa').modal('hide');
                            Swal.fire('Sukses', res.message, 'success').then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire('Gagal', res.message, 'error');
                        }
                    },
                    error: function() {
                        Swal.fire('Error', 'Terjadi kesalahan saat mengupdate data.', 'error');
                    }
                });
            });
        });
    </script>
@endsection
