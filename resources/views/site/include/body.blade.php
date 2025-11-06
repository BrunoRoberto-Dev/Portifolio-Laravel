<!DOCTYPE html>
<html lang="en">
<head>
    @include('site.include.head')
    @yield('header')
</head>
<body class="bg-dark bg-dark text-light">
    <!-- Navbar -->
    @include('site.include.nav')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('site.include.footer')
    
    <!-- Scripts -->
    @yield('scripts')
    @include('site.include.scripts')
</body>
</html>