<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title',"Web Kelulusan")</title>
  <!-- Custom fonts for this template-->
  <link href="{{ asset("vendor/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{ asset("css/sb-admin-2.min.css")  }}" rel="stylesheet">
  <script src="{{  asset("vendor/jquery/jquery.min.js")  }}"></script>

  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js">
  </script>
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
</head>

<body id="page-top">

  <div id="wrapper">
    @include('component.sidebar')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column mt-3">

      <!-- Main Content -->
      <div id="content">

        {{-- @include('component.navbar') --}}
        @yield('content')

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Ghoni 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <script src="{{  asset("vendor/bootstrap/js/bootstrap.bundle.min.js")  }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{  asset("vendor/jquery-easing/jquery.easing.min.js")  }}"></script>
  <script src="{{  asset("js/sb-admin-2.min.js")  }}"></script>

  @yield('js')
</body>

</html>