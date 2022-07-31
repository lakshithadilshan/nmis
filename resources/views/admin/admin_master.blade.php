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
{{--        imporatant muddesha--}}
{{--        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />--}}
        <!-- END: CSS Assets-->
        <style>
            .bg-opacity-50{
                z-index: 900 !important;
            }
            #popup-modal, #defaultModal, #delete-modal, #edit-modal, #view-modal, #editdesignationModal, #small-modal, #add-modal, #available_test_delete-modal, #available_test_add-modal,#available_test_edit-modal, #schedule_edit-modal, #schedule_add-modal, #mark_delete-modal, #season-modal, #confirm_reject_modal, #confirm_approve_modal{
                z-index: 910 !important;
                overflow: auto; /* Enable scroll if needed */


            }
            .modal{
                z-index: 910 !important;
            }

            .hr-text {
                line-height: 1em;
                position: relative;
                outline: 0;
                border: 0;
                color: black;
                text-align: center;
                height: 1.5em;
                opacity: .5;

            }

        </style>
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
        <!-- END: Dark Mode Switcher-->

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src=" {{asset('dist/js/app.js')}} "></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script> -->
        <script src=" {{asset('dist/js/app.js')}} "></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://js.pusher.com/7.1/pusher.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>
