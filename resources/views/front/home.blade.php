@extends('layouts.front.index')

@section('title')
  ANB-BLOG - PHP and Laravel Framework
@endsection
@section('content')
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
                  <li class="breadcrumb-item active" aria-current="page">
                    Posts
                  </li>
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
                    <a href="{{ route('posts.show', $post->slug) }}">
                      <img src="{{ asset('photos/posts/' . $post->title . '/' . $post->photo . '') }}" alt="img">
                    </a>
                  </div>
                  <div class="latest__post-content">
                    <ul class="tgbanner__content-meta list-wrap">
                      <li class="category"><a href="#">{{ $post->category->name }}</a></li>
                      <li><span class="by">By</span> <a href="#">{{ $post->author->name }}</a></li>
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
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
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
                          <a href="#">
                            <img src="{{ asset('categories/logos/' . $category->logo . '') }}" alt="category logo">
                          </a>
                        </div>
                        <a href="#">{{ $category->name }}</a>
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
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!-- blog-details-area-end -->
  </main>
  <!-- main-area-end -->
@endsection
