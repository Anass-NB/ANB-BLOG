@extends('layouts.main')

@section('title')
  Admin Pannel
@endsection
@section('links')
  {{-- FOnt awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  {{-- summernote --}}
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
@endsection

@section('content')


  <!-- Table Start -->
  <div class="container-fluid pt-4 px-4">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <div class="card ">
      <div class="card-body">
        <div class="bg-light rounded h-100 p-4">
          <h6 class="mb-4">All Posts Table</h6>
          <!-- Button trigger modal -->
          <button type="button" id="openModal" class="btn btn-info btn-sm" data-action="{{ route('post.store') }}"
            data-bs-toggle="modal" data-bs-target="#add-posts-modal">
            New Post
          </button>
          <table class="table table-hover table-responsive" id="posts-table">
            <thead>
              <tr>
                <th scope="row">#</th>
                <th>Title</td>
                <th>Summary</td>
                <th>Category</td>
                <th>Author</td>
                <th>Status</td>
                <th>Control</td>
              </tr>
            </thead>
            <tbody id="tbody">
              <td colspan="8">
                <div class="loader"></div>
              </td>


            </tbody>

            <!--Add Modal -->
            <div class="modal fade" id="add-posts-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Post</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form method="post" enctype="multipart/form-data" id="formData">
                    @csrf
                    <div class="modal-body">
                      <div class="bg-light rounded h-100 p-4">

                        <div class="row">
                          <div class="col-4">
                            <div class="form-floating mb-3 ">
                              <input name="title" value="{{ old('title') }}" type="text" class="form-control"
                                id="floatingInput" placeholder="title">
                              <span class="text-danger error-text title_error" style="font-size: 13px"></span>
                              <label for="floatingInput">Post Title</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-floating mb-3 ">

                              <input name="summary" value="{{ old('summary') }}" type="text" class="form-control"
                                id="floatingPassword" placeholder="Summary">
                              <span class="text-danger error-text summary_error" style="font-size: 13px"></span>

                              <label for="floatingPassword">Summary</label>
                            </div>
                          </div>
                          <div class="col-2">
                            <div class="form-floating mb-3 ">
                              <select name="status" class="form-select" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option value="0">0</option>
                                <option value="1">1</option>
                              </select>
                              <span class="text-danger error-text status_error" style="font-size: 13px"></span>
                              <label for="floatingSelect">Status</label>
                            </div>
                          </div>
                          <div class="col-2 ">
                            <div class="form-floating mb-3 ">
                              <select name="author" class="form-select" id="floatingSelect"
                                aria-label="Floating label select example">
                                @foreach ($users as $user)
                                  <option value="{{ $user->id }}">
                                    {{ $user->name }}</option>
                                @endforeach
                              </select>
                              <span class="text-danger error-text author_error" style="font-size: 13px"></span>
                              <label for="floatingSelect">Author</label>
                            </div>
                          </div>

                        </div>
                        <div class="row">

                          <div class="col">
                            <div class="form-floating mb-3  ">

                              <textarea name="content" class="summernote">{{ old('content') }}</textarea>
                              <span class="text-danger error-text content_error" style="font-size: 13px"></span>

                              {{-- <input type="text" name="content" id="your_summernote" class="form-control"
                              style="height: 200px;"> --}}

                            </div>
                            <div class="row">

                              <div class="col-3">
                                <div class="mb-3">
                                  <label for="formFileSm" class="form-label">Photos</label>
                                  <input name="photo" class="form-control form-control-sm" id="formFileSm"
                                    type="file">
                                  <span class="text-danger error-text photo_error" style="font-size: 13px"></span>

                                </div>
                              </div>
                              <div class="col-3">
                                <div class="form-floating mb-3 ">
                                  <select name="category" class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    @foreach ($categories as $category)
                                      <option value="{{ $category->id }}">
                                        {{ $category->name }}</option>
                                    @endforeach
                                  </select>
                                  <label for="floatingSelect">Category</label>
                                </div>
                              </div>

                            </div>

                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" id="btn-create" class="btn btn-primary">Save
                            changes</button>
                        </div>
                      </div>

                  </form>
                </div>
              </div>
            </div>

          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Table End -->
@endsection

@section('scripts')
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  <script src="{{ asset('js/crud.js') }}"></script>
  {{-- summernote scripts --}}
  <script src="{{ asset('assets/js/summerdiv-custom.js') }}"></script>
  <script>
    $(document).ready(function() {
      $(".summernote").summernote({
        height: 200,
      });
    });
  </script>
  {{-- summernote scripts --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
@endsection
