<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Flashlearn</title>
  <link href="/public/css/minimalInterface.css" rel="stylesheet">
</head>
<body>
  <h3>Question</h3>
  {{ $flashcard->id }}
  {{ $flashcard->question }}
  <div id="answer" style="display: none">
    <hr>
    <h3>Answer</h3>
  {{ $flashcard->answer }}
  </div>
  
  
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

  <div class="footer">
    <hr>
    <button id="flip-btn">Flip Card</button>
    <button>I know it</button>
    <button>Prev</button>
    <button>Next</button>
  </div>

  <script src="/public/js/jquery-3.3.1.js"></script>
  <script>
    $flipBtn = $('#flip-btn');
    $answer = $('#answer');

    $flipBtn.on('click', function showAnswer() {
      if ($answer.css('display') == 'none') {
        $answer.show();
      } else {
        $answer.hide();
      }
    });

  </script>
</body>
</html>