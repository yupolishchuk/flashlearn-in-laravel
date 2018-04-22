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

  <div class="footer">
    <hr>
    <button id="flip-btn">Flip Card</button>
    <button id="know-btn">I know it</button>

    @if($prev)
      <a href="/learn/{{ $flashcard->category_id }}/{{ $prev->id }}">
        <button>Prev</button>
      </a>
    @endif

    @if($next)
      <a href="/learn/{{ $flashcard->category_id }}/{{ $next->id }}">
        <button>Next</button>
      </a>
    @endif
  </div>

  <script src="/public/js/jquery-3.3.1.js"></script>
  <script>
    $flipBtn = $('#flip-btn');
    $knowBtn = $('#know-btn');
    $answer = $('#answer');

    $flipBtn.on('click', function showAnswer() {
      if ($answer.css('display') == 'none') {
        $answer.show();
      } else {
        $answer.hide();
      }
    });

    $knowBtn.on('click', function setKnow() {
      $.ajax({
          method: "GET",
          url: "/learn/known/{{ $flashcard->id }}"
        });
    });

  </script>
</body>
</html>