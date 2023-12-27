<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url ('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="{{ url ('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="{{ url ('admin/css/app.css') }}" rel="stylesheet">

    <!-- Custom styles for dataTables -->
    <link href="{{ url ('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin.layout.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('admin.layout.header')

                @yield('content')

            </div>
            <!-- End of Main Content -->

            @include('admin.layout.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ url('admin/logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url ('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url ('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url ('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url ('admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ url ('admin/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url ('admin/js/chart-area-demo.js') }}"></script>

    <!-- DataTables custom scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ url ('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url ('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Custom scripts -->
    <script src="{{ url ('admin/js/calculate.js') }}"></script>

    <script>
        $(document).ready(function() {
            try {
                $("#reservations").DataTable({
                    // Additional DataTables options go here
                });
            } catch (error) {
                console.error("An error occurred while initializing DataTables:", error);
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            // Add the "active" class to the clicked menu item
            $('ul li').click(function() {
                $('ul li').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
    <script>
    $(document).ready(function() {
        // Get the current URL
        var currentUrl = window.location.href;

        // Loop through each menu item
        $('ul li').each(function() {
            // Get the menu item's link
            var menuItemLink = $(this).find('a').attr('href');

            // Check if the current URL contains the menu item's link
            if (currentUrl.includes(menuItemLink)) {
                // Add the "active" class to the menu item
                $(this).addClass('active');
            }
        });
    });
</script>
</body>

</html>