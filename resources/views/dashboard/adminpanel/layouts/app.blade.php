<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'CMS') }} - @yield('page_title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- All CSS -->
    <link rel="stylesheet" href="{{ asset('admin_dashboard/assets/css/app.css') }}">
    
    <link rel="stylesheet" href="{{ asset('admin_dashboard/assets/css/summernotestyle.min.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css"
        integrity="sha512-gMjQeDaELJ0ryCI+FtItusU9MkAifCZcGq789FrzkiM49D8lbDhoaUaIX4ASU187wofMNlgBJ4ckbrXM9sE6Pg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .nav-sidebar > .nav-item > a {
            display: flex;
            align-items: center;
        }

        .nav-sidebar > .nav-item > a > p {
            margin-bottom: 0;
        }

        .nav-sidebar > .nav-item  {
            margin-bottom: 14px;
        }


        .ck.ck-content.ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline.ck-blurred p {
            color: #000;
        }

        .ck.ck-editor__editable_inline[dir=ltr] {
            text-align: left;
            color: black;
        }

        img.figure-img.img-fluid.rounded.img-thumbnail {
            width: 350px;
        }

        .select2-container--default .select2-selection--single {
            background-color: #202940 !important;
            color: #fff !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #fff !important;

        }

        .select2-dropdown {
            background-color: #202940 !important;

        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            color: #000;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            color: #000 !important;
        }

        .select2-selection__choice__display {
            color: #000 !important;

        }

        .select2-container--default.select2-container--focus .select2-selection--multiple {
            background-color: #2f3439;
        }

        .select2-container--default .select2-selection--multiple {
            background-color: #2f3439 !important;
        }
    </style>
    @yield('head_style')

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble"
                src="@if ($appSettings) {{ asset('/storage/app/public/settings/' . $appSettings->logo) }} @endif"
                alt="CMS Logo" height="60" width="60">
        </div> --}}

        <!-- Navbar -->
        @include('dashboard.adminpanel.includes.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('dashboard.adminpanel.includes.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('dashboard.adminpanel.includes.footer')
    </div>
    <!-- ./wrapper -->

    <!-- All js -->

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script> --}}

    <script src="{{ asset('admin_dashboard/assets/js/app.js') }}"></script>

    <script src="{{ asset('admin_dashboard/assets/js/sweetalert.js') }}"></script>

    <script src="{{ asset('admin_dashboard/assets/js/summernote.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('bottom_script')

    <script>
        $(document).ready(function() {
            // Select2 Multiple
            $('.select2-multiple').select2({
                placeholder: "Select",
                allowClear: true
            });


        });

        function errorModal(error) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: error,
                footer: ''
            })
        }

        function successModal(message) {
            Swal.fire(
                'Status',
                message,
                'success'
            )
        }
    </script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDm0TRBW2zrFnMXu6UVrb2NPb7WNcPHnaI&callback=initMap">
    </script>-->

</body>

</html>
