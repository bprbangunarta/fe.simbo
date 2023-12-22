<!doctype html>
<html lang="en">

<head>
    @include('templates.header')
</head>

<body class="@yield('bg')">

    <!-- loader -->
    <div id="loader">
        {{-- <img src="{{ asset('assets/img/logo-icon.png') }}" alt="icon" class="loading-icon"> --}}
        <button class="btn btn-primary" type="button">
            <span class="spinner-border spinner-border-sm me-05" role="status" aria-hidden="true"></span>
            Loading...
        </button>
    </div>
    <!-- * loader -->

    @yield('header')

    @yield('content')

    <x-bottom-menu></x-bottom-menu>

    @include('templates.footer')

    @stack('myscript')

</body>

</html>