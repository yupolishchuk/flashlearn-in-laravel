<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Home page</h1>
  <a href="/learn/5">Start Learning</a>
  <br>
  <a href="/flashcards/create">Create Flashlard</a>
  <br>
  <h3>Categories</h3>
  <ul>
  @foreach($categories as $category)
    <li>{{ $category->name }} <a href="/learn/{{ $category->id }}">link</a></li>
  @endforeach
  </ul>
</body>
</html>