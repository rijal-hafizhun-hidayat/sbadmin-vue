<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
        <script src="{{ mix('/js/app.js') }}" defer></script>
        <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}" defer></script>
        <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}" defer></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('admin/js/sb-admin-2.min.js') }}" defer></script>

        <!-- Page level plugins -->
        <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}" defer></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('admin/js/demo/chart-area-demo.js') }}" defer></script>
        <script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}" defer></script>
        @inertiaHead
    </head>
    <body class="bg-gradient-primary">
        @inertia
    </body>
</html>