<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>mkba</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('../assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('../assets/vendors/css/vendor.bundle.base.css') }}">
    
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('../assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ url('../assets/images/favicon.icon') }}" />
    <style>
      .table-container {
        overflow-x: scroll;
        -webkit-overflow-scrolling: touch;
      }

      .table {
        width: 100%;
        /* Add any other desired styles for your table */
      }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('client.body.hearder')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('client.body.sidebar')
        <!-- partial -->
        <div class="main-panel">
          
            @yield('client')

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('client.body.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
   
    <script>
      // Prevent vertical scrolling when interacting with horizontal scroll
    var tableContainer = document.querySelector('.table-container');
    tableContainer.addEventListener('touchmove', function(event) {
      event.stopPropagation();
    });

    </script>
    <!-- plugins:js -->
    <script src="{{ url('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ url('../assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('../assets/js/jquery.cookie.js" type="text/javascript') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('../assets/js/off-canvas.js') }}"></script>
    <script src="{{ url('../assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('../assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ url('../assets/js/dashboard.js') }}"></script>
    <script src="{{ url('../assets/js/todolist.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>