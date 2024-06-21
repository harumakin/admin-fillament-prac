<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>News</title>
</head>

<body class="antialiased">
  <div class="container">
    <h1>News Post</h1>
    <ul>
      @foreach ($posts as $post)
      <li>
        <p>{{ $post->title }}</p>
        <div>
          {{ $post->body }}
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</body>

</html>
