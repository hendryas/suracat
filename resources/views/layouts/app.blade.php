<!DOCTYPE html>
<html lang="en" data-startbar="dark" data-bs-theme="light">

<head>
    @include('layouts.partials.head')
</head>

<body>
    @include('layouts.partials.topbar')
    @include('layouts.partials.sidebar')

    <div class="page-wrapper">
        <div class="page-content">
            @yield('content')
        </div>
        @include('layouts.partials.footer')
    </div>

    @include('layouts.partials.modals')
    @include('layouts.partials.scripts')
    @yield('scripts')
</body>

</html>
