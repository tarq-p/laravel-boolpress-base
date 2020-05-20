<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
<form action="{{route('posts.store')}}" method="POST">
  @csrf
  @method('POST')
    <div>
      <label for="title">Titolo</label>
      <input type="text" placeholder="Inserisci i titolo" name="title">
    </div>
    <div>
      <label for="title">Testo</label>
      <textarea name="body" cols="30" rows="10">Testo</textarea>
    </div>
    <div>
      <label for="title">Autore</label>
      <input type="text" placeholder="Autore" name="author">
    </div>
    {{-- <div>
      <label for="title">Location</label>
      <input type="text" placeholder="Posizione" name="location">
    </div> --}}
    <div>
      <label for="title">Immagine</label>
      <input type="text" placeholder="Inserisci path" name="img">
    </div>
    <div>
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
