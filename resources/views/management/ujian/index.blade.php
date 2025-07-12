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
                                <h4 class="card-title">Data Ujian</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <button class="mb-3 btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalTambahUjian">+ Tambah Ujian</button>
                            </div>
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="pt-0 card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama Ujian</th>
                                        <th>Durasi (menit)</th>
                                        <th>Jadwal</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ujians as $ujian)
                                        <tr>
                                            <td>{{ $ujian->nama_ujian }}</td>
                                            <td>{{ $ujian->durasi_menit }}</td>
                                            <td>{{ $ujian->jadwal }}</td>
                                            <td>{{ $ujian->status }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning btnEditUjian"
                                                    data-id="{{ $ujian->id }}" data-nama="{{ $ujian->nama_ujian }}"
                                                    data-durasi="{{ $ujian->durasi_menit }}"
                                                    data-jadwal="{{ \Carbon\Carbon::parse($ujian->jadwal)->format('Y-m-d\TH:i') }}">Edit</button>

                                                <button class="btn btn-sm btn-danger btnDeleteUjian"
                                                    data-id="{{ $ujian->id }}" data-nama="{{ $ujian->nama_ujian }}">
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

    <!-- Modal Tambah Ujian -->
    <div class="modal fade" id="modalTambahUjian" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="formTambahUjian">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Ujian</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-2">
                            <label>Nama Ujian</label>
                            <input type="text" name="nama_ujian" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Durasi (menit)</label>
                            <input type="number" name="durasi_menit" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Jadwal</label>
                            <input type="datetime-local" name="jadwal" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Ujian -->
    <div class="modal fade" id="modalEditUjian" tabindex="-1" aria-labelledby="judulModalEdit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="formEditUjian">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Ujian</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="edit_id" name="id">
                        <div class="mb-2">
                            <label>Nama Ujian</label>
                            <input type="text" name="nama_ujian" id="edit_nama_ujian" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Durasi (menit)</label>
                            <input type="number" name="durasi_menit" id="edit_durasi_menit" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Jadwal</label>
                            <input type="datetime-local" name="jadwal" id="edit_jadwal" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).on('click', '.btnDeleteUjian', function() {
            const id = $(this).data('id');
            const nama = $(this).data('nama');

            Swal.fire({
                title: `Hapus ujian "${nama}"?`,
                text: "Data tidak dapat dikembalikan setelah dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e3342f',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/ujian/${id}`,
                        method: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: 'Ujian berhasil dihapus.',
                                timer: 1500,
                                showConfirmButton: false
                            }).then(() => location.reload());
                        }
                    });
                }
            });
        });
    </script>

    <script>
        $('#formTambahUjian').submit(function(e) {
            e.preventDefault();
            let formData = $(this).serialize();

            $.ajax({
                url: "{{ route('ujian.store') }}",
                method: "POST",
                data: formData,
                success: function(response) {
                    $('#modalTambahUjian').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Ujian berhasil ditambahkan.',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        location.reload(); // reload untuk muat ulang data
                    });
                }
            });
        });
    </script>

    <script>
        $(document).on('click', '.btnEditUjian', function() {
            let id = $(this).data('id');
            $('#edit_id').val(id);
            $('#edit_nama_ujian').val($(this).data('nama'));
            $('#edit_durasi_menit').val($(this).data('durasi'));
            $('#edit_jadwal').val($(this).data('jadwal'));
            $('#modalEditUjian').modal('show');
        });

        $('#formEditUjian').submit(function(e) {
            e.preventDefault();
            let id = $('#edit_id').val();
            let formData = $(this).serialize();

            $.ajax({
                url: `/admin/ujian/${id}`, // pastikan route sesuai
                method: "POST",
                data: formData,
                success: function() {
                    $('#modalEditUjian').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Data ujian berhasil diperbarui.',
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => location.reload());
                }
            });
        });
    </script>
@endsection
