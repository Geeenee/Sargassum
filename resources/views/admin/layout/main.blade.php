@extends('../layout/base')

@section('body')
    <body class="py-5 md:py-0">
        <!-- BEGIN: Mobile Menu -->
            @include('../layout/components/mobile-menu.blade.php')
        <!-- END: Mobile Menu -->

        <!-- BEGIN: Top Bar -->
            @include('../layout/components/top-bar.blade.php')
        <!-- END: Top Bar -->

        <div class="flex overflow-hidden">
            <!-- BEGIN: Side Menu -->
            @include('../layout/components/side-menu.blade.php')
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            @yield('content')
            <!-- END: Content -->
        </div>

        <!-- BEGIN: JS Assets-->
        @vite('resources/js/app.js')
        <!-- END: JS Assets-->

        @yield('script')
    </body>
@endsection
