<!DOCTYPE html>
<html lang="en">

    <head>
        <title> @yield('title') </title>

        <meta charset="UTF-8">
        <meta name="description" content=" Divisima | eCommerce Template">
        <meta name="keywords" content="divisima, eCommerce, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link href="{{asset('img/favicon.ico')}}" rel="shortcut icon" />

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" />
        <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />

        <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        @yield('styles')

    </head>

    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        @include('partial.header')

        <!--Home page property-->

        @yield('after-header')

        @yield('user_profile')  {{-- link to user profile page for registered user --}}

        @yield('lastest-product')

        @yield('best-selling')

        @yield('banner')

        <!--Cart page property-->
        @yield('cart')

        <!--Category page property-->
        @yield('category')

        <!--product detail page property-->
        @yield('product-detail')

        <!--checkout page property-->
        @yield('checkout')

        <!--checkout page property-->
        @yield('contact')

        @include('partial.footer')



        <!--====== Javascripts & Jquery ======-->

        <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('js/jquery.zoom.min.js')}}"></script>
        <script src="{{asset('js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>

        @yield('js_block')

    </body>

</html>
