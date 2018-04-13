<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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
          <div class="masthead">
            <div class="inner">
              <h3 class="masthead-brand">Flashlearn</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link" href="#">Log out</a>
              </nav>
            </div>
          </div>
          <div id="flashcard">
            <div class="inner cover">
              <p class="lead">
                <div class="btn-group">
                <button type="button" class="btn btn-primary">General</button>
                <button type="button" class="btn btn-secondaryy">Code</button>
                </div>
              </p>
              <hr>
              <div class="row question-answer">
                  <p id="question" class="lead">
                    {{ $flashcard->question }}
                  </p>
                  <p id="answer" style="display: none" class="lead">
                    {{ $flashcard->answer }}
                  </p>
              </div>
              <p class="lead">
                <hr>
                <div class="row">
                  <div class="col-md-3">
                    <button id="edit-button" class="btn btn-info">Edit</button>
                  </div>
                  <div class="col-md-2">
                    <button id="flip-button" class="btn btn-primary">Flip Card</button>
                  </div>
                  <div class="col-md-2">
                    <button id="know-button" class="btn btn-success">Know It</button>
                  </div>
                  @if($prev)
                    <div class="col-md-2">
                      <a href="{{ URL::to( '/learn', $prev->id) }}" id="prev-button" class="btn btn-primary">Prew</a>
                    </div>
                  @endif
                  @if($next)
                    <div class="col-md-3">
                      <a href="{{ URL::to( '/learn', $next->id ) }}" id="next-button" class="btn btn-primary">Next</a>
                    </div>
                  @endif
                </div>
              </p>  
            </div>
          </div>
          <div class="mastfoot">
            <div class="inner">
              <p>Made by</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="/public/js/jquery-3.3.1.js"></script>
    <script>
      // Flip card
      $('#flip-button').on('click', function(){
        $('.question-answer p').toggle();
      });

      $('#know-button').on('click', function(){
        $.ajax({
          method: "GET",
          url: "/learn/known/{{ $flashcard->id }}"
        });
      })


    </script>
  </body>
</html>
