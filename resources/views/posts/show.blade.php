<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Document</title>
</head>
<body>
  <div class="card" style="width: 18rem;">
   <div class="card-body">
     <p>{{$post->id}}</p>
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->body}}</p>
      <img class="card-img-top" src="{{$post->img}}" alt="{{$post->title}}">
      <p class="card-text"><small>{{$post->author}}</small>
      <small>{{$post->created_at}}</small></p>
   </div>
  </div>
</body>
</html>
