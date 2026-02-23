<!DOCTYPE html>
<html lang="en">
<head>
    @include('system.include.head')
    @yield('header')
</head>
<body class="bg-dark bg-dark text-light">

    <!-- Left menu -->
<div class="position-fixed top-0 start-0 h-100 sidebar" style="width: 250px; background-color: #1B1E21;">
    @include('system.include.sidemenu')
</div>

<!-- Content -->
<div class="content px-5" style="margin-left: 250px;">
    <!-- Navbar -->
    <div class="d-flex justify-content-between align-items-center py-3 w-100">
        <div class="">
            @yield('nav')
        </div>
        <div class="">
            @include('system.include.nav')
        </div>
    </div>

    {{-- Content Section --}}
    @yield('content')
</div>


    
    <!-- Scripts -->
    @yield('scripts')
    @include('system.include.scripts')
</body>
</html>