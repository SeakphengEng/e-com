<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> @yield('title') </title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Styles -->
        <link href="{{ asset('frontend/accounts/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
    <div class="main">
        <!--Logo Area of the page-->
        <div class="logo-area">
            <div class="row align-items-center justify-content-end">
                <div class="col-12 col-lg-7">
                    <div class="top_single_area d-flex align-items-center">
                        <!-- Logo -->
                        <div class="top_logo">
                            <a href="#"><img src="frontend/accounts/images/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="signup">
        @yield('sign-up')

    </section>

    </body>

</html>
