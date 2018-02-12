
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

          <form method="POST" action="/flashcards">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="question">Question:</label>
              <textarea rows="5" class="form-control" id="question" name="question"></textarea>
            </div>

            <div class="form-group">
              <label for="question">Answer:</label>
              <textarea rows="10" class="form-control" id="answer" name="answer"></textarea>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>

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
    <script src="/public/js/jquery.slim.min.js"></script>
    <script src="/public/js/tether.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
    <script>
      alert('hi!');
    </script>
  </body>
</html>
