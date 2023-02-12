<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>BLOGVEL - {{ $post->title }}</title>
  <meta name="description" content="BLOGVEL - PHP & Laravel Framework">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
  <!-- Place favicon.ico in the root directory -->

  {{--
  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/imageRevealHover.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.css">
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/spacing.css">
  <link rel="stylesheet" href="assets/css/main.css"> --}}
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
              <a href="{{ route('posts.front') }}" class="logo-light"><img
                  src="{{ asset('assets/img/logo/w_logo.png') }}" alt="Logo"></a>
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
                  <a href="{{ route('posts.front') }}" class="logo-dark"><img src="assets/img/logo/logo.png"
                      alt="Logo"></a>
                  <a href="{{ route('posts.front') }}" class="logo-light"><img src="assets/img/logo/w_logo.png"
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
                    {{-- <li><a href="lifestyle.html">Lifestyle</a></li>
                    <li><a href="travel.html">Travel</a></li>
                    <li class="active menu-item-has-children"><a href="#">Post Type</a>
                      <ul class="sub-menu">
                        <li><a href="blog.html">Our Blog</a></li>
                        <li class="active"><a href="blog-details.html">Blog Details</a></li>
                      </ul>
                    </li>
                    <li><a href="nft.html">NFT</a></li> --}}
                  </ul>
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
                  <a href="{{ route('posts.index') }}" class="logo-dark"><img
                      src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo"></a>
                  <a href="{{ route('posts.index') }}" class="logo-light"><img
                      src="{{ asset('assets/img/logo/w_logo.png') }}" alt="Logo"></a>
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
            <a href="{{ route('posts.front') }}" class="logo-dark"><img
                src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo"></a>
            <a href="{{ route('posts.front') }}" class="logo-light"><img
                src="{{ asset('assets/img/logo/w_logo.png') }}" alt="Logo"></a>
          </div>
          <p>Change how the world works with Biotellus, made for ecology.</p>
          <ul class="offCanvas__instagram list-wrap">
            <li><a href="assets/img/blog/blog01.jpg" class="popup-image"><img src="assets/img/blog/blog01.jpg"
                  alt="img"></a></li>
            <li><a href="assets/img/blog/blog02.jpg" class="popup-image"><img src="assets/img/blog/blog02.jpg"
                  alt="img"></a></li>
            <li><a href="assets/img/blog/blog03.jpg" class="popup-image"><img src="assets/img/blog/blog03.jpg"
                  alt="img"></a></li>
            <li>
              <a href="assets/img/blog/blog04.jpg" class="popup-image"><img src="assets/img/blog/blog04.jpg"
                  alt="img"></a>
            </li>
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
                  <li class="breadcrumb-item"><a href="blog.html">Posts</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
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
          <div class="col-lg-1">
            <div class="blog-details-social">
              <ul class="list-wrap">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                <li><a href="#"><i class="fas fa-share"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7">
            <div class="blog-details-wrap">
              <ul class="tgbanner__content-meta list-wrap">
                <li class="category"><a href="blog.html">{{ $post->category->name }}</a></li>
                <li><span class="by">By</span> <a href="blog.html">{{ $post->author->name }}</a></li>
                <li>{{ $post->created_at }}</li>
                {{-- <li>23 comments</li> --}}
              </ul>
              <h2 class="title">{{ $post->title }}</h2>
              <div class="blog-details-thumb">

                <img src="{{ asset('photos/posts/' . $post->title . '/' . $post->photo . '') }}" alt="post photo">
              </div>
              <div class="blog-details-content">
                <p>{{ $post->summary }}</p>
                <br>
                <div class="">
                  <?php echo '<div class="content-post text-danger ">'; ?>
                  <?php echo " $post->content "; ?>
                  <?php echo '</div>'; ?>

                </div>
                {{-- <p>We are proud that our people can make a positive impact on the world around us through their
                  work at Envato. And while there is still lots of work to do to realise carbon, we’re nonetheless
                  pleased we’ve reached this sustainability milestone and thrilled to partner with Trace to further
                  track and refine the management of our carbon footprint. An through Trace, Envato is now able to more
                  comprehensively measure the amount of carbon emissions the business generates. This includes not just
                  its physical offices in Melbourne, Guadalajara and Los Angeles, but also includes an estimate of the
                  footprint of its 600 plus staff who work flexibly around the world, as well as the usage tied to its
                  tech infrastructure including our cloud computing services.</p> --}}

                {{-- <div class="blog-details-inner">
                  <h3 class="inner-title">Building the Future of Artificial Intelligence</h3>
                  <p>When we signed on to the To Whom It May Concern campaign we made a pledge to be 100% renewable by
                    2030 and carbon zero by 2040,” said Envato CEO Hichame Assi. “It’s a commitment made on the back of
                    our B Corp certification, and one we believe reflects not just our values but a broader sense of how
                    businesses can contribute to fighting climate change.</p>
                  <div class="blog-details-images">
                    <div class="row">
                      <div class="col-md-4 col-sm-6">
                        <div class="details-inner-image">
                          <img src="assets/img/lifestyle/life_style02.jpg" alt="img">
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="details-inner-image">
                          <img src="assets/img/lifestyle/life_style03.jpg" alt="img">
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="details-inner-image">
                          <img src="assets/img/lifestyle/life_style04.jpg" alt="img">
                        </div>
                      </div>
                    </div>
                  </div>
                  <p>The Mount Sandy project in South Australia is one of those supported by Envato through Trace. Its
                    permanent protection of the regionally and culturally important pocket. Trace CEO and Co-Founder
                    Catherine Long said Envato was a perfect example of a fast-moving tech business that already has a
                    demonstrable commitment to sustain.
                    “But they needed a solution for measuring and managing their carbon footprint that matched the speed
                    & efficiency of the way they work footprint that matched the speed.</p>
                </div>

                <blockquote>
                  <p>“ 20 years ago today, Steve introduced the world to iMac. It set Apple on a new course and forever
                    changed the way people look at computers. ”</p>
                  <div class="blockquote-cite">
                    <div class="image">
                      <img src="assets/img/others/about_me.png" alt="">
                    </div>
                    <div class="info">
                      <h5>Miranda H. Halim</h5>
                      <span>Head Of Idea</span>
                    </div>
                  </div>
                </blockquote>

                <p>We are proud that our people can make a positive impact on the world around us through their work at
                  Envato. And while there is still lots of work to do to realise carbon, we’re nonetheless pleased we’ve
                  reached this sustainability milestone and thrilled to partner with Trace to further track and refine
                  the management of our carbon footprint. An
                  through Trace, Envato is now able to more comprehensively measure the amount of carbon emissions the
                  business generates. This includes not just its physical offices in Melbourne, Guadalajara and Los
                  Angeles, but also includes an estimate of the footprint of its 600 plus staff who work flexibly around
                  the world, as well as the usage tied to its ech infrastructure including our cloud computing services.
                </p>
                <div class="blog-details-inner">
                  <h3 class="inner-title">The Creative Cloud</h3>
                  <p>When we signed on to the To Whom It May Concern campaign we made a pledge to be 100% renewable by
                    2030 and carbon zero by 2040,” said Envato CEO Hichame Assi..</p>
                  <ul class="list-wrap">
                    <li><span>The games generate:</span>Revenue through sales of digital items, such as special
                      costumes, which appear in a rotating storefront that is updated daily.</li>
                    <li><span>Players use in-game:</span>Currency to customize their appearance, and the daily refresh
                      of the store incentives players to buy fresh gear or risk missing out on it entirely.</li>
                    <li><span>Players have:</span> Already spent more than $1 billion on Fortnite’s in-game purchases,
                      according to IGN report.</li>
                  </ul>
                </div>
                <div class="details-advertisement">
                  <a href="#"><img src="assets/img/others/advertisement02.png" alt="img"></a>
                </div>
                <p>Envato is now able to more comprehensively measure the amount of carbon emissions the business
                  generates. includes not just its physical offices in Melbourne, Guadalajara and Los Angeles, but also
                  includes an estimate of footprint of its 600 plus staff who work flexibly around the world, as well as
                  the usage tied to its tech infrastructure including our cloud computing services lexibly around the
                  world.</p>
              </div>
              <div class="blog-details-bottom">
                <div class="row align-items-baseline">
                  <div class="col-xl-6 col-md-7">
                    <div class="blog-details-tags">
                      <ul class="list-wrap mb-0">
                        <li><a href="#">technology</a></li>
                        <li><a href="#">finance</a></li>
                        <li><a href="#">business</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-5">
                    <div class="blog-details-share">
                      <h6 class="share-title">Share Now:</h6>
                      <ul class="list-wrap mb-0">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="blog-avatar-wrap">
                <div class="blog-avatar-img">
                  <a href="#"><i class="far fa-check"></i><img src="assets/img/others/avatar.png" alt="img"></a>
                </div>
                <div class="blog-avatar-content">
                  <p>Monty Hython is a Writer at Sarsa and has been covering emerging technologies &
                    venture capital there since 2013. He covers a wide variety of news from early and late stage
                    startups to massive tech behemoths.</p>
                  <h5 class="name">Alison Fiano</h5>
                  <span class="designation">OG Author</span>
                </div>
              </div>
              <div class="blog-prev-next-posts">
                <div class="row">
                  <div class="col-xl-6 col-lg-8 col-md-6">
                    <div class="pn-post-item">
                      <div class="thumb">
                        <a href="blog-details.html"><img src="assets/img/lifestyle/life_style06.jpg" alt="img"></a>
                      </div>
                      <div class="content">
                        <span>Prev Post</span>
                        <h5 class="title tgcommon__hover"><a href="blog-details.html">3 Stocks to Buy and Hold Through
                            the Panic...</a></h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-8 col-md-6">
                    <div class="pn-post-item next-post">
                      <div class="thumb">
                        <a href="blog-details.html"><img src="assets/img/lifestyle/life_style07.jpg" alt="img"></a>
                      </div>
                      <div class="content">
                        <span>Next Post</span>
                        <h5 class="title tgcommon__hover"><a href="blog-details.html">Mood Boards for Product Designers
                            dome...</a></h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <aside class="blog-sidebar">
              <div class="widget sidebar-widget">
                <div class="tgAbout-me">
                  <div class="tgAbout-thumb">
                    <img src="assets/img/others/about_me.png" alt="me">
                  </div>
                  <div class="tgAbout-info">
                    <p class="intro">Hi there, I’m <span>Rosalina D.</span></p>
                    <span class="designation">Content Writer</span>
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
                  <li>
                    <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category01.jpg"
                          alt="img"></a></div>
                    <a href="blog.html">technology</a>
                    <span class="float-right">12</span>
                  </li>
                  <li>
                    <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category02.jpg"
                          alt="img"></a></div>
                    <a href="blog.html">business</a>
                    <span class="float-right">08</span>
                  </li>
                  <li>
                    <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category03.jpg"
                          alt="img"></a></div>
                    <a href="blog.html">fitness</a>
                    <span class="float-right">13</span>
                  </li>
                  <li>
                    <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category04.jpg"
                          alt="img"></a></div>
                    <a href="blog.html">Gadgets</a>
                    <span class="float-right">09</span>
                  </li>
                  <li>
                    <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category05.jpg"
                          alt="img"></a></div>
                    <a href="blog.html">politics</a>
                    <span class="float-right">15</span>
                  </li>
                </ul>
              </div>
              <div class="widget sidebar-widget">
                <div class="sidePost-active">
                  <div class="sidePost__item" data-background="assets/img/category/side_post01.jpg">
                    <div class="sidePost__content">
                      <a href="blog.html" class="tag">Technology</a>
                      <h5 class="title tgcommon__hover"><a href="blog-details.html">Tips for helping to make an your
                          startup a success</a></h5>
                    </div>
                  </div>
                  <div class="sidePost__item" data-background="assets/img/category/side_post02.jpg">
                    <div class="sidePost__content">
                      <a href="blog.html" class="tag">Travel</a>
                      <h5 class="title tgcommon__hover"><a href="blog-details.html">Tips for helping to make an your
                          startup a success</a></h5>
                    </div>
                  </div>
                  <div class="sidePost__item" data-background="assets/img/category/side_post02.jpg">
                    <div class="sidePost__content">
                      <a href="blog.html" class="tag">Gaming</a>
                      <h5 class="title tgcommon__hover"><a href="blog-details.html">Tips for helping to make an your
                          startup a success</a></h5>
                    </div>
                  </div>
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
    --}}
                <!-- blog-details-area-end -->

  </main>
  <!-- main-area-end -->

  <!-- footer-area -->
  {{-- <footer class="footer-area black-bg">
    <div class="container">
      <div class="footer__top-wrap">
        <div class="row">
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
        </div>
      </div>
      <div class="footer__logo-wrap">
        <div class="row align-items-center">
          <div class="col-lg-3 col-md-4">
            <div class="footer__logo logo">
              <a href="index.html"><img src="{{ asset(" assets/img/logo/w_logo.png") }}" alt="Logo"></a>
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
  <div class="footer__copyright">
    <div class="row">
      <div class="col-lg-6">
        <div class="copyright__text">
          <p>Copyright & Design By <span>@Theme_Genix</span> - 2022</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="copyright__menu">
          <ul class="list-wrap">
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Store</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
  </footer> --}}
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
