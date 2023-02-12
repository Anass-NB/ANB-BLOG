<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ANB-BLOG - PHP and Laravel Framework</title>
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
              <a href="{{ route('posts.front') }}" class="logo-dark"><img src="assets/img/logo/logo.png"
                  alt="Logo"></a>
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
                  <a href="index.html" class="logo-dark"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                  <a href="index.html" class="logo-light"><img src="assets/img/logo/w_logo.png" alt="Logo"></a>
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
                  <a href="index.html" class="logo-dark"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                  <a href="index.html" class="logo-light"><img src="assets/img/logo/w_logo.png" alt="Logo"></a>
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
            <a href="index.html" class="logo-dark"><img src="assets/img/logo/logo.png" alt="Logo"></a>
            <a href="index.html" class="logo-light"><img src="assets/img/logo/w_logo.png" alt="Logo"></a>
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

  <!-- main-area -->
  <main>

    <!-- breadcrumb-area -->
    <div class="breadcrumb-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="breadcrumb-content">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- blog-details-area -->
    <section class="blog-details-area pt-80 pb-100">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-xl-8 col-lg-7">
            <div class="blog-post-wrapper">
              @foreach ($posts as $post)
                <div class="latest__post-item">
                  <div class="latest__post-thumb tgImage__hover">

                    <a href="blog-details.html"><img
                        src="{{ asset('photos/posts/' . $post->title . '/' . $post->photo . '') }}"
                        alt="img"></a>
                  </div>
                  <div class="latest__post-content">
                    <ul class="tgbanner__content-meta list-wrap">
                      <li class="category"><a href="blog.html">{{ $post->category->name }}</a></li>
                      <li><span class="by">By</span> <a href="blog.html">{{ $post->author->name }}</a></li>
                      <li>{{ $post->created_at->format('d-m-Y') }}</li>
                    </ul>
                    <h3 class="title tgcommon__hover"><a
                        href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h3>
                    <p>{{ $post->summary }}</p>
                    <div class="latest__post-read-more">
                      <a href="{{ route('posts.show', $post->slug) }}">Read More <i
                          class="far fa-long-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              @endforeach
              <div class="pagination__wrap">
                <ul class="list-wrap">
                  <li class="active"><a href="#">01</a></li>
                  <li><a href="#">02</a></li>
                  <li><a href="#">...</a></li>
                  <li><a href="#">06</a></li>
                  <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <aside class="blog-sidebar">
              <div class="widget sidebar-widget">
                <div class="tgAbout-me">
                  <div class="tgAbout-thumb">
                    <img src="{{ asset('assets/img/logo/anass nabil.png') }}" alt="me">
                  </div>
                  <div class="tgAbout-info">
                    <p class="intro">Hi there, I’m <span>Anass Nabil</span></p>
                    <span class="designation">Web Developer</span>
                  </div>
                  <div class="tgAbout-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                  </div>
                </div>
              </div>
              <div class="widget sidebar-widget widget_categories">
                <h4 class="widget-title">Trending Category</h4>
                <ul class="list-wrap">
                  @foreach ($categories as $category)
                    @if (count($category->posts) > 0)
                      <li>
                        <div class="thumb">
                          <a href="blog.html">
                            <img src="{{ asset('categories/logos/' . $category->logo . '') }}" alt="category logo">
                          </a>
                        </div>
                        <a href="blog.html">{{ $category->name }}</a>
                        <span class="float-right">{{ count($category->posts) }}</span>
                      </li>
                    @endif
                  @endforeach
                </ul>
              </div>
              <div class="widget sidebar-widget">
                <div class="sidePost-active">
                  @foreach ($random_posts as $random_post)
                    <div class="sidePost__item"
                      data-background="{{ asset('photos/posts/' . $random_post->title . '/' . $random_post->photo . '') }}">
                      <div class="sidePost__content">
                        <a href="{{ route('posts.show', $random_post->slug) }}"
                          class="tag">{{ $random_post->title }}</a>
                        <h5 class="title tgcommon__hover"><a
                            href="{{ route('posts.show', $random_post->slug) }}">{{ $random_post->summary }}</a>
                        </h5>
                      </div>
                    </div>
                  @endforeach


                </div>
              </div>
              <div class="widget sidebar-widget">
                <h4 class="widget-title">Instagram Feeds</h4>
                <div class="sidebarInsta__wrap">
                  <div class="sidebarInsta__top">
                    <div class="sidebarInsta__logo">
                      <img src="assets/img/instagram/insta_logo.png" alt="img">
                    </div>
                    <div class="sidebarInsta__info">
                      <h6 class="name"><a href="#">ins.co/sarso.co</a></h6>
                      <span class="designation">Code Supply Co.</span>
                    </div>
                  </div>
                  <div class="sidebarInsta__slider-wrap">
                    <div class="swiper-container sidebarInsta-active">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img
                              src="assets/img/instagram/side_insta01.jpg" alt="img"></a>
                        </div>
                        <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img
                              src="assets/img/instagram/side_insta02.jpg" alt="img"></a>
                        </div>
                        <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img
                              src="assets/img/instagram/side_insta03.jpg" alt="img"></a>
                        </div>
                        <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img
                              src="assets/img/instagram/side_insta04.jpg" alt="img"></a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-container sidebarInsta-active-2" dir="rtl">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img
                              src="assets/img/instagram/side_insta05.jpg" alt="img"></a>
                        </div>
                        <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img
                              src="assets/img/instagram/side_insta06.jpg" alt="img"></a>
                        </div>
                        <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img
                              src="assets/img/instagram/side_insta07.jpg" alt="img"></a>
                        </div>
                        <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img
                              src="assets/img/instagram/side_insta08.jpg" alt="img"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="sidebarInsta__bottom">
                    <a href="https://www.instagram.com/" target="_blank" class="btn"><i
                        class="fab fa-instagram"></i><span class="text">Follow Me</span></a>
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!-- blog-details-area-end -->

  </main>
  <!-- main-area-end -->

  <!-- footer-area -->
  <footer class="footer-area black-bg">
    <div class="container">
      <div class="footer__top-wrap">
        {{-- <div class="row">
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="footer__widget">
              <h4 class="fw-title">Worldwide</h4>
              <ul class="list-wrap">
                <li><a href="#">U.N.</a></li>
                <li><a href="#">Conflicts</a></li>
                <li><a href="#">Terrorism</a></li>
                <li><a href="#">Disasters</a></li>
                <li><a href="#">Global Economy</a></li>
                <li><a href="#">Environment</a></li>
                <li><a href="#">Religion</a></li>
                <li><a href="#">Scandals</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="footer__widget">
              <h4 class="fw-title">Politics</h4>
              <ul class="list-wrap">
                <li><a href="#">Executive</a></li>
                <li><a href="#">Senate</a></li>
                <li><a href="#">House</a></li>
                <li><a href="#">Judiciary</a></li>
                <li><a href="#">Global Economy</a></li>
                <li><a href="#">Foreign policy</a></li>
                <li><a href="#">Polls</a></li>
                <li><a href="#">Elections</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="footer__widget">
              <h4 class="fw-title">Entertainment</h4>
              <ul class="list-wrap">
                <li><a href="#">Celebrity News</a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">TV News</a></li>
                <li><a href="#">Disasters</a></li>
                <li><a href="#">Music News</a></li>
                <li><a href="#">Environment</a></li>
                <li><a href="#">Style News</a></li>
                <li><a href="#">Entertainment Video</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="footer__widget">
              <h4 class="fw-title">Business</h4>
              <ul class="list-wrap">
                <li><a href="#">Environment</a></li>
                <li><a href="#">Conflicts</a></li>
                <li><a href="#">Terrorism</a></li>
                <li><a href="#">Disasters</a></li>
                <li><a href="#">Global Economy</a></li>
                <li><a href="#">Environment</a></li>
                <li><a href="#">Religion</a></li>
                <li><a href="#">Scandals</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="footer__widget">
              <h4 class="fw-title">Health</h4>
              <ul class="list-wrap">
                <li><a href="#">Movies</a></li>
                <li><a href="#">Conflicts</a></li>
                <li><a href="#">Terrorism</a></li>
                <li><a href="#">Disasters</a></li>
                <li><a href="#">Global Economy</a></li>
                <li><a href="#">Scandals</a></li>
                <li><a href="#">Environment</a></li>
                <li><a href="#">Religion</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="footer__widget">
              <h4 class="fw-title">Trending In</h4>
              <ul class="list-wrap">
                <li><a href="#">U.N.</a></li>
                <li><a href="#">Conflicts</a></li>
                <li><a href="#">Terrorism</a></li>
                <li><a href="#">Disasters</a></li>
                <li><a href="#">Global Economy</a></li>
                <li><a href="#">Environment</a></li>
                <li><a href="#">Religion</a></li>
                <li><a href="#">Scandals</a></li>
              </ul>
            </div>
          </div>
        </div> --}}
      </div>
      <div class="footer__logo-wrap">
        <div class="row align-items-center">
          <div class="col-lg-3 col-md-4">
            <div class="footer__logo logo">
              <a href="index.html"><img src="assets/img/logo/w_logo.png" alt="Logo"></a>
            </div>
          </div>
          <div class="col-lg-9 col-md-8">
            <div class="footer__social">
              <ul class="list-wrap">
                <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook <span>25K</span></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i> Twitter <span>44K</span></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i> Youtube <span>91K</span></a></li>
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