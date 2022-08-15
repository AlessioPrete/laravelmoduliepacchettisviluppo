<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.0
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<!-- Breadcrumb-->
<html lang="en" dir="ltr">
<head>
    @include(alessioprete_view('inc.coreui.head'))
</head>
<body>
    @include(alessioprete_view('inc.coreui.sidebar'))
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @include(alessioprete_view('inc.coreui.header'))
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                @yield('content')
            </div>
        </div>
    @include(alessioprete_view('inc.coreui.footer'))
    </div>
<!-- CoreUI and necessary plugins-->
<script src="{{asset('packages/alessioprete/base/js/bundle.js')}}"></script>
<script src="{{asset('packages/alessioprete/base/js/liga.js')}}">
</script>
@yield('script')
@stack('scripts')
</body>
</html>
