@extends('layouts.front.index')

@section('title')
  BLOGVEL - {{ $post->title }}
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
                  <li class="breadcrumb-item"><a href="#">Posts</a></li>
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
                <li class="category"><a href="#">{{ $post->category->name }}</a></li>
                <li><span class="by">By</span> <a href="#">{{ $post->author->name }}</a></li>
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
  </main>
  <!-- main-area-end -->
@endsection
