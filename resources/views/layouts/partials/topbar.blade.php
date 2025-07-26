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
                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }} " alt=""
                            class="thumb-md rounded-circle">
                    </a>
                    <div class="py-0 dropdown-menu dropdown-menu-end">
                        <div class="py-2 d-flex align-items-center dropdown-item bg-secondary-subtle">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt=""
                                    class="thumb-md rounded-circle">
                            </div>
                            <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                <h6 class="my-0 fw-medium text-dark fs-13">{{ Auth::user()->name }}</h6>
                            </div><!--end media-body-->
                        </div>
                        <div class="mb-0 dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}" id="logout-form">
                            @csrf
                            <a href="{{ route('logout') }}" class="dropdown-item text-danger"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="align-text-bottom las la-power-off fs-18 me-1"></i> Logout
                            </a>
                        </form>

                    </div>
                </li>
            </ul><!--end topbar-nav-->
        </nav>
        <!-- end navbar-->
    </div>
</div>
