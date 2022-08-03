<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
  @include(alessioprete_view('inc.head'))

</head>

<body>

  @include(alessioprete_view('inc.main_header'))

  <div class="app-body">

    @include(alessioprete_view('inc.sidebar'))

    <main class="main pt-2">

       @yield('before_breadcrumbs_widgets')

{{--       @includeWhen(isset($breadcrumbs), backpack_view('inc.breadcrumbs'))--}}

       @yield('after_breadcrumbs_widgets')

       @yield('header')

        <div class="container-fluid animated fadeIn">

          @yield('before_content_widgets')

          @yield('content')

          @yield('after_content_widgets')

        </div>

    </main>

  </div><!-- ./app-body -->

  <footer class="{{ config('alessioprete.base.footer_class') }}">
    @include(alessioprete_view('inc.footer'))
  </footer>





</body>
</html>
