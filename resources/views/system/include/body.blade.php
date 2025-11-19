<!DOCTYPE html>
<html lang="en">
<head>
    @include('system.include.head')
    @yield('header')
</head>
<body class="bg-dark bg-dark text-light d-flex">

    <!-- Left menu -->
    <div class="col-2" style="background-color: #1B1E21;">
        @include('system.include.sidemenu')
    </div>

    <!-- Content -->
    <div class="col-10 px-5">
        <!-- Navbar -->
        <div class="d-flex py-3">
            <div class="col-10">
                @yield('nav')
            </div>
            <div class="col-2">
                @include('system.include.nav')
            </div>
        </div>

        {{-- content section --}}
        @yield('content')
    </div>

    
    <!-- Scripts -->
    @yield('scripts')
    @include('system.include.scripts')
</body>
</html>