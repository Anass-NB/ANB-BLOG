<div class="sidebar pe-4 pb-3">
  <nav class="navbar bg-light navbar-light">
    <a href="index.html" class="navbar-brand mx-4 mb-3 d-flex">
      <img style="height: 30px;width:30px;margin-right: 6px;" src="{{ asset('assets/img/favicon.png') }}" alt="logo">
      <h3 class="text-primary">
        BLOGVEL
      </h3>
    </a>
    <div class="d-flex align-items-center ms-4 mb-4">
      <div class="position-relative">
        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
      </div>
      <div class="ms-3">
        <h6 class="mb-0">{{ auth()->user()->name }}</h6>
        <span>Admin</span>
      </div>
    </div>
    <div class="navbar-nav w-100">
      <a href="{{ route('posts.index') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Posts</a>
      <a href="{{ route('categories.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Categories</a>
      <a href="#" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Authors</a>


    </div>
  </nav>
</div>
