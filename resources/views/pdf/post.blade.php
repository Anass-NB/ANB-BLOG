<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $post->title }}</title>

  <style>
    .head {
      display: flex;
      justify-content: space-between;
      align-items: center;

    }

    img {
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="head">
    <h1 class="font-go">{{ $post->title }}</h1>
    <p class="font-go">{{ $post->created_at->format('Y-m-d') }}</p>
  </div>
  <hr>
  <p class="text-lead">
    {{ $post->summary }}</p>
  <br><br><br>
  {{-- <img src="{{ asset('photos/posts/' . $post->title . '/' . $post->photo . '') }}" alt="post photo"> --}}
  <br>
  <?php echo " $post->content "; ?>
  <hr>


  <div style="text-align: center;color: #607d8b;font-size: 18px;">
    <i>{{ $post->author->name }}</i>
  </div>

</body>

</html>
