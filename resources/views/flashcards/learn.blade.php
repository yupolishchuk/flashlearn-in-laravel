
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Flashlearn</title>

    <!-- Bootstrap core CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/public/css/cover.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Flashlearn</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Contact</a>
              </nav>
            </div>
          </div>
          <div id="flashcard">
            <div class="inner cover">
              <h1 class="cover-heading">Card 1 [type]</h1>
              <p class="lead"></p>
              <p id="question" class="lead"></p>
              <p style="display: none" id="answer" class="lead"></p>
              <p class="lead">
                <button id="flip-button" class="btn btn-lg btn-secondary">Flip</button>
                <button id="next-button" class="btn btn-lg btn-secondary">Next</button>
              </p>  
            </div>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="https://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="/public/js/jquery.slim.min.js"></script> -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
    </script><!--Скачай нормальный jQuery -->
    <script src="/public/js/tether.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
    <script>

      $(document).ready(function() {
        // Show/hide answer
        $('#flip-button').on('click', function() {
          $('#answer').toggle();
        });
        
        // получаем json всех флешкарт из категории
        $.ajax({
          method: "GET",
          url: "/flashcards/category/list/1",
          cache: false})
          .done(function(msg) {
            parseData(msg); 
          });

        var currentCardKey;
        var flashcards;
        var availableCardKeys;

        function parseData(msg) {
          flashcards = msg.flashcards; // objects
          availableCardKeys = Object.keys(flashcards); // array
          var firstCardKey = giveFirstCardKey(flashcards, availableCardKeys);
          showCard(flashcards[firstCardKey]); // передаем key первой карты (убедись, он может быть != 0)
        }

        function giveFirstCardKey(flashcards, availableCardKeys) {
            for (var a in flashcards) {
                currentCardKey = a;
                return a;
            }
        }

        // по клику показываем следующую карту
        $('#next-button').on('click', function() {
          var nextCardKey = giveNextCardKey(availableCardKeys);
          console.log(nextCardKey);
          currentCardKey = nextCardKey;
          if (nextCardKey) {
            showCard(flashcards[nextCardKey]);
          } else {
            alert('End, here must be flash messege');
          }
        });

        function giveNextCardKey(availableCardKeys) {
          for (var i in flashcards) {
            //console.log(i);
            if (i > currentCardKey) {
              return i;
            }
          }
          
          // if (currentCardKey !== 'undefined') {
          //     // берем ключ текущей currentCardKey
          //     // итерируемся по availableCardKeys доходим до текущей
          //     // возвращаем следующий за ним 
          //   for (var i = 0; i < availableCardKeys.length; i++) {
          //       console.log(i);
          //       console.log(flashcards[availableCardKeys[i]]); 
          //   }
          // }   
        //     return cardKey;
        }

        function showCard(flashcard) {
          $('#flashcard')
            .find('#question').text(flashcard.question)
            .end() //тут поднимаемся к $('#flashcard')
            .find('#answer').text(flashcard.answer);  
        }
        
      });

    </script>
  </body>
</html>
