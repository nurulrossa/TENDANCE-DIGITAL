@include('public/template/head')


<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: white;">
    <!-- =========================================== HEADER ================================================ -->
    <div id="mobile-menu-overlay"></div>
    @include('public/template/navbar')
    @yield('content')
    @yield('custom-script')
</body>
@include('public/template/footer')
