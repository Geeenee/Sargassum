<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $dark_mode ? 'dark' : '' }}{{ $color_scheme != 'default' ? ' ' . $color_scheme : '' }}">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('build/assets/images/logo.svg') }}" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Enigma admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Enigma Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">

    <title>@yield('title')</title>

    <!-- BEGIN: CSS Assets-->
    @vite('resources/css/app.css')
    <!-- END: CSS Assets-->
    @livewireStyles

</head>
<!-- END: Head -->
<body class="py-5 md:py-0">

    <!-- BEGIN: Mobile Menu -->
        @include('admin.layout.components.mobile-menu')
    <!-- END: Mobile Menu -->

    <!-- BEGIN: Top Bar -->
        @include('admin.layout.components.top-bar')
    <!-- END: Top Bar -->

    <div class="flex overflow-hidden">

        <!-- BEGIN: Side Menu -->
        @include('admin.layout.components.side-menu')
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        @yield('content')
        <!-- END: Content -->
    </div>

    <!-- BEGIN: JS Assets-->
    @vite('resources/js/app.js')
    <!-- END: JS Assets-->

    @yield('script')

    @livewireScripts
</body>

</html>
