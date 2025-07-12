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
                                    <a class="nav-link" href="{{ route('peserta.index') }}">Kelola Peserta Ujian</a>
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
