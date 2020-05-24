<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="{{route('posts.update', $post->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="">
        <label for="title">Titolo</label>
        <input type="text" placeholder="Inserisci i titolo" name="title">
      </div>
      <div class="">
        <label for="title">Testo</label>
        <textarea name="body" cols="30" rows="10">Inserisci il testo</textarea>
      </div>
      <div class="">
        <label for="title">Autore</label>
        <input type="text" placeholder="Inserisci il nome dell'autore" name="author">
      </div>
      <div class="">
        <label for="title">Immagine</label>
        <input type="text" placeholder="Inserisci il path" name="src">
      </div>
      <div class="">
        <label for="not-published">Non Pubblicato</label>
        <input type="radio" id="not-published" name="published" value="0">
        <label for="published">Pubblicato</label>
        <input type="radio" id="published" name="published" value="1">
      </div>
      <div>
        <input type="submit" value="Salva">
      </div>
    </form>
  </body>
</html>
