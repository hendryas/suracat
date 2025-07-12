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
                                <h4 class="card-title">Data Guru</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalTambahGuru">
                                    + Tambah Guru
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
                                    @foreach ($dataGuru as $guru)
                                        <tr>
                                            <td>{{ $guru->name }}</td>
                                            <td>{{ $guru->email }}</td>
                                            <td>{{ $guru->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <!-- Tombol Edit -->
                                                <button type="button" class="btn btn-sm btn-warning btn-edit"
                                                    data-id="{{ $guru->id }}" data-name="{{ $guru->name }}"
                                                    data-email="{{ $guru->email }}" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditGuru">
                                                    Edit
                                                </button>

                                                <!-- Tombol Delete -->
                                                <button type="button" class="btn btn-sm btn-danger btn-delete"
                                                    data-id="{{ $guru->id }}" data-name="{{ $guru->name }}">
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


    <script>
        $(document).ready(function() {
            $('.btn-delete').on('click', function() {
                const guruId = $(this).data('id');
                const guruName = $(this).data('name');

                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: `Data guru "${guruName}" akan dihapus!`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `/admin/guru/${guruId}`,
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
                            $('#modalTambahGuru').modal('hide');

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
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Gagal menyimpan data. Silakan periksa input Anda.'
                        });
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
                $('#formEditGuru').attr('action', `/admin/guru/${id}`);
            });

            // Handle form update dengan AJAX dan SweetAlert
            $('#formEditGuru').on('submit', function(e) {
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
                            $('#modalEditGuru').modal('hide');
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
