{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    @foreach ($posts as $post)
        <h2>{{$post->title}}</h2>
        <h4>{{$post->author}}</h4>
        <p>{{$post->body}}</p>
        <small>{{$post->created_at}}</small>
    @endforeach
</body>
</html> --}}


@foreach ($posts as $key => $post)
  <div class="card" style="width: 18rem;">
    <img class="card-img" src="{{$post->src}}" alt="">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->body}}</p>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button class="btn btn-primary" type="button" name="button"><a href="{{ route('posts.edit', $post->id) }}">Mofidica</a></button>
    </div>
    <div class="col-sm-10">
      <button class="btn btn-primary" type="button" name="button"><a href="{{ route('posts.show', $post->id) }}">Visualizza</a></button>
    </div>
    <div class="col-sm-10">
      <form method="POST" action="{{route('posts.destroy', $post->id)}}">
        @method('DELETE')
        @csrf
        <button class="btn btn-primary" type="submit" name="button">Elimina</button>
      </form>
    </div>
  </div>
@endforeach
@foreach ($posts as $key => $post)
  <div class="card" style="width: 18rem;">
    <img class="card-img" src="{{$post->src}}" alt="">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->body}}</p>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button class="btn btn-primary" type="button" name="button"><a href="{{ route('posts.edit', $post->id) }}">Mofidica</a></button>
    </div>
    <div class="col-sm-10">
      <button class="btn btn-primary" type="button" name="button"><a href="{{ route('posts.show', $post->id) }}">Visualizza</a></button>
    </div>
    <div class="col-sm-10">
      <form method="POST" action="{{route('posts.destroy', $post->id)}}">
        @method('DELETE')
        @csrf
        <button class="btn btn-primary" type="submit" name="button">Elimina</button>
      </form>
    </div>
  </div>
@endforeach
