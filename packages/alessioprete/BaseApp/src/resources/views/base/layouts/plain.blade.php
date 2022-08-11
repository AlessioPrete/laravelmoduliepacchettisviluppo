<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include(alessioprete_view('inc.head'))
</head>
<body>
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    @yield('content')
</div>

<footer class="footer mt-auto py-3 bg-light" style="">
    @include('alessioprete::inc.footer')
</footer>
@yield('before_scripts')
@stack('before_scripts')

@include(alessioprete_view('inc.scripts'))

@yield('after_scripts')
@stack('after_scripts')

</body>
</html>
