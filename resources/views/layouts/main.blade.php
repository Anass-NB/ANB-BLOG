<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>
    @yield('title')
  </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">
  @notifyCss

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Icon Font Stylesheet -->
  {{--
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> --}}
  {{--
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> --}}

  <!-- Libraries Stylesheet -->
  {{--
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" /> --}}
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  @yield('links')

  @include('layouts.links')
</head>

<body>

  <div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    {{-- <div id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div> --}}
    <!-- Spinner End -->

    <!-- Sidebar Start -->
    @include('layouts.sidebar')
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">
      <!-- Navbar Start -->
      @include('layouts.navbar')
      <!-- Navbar End -->

      <!-- Blank Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="bg-light pb-4">
          <div class="">

            @yield('content')

          </div>
        </div>
      </div>
      <!-- Blank End -->

      @include('layouts.footer')
    </div>
    <!-- Content End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="lib/chart/chart.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
  @yield('scripts')

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
  {{-- @include('notify::messages') --}}
  <x:notify-messages />
  @notifyJs
</body>

</html>
