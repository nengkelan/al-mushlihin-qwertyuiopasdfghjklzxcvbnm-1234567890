<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Mulai Dari Sini Dulu -->
    <!-- Favicon -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
        <!-- Vendor CSS -->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendor/animate/animate.min.css">
        <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="css/theme.css">
        <link rel="stylesheet" href="css/theme-elements.css">
        <link rel="stylesheet" href="css/theme-blog.css">
        <link rel="stylesheet" href="css/theme-shop.css">
        <!-- Current Page CSS -->
        <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
        <link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
        <link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css">
        <!-- Skin CSS -->
        <link rel="stylesheet" href="css/skins/default.css"> 
        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Head Libs -->
        <script src="vendor/modernizr/modernizr.min.js"></script>
        @yield('atas')
</head>

<body>


<div class="body">
@yield('isi')
            <header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0, 'stickySetTop': '0'}">        
             @include('_header')
             </header>

            <div role="main" class="main">
            @include('_main')
            </div>

            <footer id="footer">    
            @include('_footer')
            </footer>    

</div>

@yield('bawah') 
<!-- Vendor -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
        <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
        <script src="vendor/popper/umd/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/common/common.min.js"></script>
        <script src="vendor/jquery.validation/jquery.validation.min.js"></script>
        <script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
        <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
        <script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
        <script src="vendor/isotope/jquery.isotope.min.js"></script>
        <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendor/vide/vide.min.js"></script>
        <!-- Theme Base, Components and Settings -->
        <script src="js/theme.js"></script>
        <!-- Current Page Vendor and Views -->
        <script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
        <script src="js/views/view.home.js"></script>
        <!-- Theme Custom -->
        <script src="js/custom.js"></script>
        <!-- Theme Initialization Files -->
        <script src="js/theme.init.js"></script>
</body>
</html>