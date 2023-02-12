@extends('layouts.main')

@section('title')
Categories
@endsection
@section('links')
@livewireStyles
{{-- FOnt awesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
  integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
{{-- summernote --}}
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
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
  <div class="category-livewire">
    @livewire('category')
  </div>
</div>
<!-- Table End -->
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script src="{{ asset('assets/js/summerdiv-custom.js') }}"></script>
<script>
  $(document).ready(function() {
      $(".summernote").summernote({
        height: 200,
      });
    });
</script>
{{-- <script>
  $(document).ready(function() {

      var table = '#posts-table';
      var modal = '#add-posts-modal';
      var form = '#add-post-form';

      $(form).on('submit', function(event) {
        event.preventDefault();
        console.log("hellllo");
        var url = $(this).attr('data-action');
        console.log(url);

        $.ajax({
          url: url,
          method: 'POST',
          data: new FormData(this),
          dataType: 'JSON',
          contentType: false,
          cache: false,
          processData: false,
          success: function(response) {
            // var row = '<tr>';
            // row += '<td scope="col">' + $loop->iteration + '</td>';
            // row += '<td>' + response.title + '</td>';
            // row += '<td>' + response.summary + '</td>';
            // row += '<td>' + response.summary + '</td>';
            // row += '<td>' + response.summary + '</td>';
            // row += '</tr>';

            // $(table).find('tbody').prepend(row);
            if (response.code == 200) {
              console.log("OKK");
              $(modal).modal('hide');
            }

            $(form).trigger("reset");
            console.log("post addeed ");
          },
          error: function(response) {}
        });
      });

    });
</script> --}}
@livewireScripts
@endsection