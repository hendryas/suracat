<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">

<head>


    <meta charset="utf-8" />
    <title>Dashboard | Approx - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">



    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

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
                                        <a class="nav-link" href="transactions.html">Data Guru</a>
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
                            <h4 class="page-title">Dashboard</h4>
                            <div class="">
                                <ol class="mb-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Approx</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="overflow-hidden card bg-welcome-img">
                                    <div class="card-body">
                                        <div class="">
                                            <h3 class="text-white fw-semibold fs-20 lh-base">Upgrade you plan for
                                                <br>Great experience
                                            </h3>
                                            <a href="#" class="btn btn-sm btn-danger">Upgarde Now</a>
                                            <img src="assets/images/extra/fund.png" alt=""
                                                class=" mb-n4 float-end" height="107">
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-md-6">
                                <div class="card bg-globe-img">
                                    <div class="card-body">
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="fs-16 fw-semibold">Balance</span>
                                                <form class="">
                                                    <select id="dynamic-select" name="example-select"
                                                        data-placeholder="Select an option" data-dynamic-select>
                                                        <option value="1"
                                                            data-img="assets/images/logos/m-card.png">xx25</option>
                                                        <option value="2"
                                                            data-img="assets/images/logos/ame-bank.png">xx56</option>
                                                    </select>
                                                </form>
                                            </div>

                                            <h4 class="my-2 fs-24 fw-semibold">122.5692.00 <small
                                                    class="font-14">BTC</small></h4>
                                            <p class="mb-3 text-muted fw-semibold">
                                                <span class="text-success"><i
                                                        class="fas fa-arrow-up me-1"></i>11.1%</span> Outstanding
                                                balance boost
                                            </p>
                                            <button type="submit" class="btn btn-soft-primary">Transfer</button>
                                            <button type="button" class="btn btn-soft-danger">Request</button>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                    <div class="col-lg-5">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="card bg-corner-img">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-9">
                                                <p class="mb-0 text-muted text-uppercase fw-normal fs-13">Total Revenue
                                                </p>
                                                <h4 class="mt-1 mb-0 fw-medium">$8365.00</h4>
                                            </div>
                                            <!--end col-->
                                            <div class="col-3 align-self-center">
                                                <div
                                                    class="mx-auto border-dashed rounded d-flex justify-content-center align-items-center thumb-md border-primary">
                                                    <i
                                                        class="mb-0 iconoir-dollar-circle fs-22 align-self-center text-primary"></i>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col-md-6 col-lg-6">
                                <div class="card bg-corner-img">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-9">
                                                <p class="mb-0 text-muted text-uppercase fw-normal fs-13">New Order</p>
                                                <h4 class="mt-1 mb-0 fw-medium">722</h4>
                                            </div>
                                            <!--end col-->
                                            <div class="col-3 align-self-center">
                                                <div
                                                    class="mx-auto border-dashed rounded d-flex justify-content-center align-items-center thumb-md border-info">
                                                    <i class="mb-0 iconoir-cart fs-22 align-self-center text-info"></i>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col-md-6 col-lg-6">
                                <div class="card bg-corner-img">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-9">
                                                <p class="mb-0 text-muted text-uppercase fw-normal fs-13">Sessions</p>
                                                <h4 class="mt-1 mb-0 fw-medium">181</h4>
                                            </div>
                                            <!--end col-->
                                            <div class="col-3 align-self-center">
                                                <div
                                                    class="mx-auto border-dashed rounded d-flex justify-content-center align-items-center thumb-md border-warning">
                                                    <i
                                                        class="mb-0 iconoir-percentage-circle fs-22 align-self-center text-warning"></i>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->

                            <div class="col-md-6 col-lg-6">
                                <div class="card bg-corner-img">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-9">
                                                <p class="mb-0 text-muted text-uppercase fw-normal fs-13">Avg. Order
                                                    value</p>
                                                <h4 class="mt-1 mb-0 fw-medium">$1025.50</h4>
                                            </div>
                                            <!--end col-->
                                            <div class="col-3 align-self-center">
                                                <div
                                                    class="mx-auto border-dashed rounded d-flex justify-content-center align-items-center thumb-md border-danger">
                                                    <i
                                                        class="mb-0 iconoir-hexagon-dice fs-22 align-self-center text-danger"></i>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div><!--end col-->
                        </div>
                        <!--end row-->
                    </div><!--end col-->

                </div><!--end row-->

                <div class="row justify-content-center">

                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Report</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn bt btn-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icofont-calendar fs-5 me-1"></i> This Month<i
                                                    class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Last Week</a>
                                                <a class="dropdown-item" href="#">Last Month</a>
                                                <a class="dropdown-item" href="#">This Year</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="pt-0 card-body">
                                <div id="reports" class="apex-charts pill-bar"></div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Cash Flow</h4>
                                    </div>
                                    <!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn bt btn-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icofont-calendar fs-5 me-1"></i>
                                                Weekly<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Yearly</a>
                                            </div>
                                        </div>
                                    </div> <!--end col-->
                                </div><!--end row-->
                            </div><!--end card-header-->
                            <div class="pt-0 card-body">
                                <div id="cashflow" class="apex-charts"></div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <p class="mb-0 text-muted text-uppercase fw-medium fs-13">Income</p>
                                            <h5 class="mt-1 mb-0 fw-medium">76%</h5>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-4">
                                        <div class="text-center">
                                            <p class="mb-0 text-muted text-uppercase fw-medium fs-13">Expense</p>
                                            <h5 class="mt-1 mb-0 fw-medium">23%</h5>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-4">
                                        <div class="text-center">
                                            <p class="mb-0 text-muted text-uppercase fw-medium fs-13">Other</p>
                                            <h5 class="mt-1 mb-0 fw-medium">1%</h5>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <div class="mx-auto text-center ">
                                    <img src="assets/images/extra/rabit.png" alt="" class="d-inline-block"
                                        height="105">
                                </div>
                                <div class="z-0 card-bg position-relative">
                                    <div class="p-3 rounded bg-primary-subtle position-relative">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="flex-shrink-0 bg-primary-subtle text-primary thumb-lg rounded-circle">
                                                <i class="iconoir-bright-star fs-3"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="my-0 mb-0 fw-normal text-dark fs-13">You have $1.53
                                                    remaining found over ...<a href="#"
                                                        class="mb-0 text-primary fw-medium text-decoration-underline">View
                                                        Details</a></h6>

                                            </div><!--end media-body-->
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Exchange Rate</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="pt-0 card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr class="">
                                                <td class="px-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/flags/us_flag.jpg"
                                                            class="me-2 align-self-center thumb-sm rounded-circle"
                                                            alt="...">
                                                        <h6 class="m-0 text-truncate">USA</h6>
                                                    </div><!--end media-->
                                                </td>
                                                <td class="px-0 text-end"><span
                                                        class="text-body ps-2 align-self-center text-end fw-medium">0.835230
                                                        <span
                                                            class="rounded badge text-success bg-success-subtle">1.10%</span></span>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr class="">
                                                <td class="px-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/flags/spain_flag.jpg"
                                                            class="me-2 align-self-center thumb-sm rounded-circle"
                                                            alt="...">
                                                        <h6 class="m-0 text-truncate">Spain</h6>
                                                    </div><!--end media-->
                                                </td>
                                                <td class="px-0 text-end"><span
                                                        class="text-body ps-2 align-self-center text-end fw-medium">0.896532
                                                        <span
                                                            class="rounded badge text-success bg-success-subtle">0.91%</span></span>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr class="">
                                                <td class="px-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/flags/french_flag.jpg"
                                                            class="me-2 align-self-center thumb-sm rounded-circle"
                                                            alt="...">
                                                        <h6 class="m-0 text-truncate">French</h6>
                                                    </div><!--end media-->
                                                </td>
                                                <td class="px-0 text-end"><span
                                                        class="text-body ps-2 align-self-center text-end fw-medium">0.875433
                                                        <span
                                                            class="rounded badge text-danger bg-danger-subtle">0.11%</span></span>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr class="">
                                                <td class="px-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/flags/germany_flag.jpg"
                                                            class="me-2 align-self-center thumb-sm rounded-circle"
                                                            alt="...">
                                                        <h6 class="m-0 text-truncate">Germany</h6>
                                                    </div><!--end media-->
                                                </td>
                                                <td class="px-0 text-end"><span
                                                        class="text-body ps-2 align-self-center text-end fw-medium">0.795621
                                                        <span
                                                            class="rounded badge text-success bg-success-subtle">0.85%</span></span>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr class="">
                                                <td class="px-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/flags/french_flag.jpg"
                                                            class="me-2 align-self-center thumb-sm rounded-circle"
                                                            alt="...">
                                                        <h6 class="m-0 text-truncate">French</h6>
                                                    </div><!--end media-->
                                                </td>
                                                <td class="px-0 text-end"><span
                                                        class="text-body ps-2 align-self-center text-end fw-medium">0.875433
                                                        <span
                                                            class="rounded badge text-danger bg-danger-subtle">0.11%</span></span>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr class="">
                                                <td class="px-0 pb-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/flags/baha_flag.jpg"
                                                            class="me-2 align-self-center thumb-sm rounded-circle"
                                                            alt="...">
                                                        <h6 class="m-0 text-truncate">Bahamas</h6>
                                                    </div><!--end media-->
                                                </td>
                                                <td class="px-0 pb-0 text-end"><span
                                                        class="text-body ps-2 align-self-center text-end fw-medium">0.845236
                                                        <span
                                                            class="rounded badge text-danger bg-danger-subtle">0.22%</span></span>
                                                </td>
                                            </tr><!--end tr-->
                                        </tbody>
                                    </table> <!--end table-->
                                </div><!--end /div-->
                                <hr class="hr-dashed">
                                <div class="row">
                                    <div class="text-center col-lg-6">
                                        <div class="p-2 border-dashed rounded border-theme-color">
                                            <p class="mb-0 text-muted text-uppercase fw-normal fs-13">Higher Rate</p>
                                            <h5 class="mt-1 mb-0 fw-medium text-success">0.833658</h5>
                                            <small>05 Sep 2024</small>
                                        </div>
                                    </div><!--end col-->
                                    <div class="text-center col-lg-6">
                                        <div class="p-2 border-dashed rounded border-theme-color">
                                            <p class="mb-0 text-muted text-uppercase fw-normal fs-13">Lower Rate</p>
                                            <h5 class="mt-1 mb-0 fw-medium text-danger">0.812547</h5>
                                            <small>05 Sep 2024</small>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="order-2 col-md-6 col-lg-3 order-lg-1">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Balance Details</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="p-2 border-dashed rounded border-theme-color">
                                            <h5 class="mt-1 mb-0 fw-medium">$82365.00</h5>
                                            <small class="text-muted">Available</small>
                                        </div>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div>
                            <div class="pt-0 card-body">
                                <div id="balance" class="apex-charts"></div>
                                <div class="px-2 py-3 mt-3 mb-0 text-center rounded bg-light">
                                    <h6 class="mb-0"><i class="icofont-calendar fs-5 me-1"></i> 01 January 2024 to
                                        31 December 2024</h6>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="order-1 col-md-12 col-lg-6 order-lg-2">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Transaction History</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn bt btn-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icofont-calendar fs-5 me-1"></i> This Month<i
                                                    class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Last Week</a>
                                                <a class="dropdown-item" href="#">Last Month</a>
                                                <a class="dropdown-item" href="#">This Year</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="pt-0 card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="border-top-0">Transaction</th>
                                                <th class="border-top-0">Date</th>
                                                <th class="border-top-0">AApprox</th>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Action</th>
                                            </tr><!--end tr-->
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/logos/lang-logo/chatgpt.png"
                                                            height="40" class="rounded me-3 align-self-center"
                                                            alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Chat Gpt</h6>
                                                            <a href="#" class="fs-12 text-primary">ID:
                                                                A3652</a>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td>20 july 2024</td>
                                                <td>$560</td>
                                                <td><span
                                                        class="px-2 badge bg-success-subtle text-success fs-11 fw-medium">Successful</span>
                                                </td>
                                                <td>
                                                    <a href="#"><i
                                                            class="las la-print text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/logos/lang-logo/gitlab.png"
                                                            height="40" class="rounded me-3 align-self-center"
                                                            alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Gitlab</h6>
                                                            <a href="#" class="fs-12 text-primary">ID:
                                                                B5784</a>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td>09 July 2024</td>
                                                <td>$2350</td>
                                                <td><span
                                                        class="px-2 badge bg-warning-subtle text-warning fs-11 fw-medium">Pending</span>
                                                </td>
                                                <td>
                                                    <a href="#"><i
                                                            class="las la-print text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/logos/lang-logo/nextjs.png"
                                                            height="40" class="rounded me-3 align-self-center"
                                                            alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Nextjs</h6>
                                                            <a href="#" class="fs-12 text-primary">ID:
                                                                C9632</a>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td>02 June 2024</td>
                                                <td>$2200</td>
                                                <td><span
                                                        class="px-2 badge bg-success-subtle text-success fs-11 fw-medium">Successful</span>
                                                </td>
                                                <td>
                                                    <a href="#"><i
                                                            class="las la-print text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/logos/lang-logo/vue.png"
                                                            height="40" class="rounded me-3 align-self-center"
                                                            alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Vue</h6>
                                                            <a href="#" class="fs-12 text-primary">ID:
                                                                D8596</a>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td>28 MAY 2024</td>
                                                <td>$1320</td>
                                                <td><span
                                                        class="px-2 badge bg-danger-subtle text-danger fs-11 fw-medium">Cancle</span>
                                                </td>
                                                <td>
                                                    <a href="#"><i
                                                            class="las la-print text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/logos/lang-logo/symfony.png"
                                                            height="40" class="rounded me-3 align-self-center"
                                                            alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0">Symfony</h6>
                                                            <a href="#" class="fs-12 text-primary">ID:
                                                                E7778</a>
                                                        </div><!--end media body-->
                                                    </div>
                                                </td>
                                                <td>15 May 2024</td>
                                                <td>$3650</td>
                                                <td><span
                                                        class="px-2 badge bg-success-subtle text-success fs-11 fw-medium">Successful</span>
                                                </td>
                                                <td>
                                                    <a href="#"><i
                                                            class="las la-print text-secondary fs-18"></i></a>
                                                    <a href="#"><i
                                                            class="las la-trash-alt text-secondary fs-18"></i></a>
                                                </td>
                                            </tr><!--end tr-->
                                        </tbody>
                                    </table> <!--end table-->
                                </div><!--end /div-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="order-3 col-md-6 col-lg-3 order-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Send Money</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn bt btn-light">
                                                <i class="icofont-contact-add fs-5 me-1"></i> Add Member
                                            </a>
                                        </div>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="pt-0 card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr class="">
                                                <td class="px-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-1.jpg" height="36"
                                                            class="rounded me-2 align-self-center" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0 text-truncate">Scott Holland</h6>
                                                            <a href="#"
                                                                class="font-12 text-muted text-decoration-underline">#3652</a>
                                                        </div><!--end media body-->
                                                    </div><!--end media-->
                                                </td>
                                                <td class="px-0 text-end"><span
                                                        class="text-primary ps-2 align-self-center text-end fw-medium">$3325.00</span>
                                                </td>
                                                <td class="px-0 text-end"><a href="#" class="text-body"><i
                                                            class="las la-sync-alt"></i></a></td>
                                            </tr><!--end tr-->
                                            <tr class="">
                                                <td class="px-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-2.jpg" height="36"
                                                            class="rounded me-2 align-self-center" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0 text-truncate">Karen Savage</h6>
                                                            <a href="#"
                                                                class="font-12 text-muted text-decoration-underline">#4789</a>
                                                        </div><!--end media body-->
                                                    </div><!--end media-->
                                                </td>
                                                <td class="px-0 text-end"><span
                                                        class="text-primary ps-2 align-self-center text-end fw-medium">$2548.00</span>
                                                </td>
                                                <td class="px-0 text-end"><a href="#" class="text-body"><i
                                                            class="las la-sync-alt"></i></a></td>
                                            </tr><!--end tr-->
                                            <tr class="">
                                                <td class="px-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-3.jpg" height="36"
                                                            class="rounded me-2 align-self-center" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0 text-truncate">Steven Sharp </h6>
                                                            <a href="#"
                                                                class="font-12 text-muted text-decoration-underline">#4521</a>
                                                        </div><!--end media body-->
                                                    </div><!--end media-->
                                                </td>
                                                <td class="px-0 text-end"><span
                                                        class="text-primary ps-2 align-self-center text-end fw-medium">$2985.00</span>
                                                </td>
                                                <td class="px-0 text-end"><a href="#" class="text-body"><i
                                                            class="las la-sync-alt"></i></a></td>
                                            </tr><!--end tr-->
                                            <tr class="">
                                                <td class="px-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-4.jpg" height="36"
                                                            class="rounded me-2 align-self-center" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0 text-truncate">Teresa Himes </h6>
                                                            <a href="#"
                                                                class="font-12 text-muted text-decoration-underline">#3269</a>
                                                        </div><!--end media body-->
                                                    </div><!--end media-->
                                                </td>
                                                <td class="px-0 text-end"><span
                                                        class="text-primary ps-2 align-self-center text-end fw-medium">$1845.00</span>
                                                </td>
                                                <td class="px-0 text-end"><a href="#" class="text-body"><i
                                                            class="las la-sync-alt"></i></a></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td class="px-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-5.jpg" height="36"
                                                            class="rounded me-2 align-self-center" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0 text-truncate">Ralph Denton</h6>
                                                            <a href="#"
                                                                class="font-12 text-muted text-decoration-underline">#4521</a>
                                                        </div><!--end media body-->
                                                    </div><!--end media-->
                                                </td>
                                                <td class="px-0 text-end"><span
                                                        class="text-primary ps-2 align-self-center text-end fw-medium">$1422.00</span>
                                                </td>
                                                <td class="px-0 text-end"><a href="#" class="text-body"><i
                                                            class="las la-sync-alt"></i></a></td>
                                            </tr><!--end tr-->
                                            <tr class="">
                                                <td class="px-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/users/avatar-9.jpg" height="36"
                                                            class="rounded me-2 align-self-center" alt="...">
                                                        <div class="flex-grow-1 text-truncate">
                                                            <h6 class="m-0 text-truncate">Steven Sharp </h6>
                                                            <a href="#"
                                                                class="font-12 text-muted text-decoration-underline">#4521</a>
                                                        </div><!--end media body-->
                                                    </div><!--end media-->
                                                </td>
                                                <td class="px-0 text-end"><span
                                                        class="text-primary ps-2 align-self-center text-end fw-medium">$2985.00</span>
                                                </td>
                                                <td class="px-0 text-end"><a href="#" class="text-body"><i
                                                            class="las la-sync-alt"></i></a></td>
                                            </tr><!--end tr-->
                                        </tbody>
                                    </table> <!--end table-->
                                </div><!--end /div-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div><!--end row-->
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
                                        Approx
                                        <span class="text-muted d-none d-sm-inline-block float-end">
                                            Design with
                                            <i class="align-middle iconoir-heart-solid text-danger"></i>
                                            by Mannatthemes</span>
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

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="{{ asset('assets/js/pages/index.init.js') }}"></script>
    <script src="{{ asset('assets/js/DynamicSelect.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
<!--end body-->

</html>
