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

    <style>
        #videos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 10px;
        }

        video {
            width: 100%;
            border: 2px solid #333;
            border-radius: 8px;
        }
    </style>

    <style>
        #localVideo {
            position: fixed;
            top: 10px;
            right: 10px;
            width: 200px;
            height: 150px;
            border: 2px solid #007bff;
            border-radius: 8px;
            z-index: 9999;
            background-color: black;
            object-fit: cover;
        }
    </style>
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
                    <li class="hide-phone app-search">
                        <form role="search" action="#" method="get">
                            <input type="search" name="search" class="mb-0 form-control top-search"
                                placeholder="Search here...">
                            <button type="submit"><i class="iconoir-search"></i></button>
                        </form>
                    </li>
                </ul>
                <ul class="mb-0 topbar-item list-unstyled d-inline-flex align-items-center">

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                            <img src="assets/images/flags/us_flag.jpg" alt="" class="thumb-sm rounded-circle">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/us_flag.jpg"
                                    alt="" height="15" class="me-2">English</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg"
                                    alt="" height="15" class="me-2">Spanish</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg"
                                    alt="" height="15" class="me-2">German</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg"
                                    alt="" height="15" class="me-2">French</a>
                        </div>
                    </li><!--end topbar-language-->

                    <li class="topbar-item">
                        <a class="nav-link nav-icon" href="javascript:void(0);" id="light-dark-mode">
                            <i class="iconoir-half-moon dark-mode"></i>
                            <i class="iconoir-sun-light light-mode"></i>
                        </a>
                    </li>

                    <li class="dropdown topbar-item">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                            <i class="iconoir-bell"></i>
                            <span class="alert-badge"></span>
                        </a>
                        <div class="py-0 dropdown-menu stop dropdown-menu-end dropdown-lg">

                            <h5 class="py-3 m-0 dropdown-item-text d-flex justify-content-between align-items-center">
                                Notifications <a href="#" class="badge text-body-tertiary badge-pill">
                                    <i class="iconoir-plus-circle fs-4"></i>
                                </a>
                            </h5>
                            <ul class="mb-1 nav nav-tabs nav-tabs-custom nav-success nav-justified" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="mx-0 nav-link active" data-bs-toggle="tab" href="#All"
                                        role="tab" aria-selected="true">
                                        All <span
                                            class="badge bg-primary-subtle text-primary badge-pill ms-1">24</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="mx-0 nav-link" data-bs-toggle="tab" href="#Projects" role="tab"
                                        aria-selected="false" tabindex="-1">
                                        Projects
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="mx-0 nav-link" data-bs-toggle="tab" href="#Teams" role="tab"
                                        aria-selected="false" tabindex="-1">
                                        Team
                                    </a>
                                </li>
                            </ul>
                            <div class="ms-0" style="max-height:230px;" data-simplebar>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="All" role="tabpanel"
                                        aria-labelledby="all-tab" tabindex="0">
                                        <!-- item-->
                                        <a href="#" class="py-3 dropdown-item">
                                            <small class="float-end text-muted ps-2">2 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-wolf fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed
                                                    </h6>
                                                    <small class="mb-0 text-muted">Dummy text of the printing and
                                                        industry.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="py-3 dropdown-item">
                                            <small class="float-end text-muted ps-2">10 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-apple-swift fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Meeting with designers
                                                    </h6>
                                                    <small class="mb-0 text-muted">It is a long established fact that a
                                                        reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="py-3 dropdown-item">
                                            <small class="float-end text-muted ps-2">40 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-birthday-cake fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">UX 3 Task complete.</h6>
                                                    <small class="mb-0 text-muted">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="py-3 dropdown-item">
                                            <small class="float-end text-muted ps-2">1 hr ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-drone fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed
                                                    </h6>
                                                    <small class="mb-0 text-muted">It is a long established fact that a
                                                        reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="py-3 dropdown-item">
                                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-user fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                    <small class="mb-0 text-muted">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                    </div>
                                    <div class="tab-pane fade" id="Projects" role="tabpanel"
                                        aria-labelledby="projects-tab" tabindex="0">
                                        <!-- item-->
                                        <a href="#" class="py-3 dropdown-item">
                                            <small class="float-end text-muted ps-2">40 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-birthday-cake fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">UX 3 Task complete.</h6>
                                                    <small class="mb-0 text-muted">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="py-3 dropdown-item">
                                            <small class="float-end text-muted ps-2">1 hr ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-drone fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed
                                                    </h6>
                                                    <small class="mb-0 text-muted">It is a long established fact that a
                                                        reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="py-3 dropdown-item">
                                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-user fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                    <small class="mb-0 text-muted">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                    </div>
                                    <div class="tab-pane fade" id="Teams" role="tabpanel"
                                        aria-labelledby="teams-tab" tabindex="0">
                                        <!-- item-->
                                        <a href="#" class="py-3 dropdown-item">
                                            <small class="float-end text-muted ps-2">1 hr ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-drone fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed
                                                    </h6>
                                                    <small class="mb-0 text-muted">It is a long established fact that a
                                                        reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="py-3 dropdown-item">
                                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-user fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                    <small class="mb-0 text-muted">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                    </div>
                                </div>

                            </div>
                            <!-- All-->
                            <a href="pages-notifications.html" class="py-2 text-center dropdown-item text-dark fs-13">
                                View All <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown topbar-item">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false"
                            data-bs-offset="0,19">
                            <img src="assets/images/users/avatar-1.jpg" alt=""
                                class="thumb-md rounded-circle">
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
                            <div class="mt-0 dropdown-divider"></div>
                            <small class="px-2 pb-1 text-muted d-block">Account</small>
                            <a class="dropdown-item" href="pages-profile.html"><i
                                    class="align-text-bottom las la-user fs-18 me-1"></i> Profile</a>
                            <a class="dropdown-item" href="pages-faq.html"><i
                                    class="align-text-bottom las la-wallet fs-18 me-1"></i> Earning</a>
                            <small class="px-2 py-1 text-muted d-block">Settings</small>
                            <a class="dropdown-item" href="pages-profile.html"><i
                                    class="align-text-bottom las la-cog fs-18 me-1"></i>Account Settings</a>
                            <a class="dropdown-item" href="pages-profile.html"><i
                                    class="align-text-bottom las la-lock fs-18 me-1"></i> Security</a>
                            <a class="dropdown-item" href="pages-faq.html"><i
                                    class="align-text-bottom las la-question-circle fs-18 me-1"></i> Help Center</a>
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
                                        <a class="nav-link" href="transactions.html">Data Siswa</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="new-transaction.html">Data Siswa</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="new-transaction.html">Kelola Soal Ujian</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="new-transaction.html">Kelola Peserta Ujian</a>
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
                            <h4 class="page-title">Data Siswa</h4>
                            <div class="">
                                <ol class="mb-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Approx</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item"><a href="#">Tables</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Datatable</li>
                                </ol>
                            </div>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div><!--end row-->
                <div class="card">
                    <video id="localVideo" autoplay muted playsinline></video>
                    <div id="videos"></div>
                    <div class="card-body">
                        <div class="text-center alert alert-info">
                            Waktu Tersisa: <span id="timer">00:00</span>
                        </div>
                        <form id="formUjian" method="POST" action="{{ route('ujian.submit', $ujian->id) }}">
                            <input type="hidden" id="durasiUjian" value="{{ $ujian->durasi_menit }}">
                            <input type="hidden" id="sisaDetik" value="{{ $sisa_detik }}">
                            @csrf
                            @foreach ($soal as $index => $item)
                                <div class="p-3 mb-4 border rounded">
                                    <p> {{ $item->pertanyaan }}</p>
                                    @foreach (['a', 'b', 'c', 'd', 'e'] as $opt)
                                        <div>
                                            <input type="radio" name="jawaban[{{ $item->id }}]"
                                                value="{{ $opt }}" required>
                                            {{ strtoupper($opt) }}. {{ $item->{'opsi_' . $opt} }}
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach

                            <button type="button" id="btnSubmit" class="btn btn-success">Kumpulkan Jawaban</button>
                        </form>
                    </div>
                </div>


            </div><!-- container -->
            <!--Start Rightbar-->
            <!--Start Rightbar/offcanvas-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                <div class="offcanvas-header border-bottom justify-content-between">
                    <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                    <button type="button" class="p-0 m-0 btn-close text-reset align-self-center"
                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <h6>Account Settings</h6>
                    <div class="p-2 mt-3 text-start">
                        <div class="mb-2 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch1">
                            <label class="form-check-label" for="settings-switch1">Auto updates</label>
                        </div><!--end form-switch-->
                        <div class="mb-2 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                            <label class="form-check-label" for="settings-switch2">Location Permission</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch3">
                            <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                        </div><!--end form-switch-->
                    </div><!--end /div-->
                    <h6>General Settings</h6>
                    <div class="p-2 mt-3 text-start">
                        <div class="mb-2 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch4">
                            <label class="form-check-label" for="settings-switch4">Show me Online</label>
                        </div><!--end form-switch-->
                        <div class="mb-2 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                            <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch6">
                            <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                        </div><!--end form-switch-->
                    </div><!--end /div-->
                </div><!--end offcanvas-body-->
            </div>
            <!--end Rightbar/offcanvas-->
            <!--end Rightbar-->
            <!--Start Footer-->

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
        document.getElementById('btnSubmit').addEventListener('click', function() {
            Swal.fire({
                title: 'Kumpulkan Ujian?',
                text: 'Jawaban tidak bisa diubah setelah dikumpulkan.',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, Kumpulkan!',
                cancelButtonText: 'Cek Dulu'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('formUjian').submit();
                }
            });
        });
    </script>

    <script>
        const durasiMenit = parseInt(document.getElementById('durasiUjian').value); // dari input hidden
        const totalDetik = durasiMenit * 60;
        const timerDisplay = document.getElementById('timer');
        const formUjian = document.getElementById('formUjian');

        // ⏳ Ambil waktu mulai dari localStorage, kalau belum ada set sekarang
        let waktuMulai = localStorage.getItem('waktuMulaiUjian');
        if (!waktuMulai) {
            waktuMulai = new Date().getTime(); // milidetik
            localStorage.setItem('waktuMulaiUjian', waktuMulai);
        } else {
            waktuMulai = parseInt(waktuMulai);
        }

        const waktuSelesai = waktuMulai + totalDetik * 1000;

        function updateTimer() {
            const sekarang = new Date().getTime();
            const sisaWaktu = Math.floor((waktuSelesai - sekarang) / 1000); // detik

            if (sisaWaktu <= 0) {
                clearInterval(timerInterval);
                timerDisplay.textContent = "00:00";

                Swal.fire({
                    icon: 'info',
                    title: 'Waktu Habis',
                    text: 'Jawabanmu sedang disubmit...',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                });

                localStorage.removeItem('waktuMulaiUjian'); // bersihkan localStorage
                formUjian.submit();
            } else {
                const menit = Math.floor(sisaWaktu / 60);
                const detik = sisaWaktu % 60;
                timerDisplay.textContent = `${String(menit).padStart(2, '0')}:${String(detik).padStart(2, '0')}`;
            }
        }

        updateTimer();
        const timerInterval = setInterval(updateTimer, 1000);

        // Reset localStorage jika ujian disubmit manual
        document.getElementById('btnSubmit').addEventListener('click', function() {
            localStorage.removeItem('waktuMulaiUjian');
        });
    </script>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

    <script src="{{ asset('assets/libs/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/js/pages/datatable.init.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script src="https://cdn.socket.io/4.7.2/socket.io.min.js"></script>
    <script>
        const socket = io("http://localhost:3000"); // signaling server
        const roomId = @json(Str::slug($ujian->nama_ujian));
        const userId = @json(Auth::user()->name); // nama siswa
        const peers = {};
        let localStream;

        // 1. Gabung ke room ujian
        socket.emit("join-room", roomId, userId);

        // 2. Akses kamera
        navigator.mediaDevices.getUserMedia({
                video: true,
                audio: true
            })
            .then(stream => {
                localStream = stream;
                document.getElementById('localVideo').srcObject = stream;
            })
            .catch(err => {
                console.error("❌ Gagal akses kamera:", err);
            });

        // 3. Saat ada pengawas yang join, buat koneksi WebRTC
        socket.on("user-connected", (otherUserId) => {
            console.log("📡 Pengawas masuk:", otherUserId);

            if (!peers[otherUserId]) {
                const peer = createPeerConnection(otherUserId);
                peers[otherUserId] = peer;

                peer.createOffer()
                    .then(offer => peer.setLocalDescription(offer))
                    .then(() => {
                        socket.emit("signal", {
                            from: userId,
                            to: otherUserId,
                            signal: peer.localDescription
                        });
                    });
            }
        });

        // 4. Terima signal (answer/candidate) dari pengawas
        socket.on("signal", ({
            from,
            signal
        }) => {
            if (!peers[from]) {
                const peer = createPeerConnection(from);
                peers[from] = peer;
            }

            const peer = peers[from];

            if (signal.type === "answer") {
                peer.setRemoteDescription(new RTCSessionDescription(signal));
            } else if (signal.candidate) {
                peer.addIceCandidate(new RTCIceCandidate(signal.candidate));
            }
        });

        function createPeerConnection(toUserId) {
            const peer = new RTCPeerConnection({
                iceServers: [{
                    urls: "stun:stun.l.google.com:19302"
                }]
            });

            // 💡 Tambahkan track hanya 1x di sini
            if (localStream) {
                localStream.getTracks().forEach(track => {
                    peer.addTrack(track, localStream);
                });
            }

            peer.onicecandidate = (event) => {
                if (event.candidate) {
                    socket.emit("signal", {
                        from: userId,
                        to: toUserId,
                        candidate: event.candidate
                    });
                }
            };

            return peer;
        }
    </script>

</body>
<!--end body-->

</html>
