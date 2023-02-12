<div>

  @if ($show_table)
    <div class="card ">
      <div class="card-body">
        <div class="bg-light rounded h-100 p-4">
          <h6 class="mb-4">All Categories Table</h6>
          <button class="btn btn-sm btn-primary" wire:click="addCategoy">Add Category</button>
          <table class="table table-hover table-responsive" id="categories-table">
            <thead>
              <tr>
                <th scope="row">#</th>
                <th>Name
                  </td>
                <th>description
                  </td>
                <th>logo
                  </td>
              </tr>

            </thead>
            <tbody>
              @foreach ($categories as $category)
                <tr>
                  <td scope="col">{{ $loop->iteration }}</td>
                  <td scope="col">{{ $category->description }}</td>
                  <td scope="col">{{ $category->name }}</td>
                  <td scope="col"><img style="height: 100px;width: 200px"
                      src="{{ asset('categories/logos/' . $category->logo . '') }}"alt="logo"></td>

                  <td>
                    <div class="dropdown dropup">
                      <button class="btn btn-outline-danger btn-sm dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                      </button>
                      <ul class="dropdown-menu">
                        <li class="text-sm bg-success text-white text-lead"><a class="dropdown-item"
                            href="">Show</a>
                        </li>
                        <li class="my-2 text-sm bg-warning text-white text-lead"><a class="dropdown-item"
                            href="#">Edit</a></li>
                        <li class="text-sm bg-danger text-white text-lead">
                          <form action="{{ route('category.destroy') }}" id="delete-category-form" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $category->id }}">
                            <button class="dropdown-item" type="submit">Delete</button>
                          </form>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  @else
    <div>
      <form wire:submit.prevent='submit' method="post" enctype="multipart/form-data" id="add-category-form">
        @csrf

        <div class="bg-light rounded h-100 p-4">

          <div class="row">
            <div class="col">
              <div class="form-floating mb-3 ">
                <input wire:model="name" type="text" class="form-control" id="floatingInput" placeholder="name">

                <label for="floatingInput">Category Title</label>
                @error('name')
                  <span class="text-danger alert error">{{ $message }}</span>
                @enderror

              </div>
            </div>
            <div class="col">
              <div class="form-floating mb-3 ">

                <input wire:model="description" type="text" class="form-control" id="floatingPassword"
                  placeholder="description">
                <label for="floatingPassword">Description</label>
                @error('description')
                  <span class="text-danger alert  error">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col">

              <div class="mb-3">
                <p class="text-sm text-success">Recommended size for logo :120X120</p>
                <label for="formFileSm" class="form-label">Logo</label>
                <input wire:model="logo" class="form-control form-control-sm" id="formFileSm" type="file">
                @error('logo')
                  <span class="error text-danger alert ">{{ $message }}</span>
                @enderror

              </div>

            </div>

          </div>

          <div class="modal-footer">
            <button wire:click="showTable" class="btn btn-sm btn-secondary">Close</button>
            <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
          </div>
      </form>
    </div>

  @endif

</div>
