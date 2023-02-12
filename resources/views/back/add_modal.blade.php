{{-- @foreach ($posts as $post)
<tr id="post-{{ $post->id }}">
  <td scope="col">{{ $loop->iteration }}</td>
  <td scope="col">{{ $post->title }}</td>
  <td scope="col">{{ $post->summary }}</td>
  <td scope="col">{{ $post->category->name }}</td>
  <td scope="col">{{ $post->author->name }}</td>
  @if ($post->status == 1)
  <td class="">
    <span class="badge text-bg-success">published</span>
  </td>
  @else
  <td class="">
    <span class="badge text-bg-danger">Not Active</span>
  </td>
  @endif

  <td>
    <div class="dropdown dropup">
      <button class="btn btn-outline-danger btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        Action
      </button>
      <ul class="dropdown-menu">
        <li class="text-sm bg-success text-white text-lead"><a class="dropdown-item" href="">Show</a></li>
        <li class="my-2 text-sm bg-warning text-white text-lead">
          <button type="button" class="bg-warning" data-bs-toggle="modal" data-bs-target="#edit-{{ $post->id }}">
            Edit Post
          </button>
        </li>
        <li class="text-sm bg-danger text-white text-lead">
          <button class="dropdown-item" type="submit">Delete</button>
        </li>
      </ul>
    </div>
  </td>
</tr>
<!--edit Modal -->
<div class="modal fade" id="edit-{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
      <div class="modal-body">
        <form action="{{ route('post.update') }}" method="post" id="edit-post-form">
          @csrf
          <div class="row">
            <div class="col-4">
              <div class="form-floating mb-3 ">
                <input type="hidden" name="id" value="{{ $post->id }}">
                <input name="title" value="{{ $post->title }}" type="text" class="form-control" id="floatingInput"
                  placeholder="title">

                <label for="floatingInput">Post Title</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-floating mb-3 ">

                <input name="summary" value="{{ $post->summary }}" type="text" class="form-control"
                  id="floatingPassword" placeholder="Summary">


                <label for="floatingPassword">Summary</label>
              </div>
            </div>
            <div class="col-2">
              <div class="form-floating mb-3 ">
                <select name="status" class="form-select" id="floatingSelect"
                  aria-label="Floating label select example">
                  @if ($post->status == 1)
                  <option selected value="1">1</option>
                  <option value="0">0</option>
                  @else
                  <option value="1">1</option>
                  <option selected value="0">0</option>
                  @endif
                </select>
                @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="floatingSelect">Status</label>
              </div>
            </div>
            <div class="col-2 ">
              <div class="form-floating mb-3 ">
                <select name="author" class="form-select" id="floatingSelect"
                  aria-label="Floating label select example">
                  @foreach ($users as $user)
                  <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endforeach
                </select>

                <label for="floatingSelect">Author</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-floating mb-3  ">
                <textarea name="content" class="summernote">{{ $post->content }}</textarea>
              </div>
              <div class="row">

                <div class="col-3">
                  <div class="mb-3">
                    <label for="formFileSm" class="form-label">Photos</label>
                    <input name="photo" class="form-control form-control-sm" id="formFileSm" type="file">
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-floating mb-3 ">
                    <select name="category" class="form-select" id="floatingSelect"
                      aria-label="Floating label select example">
                      @foreach ($categories as $category)
                      @if ($post->category_id == $category->id)
                      <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                      @else
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endif
                      @endforeach
                    </select>
                    <label for="floatingSelect">Category</label>
                  </div>
                </div>

              </div>

            </div>

          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Post</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach --}}
