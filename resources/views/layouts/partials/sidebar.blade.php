<div class="startbar d-print-none">
    <!--start brand-->
    <div class="brand">
        <a href="index.html" class="logo">
            <span>
                <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
            </span>
            <span class="">
                <img src="{{ asset('assets/images/logos/suracat.png') }}" alt="logo-large" class="logo-lg logo-light"
                    style="width:120px; height:120px;">
                <img src="{{ asset('assets/images/logos/suracat.png') }}" alt="logo-large" class="logo-lg logo-dark"
                    style="width:120px; height:120px;">
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
                            <span>Dashboards</span>
                            <span class="badge text-bg-info ms-auto">New</span>
                        </a>
                    </li><!--end nav-item-->
                    @if (session('user_role') == 'admin' || session('user_role') == 'guru')
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarTransactions" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarTransactions">
                                <i class="iconoir-task-list menu-icon"></i>
                                <span>Management</span>
                            </a>
                            <div class="collapse " id="sidebarTransactions">
                                @if (session('user_role') == 'admin')
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
                                            <a class="nav-link" href="{{ route('admin.hasil-ujian') }}">Hasil Ujian</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                @elseif (session('user_role') == 'guru')
                                    <ul class="nav flex-column">
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
                                            <a class="nav-link" href="{{ route('admin.hasil-ujian') }}">Hasil Ujian</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                @endif
                            </div><!--end startbarTables-->
                        </li><!--end nav-item-->
                    @endif

                    @if (session('user_role') == 'siswa')
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarUjian" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarUjian">
                                <i class="iconoir-task-list menu-icon"></i>
                                <span>Ujian</span>
                            </a>
                            <div class="collapse " id="sidebarUjian">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('ujian.daftar') }}">Ujian Saya</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('ujian.hasil') }}">Hasil Ujian</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarTables-->
                        </li><!--end nav-item-->
                    @endif

                    @if (session('user_role') == 'pengawas')
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarMonitoringUjian" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarMonitoringUjian">
                                <i class="iconoir-task-list menu-icon"></i>
                                <span>Monitoring Ujian</span>
                            </a>
                            <div class="collapse " id="sidebarMonitoringUjian">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('monitoring.ujian') }}">Monitoring Ujian</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end startbarTables-->
                        </li><!--end nav-item-->
                    @endif

                </ul><!--end navbar-nav--->
            </div>
        </div><!--end startbar-collapse-->
    </div><!--end startbar-menu-->
</div><!--end startbar-->
<div class="startbar-overlay d-print-none"></div>
