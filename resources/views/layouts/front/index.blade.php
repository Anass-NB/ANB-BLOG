<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    @yield('title')
  </title>
  <meta name="description" content="Sarsa - PHP and Laravel Framework">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
  <!-- Place favicon.ico in the root directory -->

  {{-- CSS here --}}
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/imageRevealHover.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

  <!-- preloader -->
  <div id="preloader">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <div class="object" id="object_one"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_three"></div>
      </div>
    </div>
  </div>
  <!-- preloader-end -->

  <!-- Scroll-top -->
  <button class="scroll__top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
  </button>
  <!-- Scroll-top-end-->

  <!-- header-area -->
  <header>
    <div class="header__top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-6 col-sm-6 order-2 order-lg-0">
            <div class="header__top-search">
              <form action="#">
                <input type="text" placeholder="Search here...">
              </form>
            </div>
          </div>
          <div class="col-lg-4 col-md-3 order-0 order-lg-2 d-none d-md-block">
            <div class="header__top-logo logo text-lg-center">
              <a href="{{ route('posts.front') }}" class="logo-dark"><img
                  src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo"></a>
              <a href="{{ route('posts.front') }}" class="logo-light"><img src="assets/img/logo/w_logo.png"
                  alt="Logo"></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-3 col-sm-6 order-3 d-none d-sm-block">
            <div class="header__top-right">
              <ul class="list-wrap">

                <li class="lang">
                  <div class="dropdown">
                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      ENG
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">DAR</a></li>
                      <li><a class="dropdown-item" href="#">FR</a></li>

                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="header-fixed-height"></div>
    <div id="sticky-header" class="tg-header__area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="tgmenu__wrap">
              <nav class="tgmenu__nav">
                <div class="logo d-block d-md-none">
                  <a href="index.html" class="logo-dark"><img src="{{ asset('assets/img/logo/logo.png') }}"
                      alt="Logo"></a>
                  <a href="index.html" class="logo-light"><img src="{{ asset('assets/img/logo/w_logo.png') }}"
                      alt="Logo"></a>
                </div>
                <div class="offcanvas-toggle">
                  <a href="#"><i class="flaticon-menu-bar"></i></a>
                </div>
                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                  <ul class="navigation">
                    <li class="menu-item-has-children"><a href="{{ route('posts.front') }}">Home</a>
                      <ul class="sub-menu">
                        <li><a href="{{ route('posts.front') }}">Laravel Posts</a></li>
                        <li><a href="index-2.html">Laravel useful packages</a></li>

                      </ul>
                    </li>
                </div>
                <div class="tgmenu__action">
                  <ul class="list-wrap">
                    <li class="mode-switcher">
                      <nav class="switcher__tab">
                        <span class="switcher__btn light-mode"><i class="flaticon-sun"></i></span>
                        <span class="switcher__mode"></span>
                        <span class="switcher__btn dark-mode"><i class="flaticon-moon"></i></span>
                      </nav>
                    </li>
                    <li class="user"><a href="#"><i class="far fa-user"></i></a></li>
                    <li class="header-cart"><a href="#"><i class="far fa-shopping-basket"></i></a></li>
                  </ul>
                </div>
              </nav>
              <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
            </div>
            <!-- Mobile Menu  -->
            <div class="tgmobile__menu">
              <nav class="tgmobile__menu-box">
                <div class="close-btn"><i class="fas fa-times"></i></div>
                <div class="nav-logo">
                  <a href="index.html" class="logo-dark"><img src="{{ asset('assets/img/logo/logo.png') }}"
                      alt="Logo"></a>
                  <a href="index.html" class="logo-light"><img src="{{ asset('assets/img/logo/w_logo.png') }}"
                      alt="Logo"></a>
                </div>
                <div class="tgmobile__search">
                  <form action="#">
                    <input type="text" placeholder="Search here...">
                    <button><i class="far fa-search"></i></button>
                  </form>
                </div>
                <div class="tgmobile__menu-outer">
                  <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="social-links">
                  <ul class="list-wrap">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </nav>
            </div>
            <div class="tgmobile__menu-backdrop"></div>
            <!-- End Mobile Menu -->
          </div>
        </div>
      </div>
    </div>

    <!-- offCanvas-area -->
    <div class="offCanvas__wrap">
      <div class="offCanvas__body">
        <div class="offCanvas__toggle"><i class="flaticon-addition"></i></div>
        <div class="offCanvas__content">
          <div class="offCanvas__logo logo">
            <a href="index.html" class="logo-dark"><img src="{{ asset('assets/img/logo/logo.png') }}"
                alt="Logo"></a>
            <a href="index.html" class="logo-light"><img src="{{ asset('assets/img/logo/w_logo.png') }}"
                alt="Logo"></a>
          </div>
          <p>Change how the world works with Biotellus, made for ecology.</p>
          <ul class="offCanvas__instagram list-wrap">
            <li><a href="assets/img/blog/blog01.jpg" class="popup-image"><img src="assets/img/blog/blog01.jpg"
                  alt="img"></a></li>
            <li><a href="assets/img/blog/blog02.jpg" class="popup-image"><img src="assets/img/blog/blog02.jpg"
                  alt="img"></a></li>
            <li><a href="assets/img/blog/blog03.jpg" class="popup-image"><img src="assets/img/blog/blog03.jpg"
                  alt="img"></a></li>
            <li><a href="assets/img/blog/blog04.jpg" class="popup-image"><img src="assets/img/blog/blog04.jpg"
                  alt="img"></a></li>
            <li><a href="assets/img/blog/blog05.jpg" class="popup-image"><img src="assets/img/blog/blog05.jpg"
                  alt="img"></a></li>
            <li><a href="assets/img/blog/blog06.jpg" class="popup-image"><img src="assets/img/blog/blog06.jpg"
                  alt="img"></a></li>
          </ul>
        </div>
        <div class="offCanvas__contact">
          <h4 class="title">Get In Touch</h4>
          <ul class="offCanvas__contact-list list-wrap">
            <li><i class="fas fa-envelope-open"></i><a href="mailto:info@webmail.com">info@webmail.com</a></li>
            <li><i class="fas fa-phone"></i><a href="tel:88899988877">888 999 888 77</a></li>
            <li><i class="fas fa-map-marker-alt"></i> 12/A, New Booston, NYC</li>
          </ul>
          <ul class="offCanvas__social list-wrap">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="offCanvas__overlay"></div>
    <!-- offCanvas-area-end -->

  </header>
  <!-- header-area-end -->

  @yield('content')

  <!-- footer-area -->
  <footer class="footer-area black-bg">
    <div class="container">
      <div class="footer__top-wrap">
      </div>
      <div class="footer__logo-wrap">
        <div class="row align-items-center">
          <div class="col-lg-3 col-md-4">
            <div class="footer__logo logo">
              <a href="index.html"><img src="{{ asset('assets/img/logo/w_logo.png') }}" alt="Logo"></a>
            </div>
          </div>
          <div class="col-lg-9 col-md-8">
            <div class="footer__social">
              <ul class="list-wrap">
                <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook </a></li>
                <li><a href="#"><i class="fab fa-twitter"></i> Twitter </a></li>
                <li><a href="#"><i class="fab fa-youtube"></i> Youtube </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer-area-end -->

  <!-- JS here -->
  <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
  <script src="{{ asset('assets/js/imageRevealHover.js') }}"></script>
  <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
  <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
  <script src="{{ asset('assets/js/slick.min.js') }}"></script>
  <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
