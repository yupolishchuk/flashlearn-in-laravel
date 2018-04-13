<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h3>Question</h3>
  {{ $flashcard->id }}
  {{ $flashcard->question }}
  <h3>Answer</h3>
  {{ $flashcard->answer }}
  
  @if($prev)
  <h4>Prev</h4>
  {{ $prev->id }}
  {{ $prev->question }}
  @endif

  @if($next)
  <h4>Next</h4>
  {{ $next->id }}
  {{ $next->question }}
  @endif

</body>
</html>