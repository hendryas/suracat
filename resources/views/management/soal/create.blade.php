<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">

<head>


    <meta charset="utf-8" />
    <title>SURACAT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">


    <link href="{{ asset('assets/libs/simple-datatables/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- App css -->

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>


<!-- Top Bar Start -->

<body>
    <!-- Top Bar Start -->
    <div class="topbar d-print-none">
        <div class="container-fluid">
            <nav class="topbar-custom d-flex justify-content-between" id="topbar-custom">


                <ul class="mb-0 topbar-item list-unstyled d-inline-flex align-items-center">
                    <li>
                        <button class="nav-link mobile-menu-btn nav-icon" id="togglemenu">
                            <i class="iconoir-menu"></i>
                        </button>
                    </li>
                </ul>
                <ul class="mb-0 topbar-item list-unstyled d-inline-flex align-items-center">
                    <li class="dropdown topbar-item">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle">
                        </a>
                        <div class="py-0 dropdown-menu dropdown-menu-end">
                            <div class="py-2 d-flex align-items-center dropdown-item bg-secondary-subtle">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                        class="thumb-md rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                    <h6 class="my-0 fw-medium text-dark fs-13">William Martin</h6>
                                    <small class="mb-0 text-muted">Front End Developer</small>
                                </div><!--end media-body-->
                            </div>
                            <a class="dropdown-item" href="pages-profile.html"><i
                                    class="align-text-bottom las la-user fs-18 me-1"></i> Profile</a>
                            <div class="mb-0 dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="auth-login.html"><i
                                    class="align-text-bottom las la-power-off fs-18 me-1"></i> Logout</a>
                        </div>
                    </li>
                </ul><!--end topbar-nav-->
            </nav>
            <!-- end navbar-->
        </div>
    </div>
    <!-- Top Bar End -->
    <!-- leftbar-tab-menu -->
    <div class="startbar d-print-none">
        <!--start brand-->
        <div class="brand">
            <a href="index.html" class="logo">
                <span>
                    <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                </span>
                <span class="">
                    <img src="assets/images/logo-light.png" alt="logo-large" class="logo-lg logo-light">
                    <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <!--end brand-->
        <!--start startbar-menu-->
        <div class="startbar-menu">
            <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
                <div class="d-flex align-items-start flex-column w-100">
                    <!-- Navigation -->
                    <ul class="mb-auto navbar-nav w-100">
                        <li class="mt-2 menu-label">
                            <span>Main</span>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.html">
                                <i class="iconoir-report-columns menu-icon"></i>
                                <span>Dashboard</span>
                                <span class="badge text-bg-info ms-auto">New</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarTransactions" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarTransactions">
                                <i class="iconoir-task-list menu-icon"></i>
                                <span>Management</span>
                            </a>
                            <div class="collapse " id="sidebarTransactions">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('guru.index') }}">Data Guru</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('siswa.index') }}">Data Siswa</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('soal.index') }}">Kelola Soal Ujian</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('ujian.index') }}">Kelola Ujian</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('peserta.index') }}">Kelola Peserta
                                            Ujian</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="new-transaction.html">Hasil Ujian</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarTables-->
                        </li><!--end nav-item-->

                    </ul><!--end navbar-nav--->
                </div>
            </div><!--end startbar-collapse-->
        </div><!--end startbar-menu-->
    </div><!--end startbar-->
    <div class="startbar-overlay d-print-none"></div>
    <!-- end leftbar-tab-menu-->


    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                            <h4 class="page-title">Tambah Soal</h4>
                            <div class="">
                                <ol class="mb-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Management</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item"><a href="#">Kelola Soal Ujial</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Tambah Soal</li>
                                </ol>
                            </div>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div><!--end row-->
                <div class="card">
                    <div class="card-body">
                        <form id="formTambahSoal">
                            @csrf

                            <div class="mb-3">
                                <label for="kode_soal" class="form-label">Kode Soal</label>
                                <input type="text" class="form-control @error('kode_soal') is-invalid @enderror"
                                    id="kode_soal" name="kode_soal" value="{{ old('kode_soal') }}" required>
                                @error('kode_soal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <input type="text" class="form-control" name="kategori" id="kategori"
                                    placeholder="Contoh: Matematika">
                            </div>

                            <div class="mb-3">
                                <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                <textarea name="pertanyaan" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan"
                                    rows="4" required>{{ old('pertanyaan') }}</textarea>
                                @error('pertanyaan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            @foreach (['a', 'b', 'c', 'd', 'e'] as $opt)
                                <div class="mb-3">
                                    <label for="opsi_{{ $opt }}" class="form-label">Opsi
                                        {{ strtoupper($opt) }}</label>
                                    <input type="text"
                                        class="form-control @error('opsi_' . $opt) is-invalid @enderror"
                                        id="opsi_{{ $opt }}" name="opsi_{{ $opt }}"
                                        value="{{ old('opsi_' . $opt) }}" required>
                                    @error('opsi_' . $opt)
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            @endforeach

                            <div class="mb-3">
                                <label for="jawaban_benar" class="form-label">Jawaban Benar</label>
                                <select class="form-select @error('jawaban_benar') is-invalid @enderror"
                                    name="jawaban_benar" required>
                                    <option value="">-- Pilih Jawaban Benar --</option>
                                    @foreach (['A', 'B', 'C', 'D', 'E'] as $opt)
                                        <option value="{{ $opt }}"
                                            {{ old('jawaban_benar') == $opt ? 'selected' : '' }}>{{ $opt }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('jawaban_benar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-success">Simpan Soal</button>
                                <a href="{{ route('soal.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>

                        </form>
                    </div>
                </div>


            </div><!-- container -->

            <footer class="text-center footer text-sm-start d-print-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-0 card rounded-bottom-0">
                                <div class="card-body">
                                    <p class="mb-0 text-muted">
                                        ©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>
                                        Suracat
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>

    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <!-- vendor js -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#formTambahSoal').on('submit', function(e) {
                e.preventDefault();

                let form = $(this);
                let formData = form.serialize();

                $.ajax({
                    url: "{{ route('soal.store') }}",
                    method: "POST",
                    data: formData,
                    success: function(res) {
                        if (res.status === 'success') {
                            Swal.fire({
                                title: 'Berhasil!',
                                text: res.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                window.location.href = "{{ route('soal.index') }}";
                            });
                        } else {
                            Swal.fire('Gagal', res.message, 'error');
                        }
                    },
                    error: function(xhr) {
                        let response = xhr.responseJSON;
                        let errorMsg = 'Terjadi kesalahan.';

                        if (response && response.errors) {
                            errorMsg = Object.values(response.errors)[0][0];
                        }

                        Swal.fire({
                            title: 'Error',
                            text: errorMsg,
                            icon: 'error'
                        });
                    }
                });
            });
        });
    </script>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

    <script src="{{ asset('assets/libs/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/js/pages/datatable.init.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>
<!--end body-->

</html>
