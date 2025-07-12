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
                        <li class="hide-phone app-search">
                            <form role="search" action="#" method="get">
                                <input type="search" name="search" class="mb-0 form-control top-search" placeholder="Search here...">
                                <button type="submit"><i class="iconoir-search"></i></button>
                            </form>
                        </li>                    
                    </ul>
                    <ul class="mb-0 topbar-item list-unstyled d-inline-flex align-items-center">
                   
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                            <img src="assets/images/flags/us_flag.jpg" alt="" class="thumb-sm rounded-circle">
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/us_flag.jpg" alt="" height="15" class="me-2">English</a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="15" class="me-2">Spanish</a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="15" class="me-2">German</a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="15" class="me-2">French</a>
                            </div>
                        </li><!--end topbar-language-->
        
                        <li class="topbar-item">
                            <a class="nav-link nav-icon" href="javascript:void(0);" id="light-dark-mode">
                                <i class="iconoir-half-moon dark-mode"></i>
                                <i class="iconoir-sun-light light-mode"></i>
                            </a>                    
                        </li>
    
                        <li class="dropdown topbar-item">
                            <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
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
                                        <a class="mx-0 nav-link active" data-bs-toggle="tab" href="#All" role="tab" aria-selected="true">
                                            All <span class="badge bg-primary-subtle text-primary badge-pill ms-1">24</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="mx-0 nav-link" data-bs-toggle="tab" href="#Projects" role="tab" aria-selected="false" tabindex="-1">
                                            Projects
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="mx-0 nav-link" data-bs-toggle="tab" href="#Teams" role="tab" aria-selected="false" tabindex="-1">
                                            Team
                                        </a>
                                    </li>
                                </ul>
                                <div class="ms-0" style="max-height:230px;" data-simplebar>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="All" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                                            <!-- item-->
                                            <a href="#" class="py-3 dropdown-item">
                                                <small class="float-end text-muted ps-2">2 min ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-wolf fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                        <small class="mb-0 text-muted">Dummy text of the printing and industry.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                            <!-- item-->
                                            <a href="#" class="py-3 dropdown-item">
                                                <small class="float-end text-muted ps-2">10 min ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-apple-swift fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Meeting with designers</h6>
                                                        <small class="mb-0 text-muted">It is a long established fact that a reader.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                            <!-- item-->
                                            <a href="#" class="py-3 dropdown-item">
                                                <small class="float-end text-muted ps-2">40 min ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">                                                    
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
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-drone fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                        <small class="mb-0 text-muted">It is a long established fact that a reader.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                            <!-- item-->
                                            <a href="#" class="py-3 dropdown-item">
                                                <small class="float-end text-muted ps-2">2 hrs ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-user fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                        <small class="mb-0 text-muted">Dummy text of the printing.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                        </div>
                                        <div class="tab-pane fade" id="Projects" role="tabpanel" aria-labelledby="projects-tab" tabindex="0">
                                            <!-- item-->
                                            <a href="#" class="py-3 dropdown-item">
                                                <small class="float-end text-muted ps-2">40 min ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">                                                    
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
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-drone fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                        <small class="mb-0 text-muted">It is a long established fact that a reader.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                            <!-- item-->
                                            <a href="#" class="py-3 dropdown-item">
                                                <small class="float-end text-muted ps-2">2 hrs ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-user fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                        <small class="mb-0 text-muted">Dummy text of the printing.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                        </div>
                                        <div class="tab-pane fade" id="Teams" role="tabpanel" aria-labelledby="teams-tab" tabindex="0">
                                            <!-- item-->
                                            <a href="#" class="py-3 dropdown-item">
                                                <small class="float-end text-muted ps-2">1 hr ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-drone fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                        <small class="mb-0 text-muted">It is a long established fact that a reader.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                            <!-- item-->
                                            <a href="#" class="py-3 dropdown-item">
                                                <small class="float-end text-muted ps-2">2 hrs ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
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
                            <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                                <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle">
                            </a>
                            <div class="py-0 dropdown-menu dropdown-menu-end">
                                <div class="py-2 d-flex align-items-center dropdown-item bg-secondary-subtle">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                        <h6 class="my-0 fw-medium text-dark fs-13">William Martin</h6>
                                        <small class="mb-0 text-muted">Front End Developer</small>
                                    </div><!--end media-body-->
                                </div>
                                <div class="mt-0 dropdown-divider"></div>
                                <small class="px-2 pb-1 text-muted d-block">Account</small>
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-text-bottom las la-user fs-18 me-1"></i> Profile</a>
                                <a class="dropdown-item" href="pages-faq.html"><i class="align-text-bottom las la-wallet fs-18 me-1"></i> Earning</a>
                                <small class="px-2 py-1 text-muted d-block">Settings</small>                        
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-text-bottom las la-cog fs-18 me-1"></i>Account Settings</a>
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-text-bottom las la-lock fs-18 me-1"></i> Security</a>
                                <a class="dropdown-item" href="pages-faq.html"><i class="align-text-bottom las la-question-circle fs-18 me-1"></i> Help Center</a>                       
                                <div class="mb-0 dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="auth-login.html"><i class="align-text-bottom las la-power-off fs-18 me-1"></i> Logout</a>
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
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Data Siswa</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto">
                                            <button class="mb-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahUjian">+ Tambah Ujian</button>
                                        </div>
                                    </div>  <!--end row-->                                  
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
                                                              data-id="{{ $ujian->id }}"
                                                              data-nama="{{ $ujian->nama_ujian }}"
                                                              data-durasi="{{ $ujian->durasi_menit }}"
                                                              data-jadwal="{{ \Carbon\Carbon::parse($ujian->jadwal)->format('Y-m-d\TH:i') }}"
                                                          >Edit</button>

                                                          <button class="btn btn-sm btn-danger btnDeleteUjian"
                                                              data-id="{{ $ujian->id }}"
                                                              data-nama="{{ $ujian->nama_ujian }}">
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

                                                           
                </div><!-- container -->
                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom justify-content-between">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="p-0 m-0 btn-close text-reset align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                            <script> document.write(new Date().getFullYear()) </script>
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

        <!-- end page-wrapper -->

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
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal!',
                            text: 'Terjadi kesalahan. Silakan coba lagi.'
                        });
                    }
                });
            });
        </script>

        <script>
        $(document).on('click', '.btnEditUjian', function () {
            let id = $(this).data('id');
            $('#edit_id').val(id);
            $('#edit_nama_ujian').val($(this).data('nama'));
            $('#edit_durasi_menit').val($(this).data('durasi'));
            $('#edit_jadwal').val($(this).data('jadwal'));
            $('#modalEditUjian').modal('show');
        });

        $('#formEditUjian').submit(function (e) {
            e.preventDefault();
            let id = $('#edit_id').val();
            let formData = $(this).serialize();

            $.ajax({
                url: `/admin/ujian/${id}`, // pastikan route sesuai
                method: "POST",
                data: formData,
                success: function () {
                    $('#modalEditUjian').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Data ujian berhasil diperbarui.',
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => location.reload());
                },
                error: function () {
                    Swal.fire('Gagal!', 'Terjadi kesalahan saat update.', 'error');
                }
            });
        });
        </script>

        <!-- Javascript  -->  
        <!-- vendor js -->
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
        $(document).ready(function () {
            $('form').on('submit', function (e) {
                e.preventDefault();
                
                var form = $(this);
                var formData = form.serialize();
                var actionUrl = form.attr('action');

                $.ajax({
                    url: actionUrl,
                    method: 'POST',
                    data: formData,
                    success: function (response) {
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
                    },
                    error: function (xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Gagal menyimpan data. Silakan periksa input Anda.'
                        });
                    }
                });
            });
        });
        </>

        <script>
        $(document).ready(function () {
            // Saat tombol edit diklik
            $('.btn-edit').on('click', function () {
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
            $('#formEditSiswa').on('submit', function (e) {
                e.preventDefault();

                let form = $(this);
                let actionUrl = form.attr('action');
                let formData = form.serialize();

                $.ajax({
                    url: actionUrl,
                    type: 'POST',
                    data: formData,
                    success: function (res) {
                        if (res.status === 'success') {
                            $('#modalEditSiswa').modal('hide');
                            Swal.fire('Sukses', res.message, 'success').then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire('Gagal', res.message, 'error');
                        }
                    },
                    error: function () {
                        Swal.fire('Error', 'Terjadi kesalahan saat mengupdate data.', 'error');
                    }
                });
            });
        });
        </script>

        <script>
            $(document).on('click', '.btnDeleteUjian', function () {
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
                            success: function () {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: 'Ujian berhasil dihapus.',
                                    timer: 1500,
                                    showConfirmButton: false
                                }).then(() => location.reload());
                            },
                            error: function () {
                                Swal.fire('Gagal', 'Terjadi kesalahan saat menghapus.', 'error');
                            }
                        });
                    }
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