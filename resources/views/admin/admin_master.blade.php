<!DOCTYPE html>



<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NIMS - UOR</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href=" {{asset('dist/css/app.css')}} " />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
        <!-- BEGIN: Mobile Menu -->
        <!-- END: Mobile Menu -->
        <div class="flex">

            <!-- BEGIN: Side Menu -->
           @include('admin.body.sidebar')
            <!-- END: Side Menu -->


            <!-- BEGIN: Content -->
            @yield('admin')
            <!-- END: Content -->
        </div>


        <!-- BEGIN: Dark Mode Switcher-->
        @include('admin.body.darkmood')
        <!-- END: Dark Mode Switcher-->

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src=" {{asset('dist/js/app.js')}} "></script>
        <!-- END: JS Assets-->
    </body>
</html>
