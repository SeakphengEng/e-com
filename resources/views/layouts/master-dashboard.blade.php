<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> @yield('title') </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{asset('backend/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/admin/assets/css/paper-dashboard.css?v=2.0.0')}}" rel="stylesheet" />

    @yield('style')

</head>

<body class="">

<div class="wrapper ">

    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">

            <a href="http://www.creative-tim.com" class="simple-text logo-normal">

                <div class="logo-image-big">
                    <img src="{{url('/backend/admin/assets/img/logo.png')}}">
                </div>
            </a>
        </div>
        @yield('sidebar')
    </div>

    <div class="main-panel">

        @include('partial.admin.navbar')

        @yield('content')

        @include('partial.admin.footer')

    </div>

</div>

<!--   Core JS Files   -->
<script src="{{asset('backend/admin/assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('backend/admin/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('backend/admin/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/admin/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!--  Chart JS -->
<script src="{{asset('backend/admin/assets/js/plugins/chartjs.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('backend/admin/assets/js/plugins/bootstrap-notify.js')}}"></script>

<!--  Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('backend/admin/assets/js/paper-dashboard.min.js?v=2.0.0')}}" type="text/javascript"></script>


<!-- Extends javascript code section-->
@yield('jsblock')

</body>

</html>
