<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="#{author}">
    <meta name="keywords" content="#{keyword}">
    <meta name="description" content="#{description}">
    <title>Sebastiano | Homepage 1</title>
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700%7CPacifico%7CVarela+Round%7CPoppins" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('packages/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('packages/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('packages/plugins/ps-icon/ps-icon.css')}}">
    <!-- CSS Library-->
    <link rel="stylesheet" href="{{asset('packages/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('packages/plugins/owl-carousel/assets/owl.carousel.css')}}">
{{--    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('packages/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('packages/plugins/Magnific-Popup/dist/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('packages/plugins/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('packages/plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('packages/plugins/slick/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('packages/plugins/lightGallery-master/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('packages/plugins/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('packages/plugins/revolution/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('packages/plugins/revolution/css/navigation.css')}}">
    <!-- Custom-->
    <link rel="stylesheet" href="{{asset('packages/alessioprete/base/css/style.css')}}">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
<body class="page-init">
@yield('content')
@component(alessioprete_view('frontend.components.footer'))@endcomponent

    <!-- JS Library-->
    <script type="text/javascript" src="{{asset('packages/plugins/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/overflow-text.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/masonry.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/imagesloaded.pkgd.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/moment.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/slick/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/gmap3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/lightGallery-master/dist/js/lightgallery-all.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script>
    <!-- Revolution - slider--><script type="text/javascript" src="{{asset('packages/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="{{asset('packages/alessioprete/base/js/main.js')}}"></script>
</body>
</html>
