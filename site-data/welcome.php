<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Tillandsia Paradise</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="welcome.php">Tillandsia Paradise</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="care.php">Care Guide</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="stats.php">Statistics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="database_in.php">Database</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="logout.php"><?php echo htmlspecialchars($_SESSION["username"]); ?> - logout</a>
            </li>
          </ul>
          <!-- <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
      </nav>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Tillandsia Paradise</h1>
          <p>Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="database_in.php" class="btn btn-primary my-2">View Database</a>
            <a href="contribute.php" class="btn btn-primary my-2">Submit to Database</a>
          </p>
        </div>
      </section>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images/img03.jpg" alt="Xerographica">
              <div class="card-body">
                <a href="care.html"><h2>Care Guide</h2></a>
                <p class="card-text">Learn some tips and best-practices in caring for your
                  airplants!
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <!-- <div class="btn-group">
                    <a href="care.html" class="btn btn-sm btn-outline-secondary">View</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images/group.jpg" alt="Xerographica">
              <div class="card-body">
                <a href="stats.html"><h2>Statistics</h2></a>
                <p class="card-text">View some statistical data about our plant database!</p>
                <div class="d-flex justify-content-between align-items-center">
                  <!-- <div class="btn-group">
                    <a href="stats.html" class="btn btn-sm btn-outline-secondary">View</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="images/small.jpg" alt="Xerographica">
              <div class="card-body">
                <a href="login.php"><h2>Accounts</h2></a>
                <p class="card-text"> Sign-in or register an account for our website!
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <!-- <div class="btn-group">
                    <a href="accounts.html" class="btn btn-sm btn-outline-secondary">View</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">What is an airplant/tillandsia?</h2>
            <p class="lead">While the proper name for these plants is Tillandsia, they are often
              called airplants thanks to them getting most nutrients by absorbing the air around them.
              They're low-maintanance plants and usually require water only once or twice a week. 
              They grow without roots or soil, allowing people to display them in a ton of different 
              containers.
            </p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="images/1.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">What is this website?</h2>
            <p class="lead">This was created for my 2020 senior project at PSU. I wanted to create
              a website for people new to airplants that provided a guide on caring for them as well as
              a database of plants that the community can add to. 
            </p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="images/2.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Where can I get some of these plants?</h2>
            <p class="lead">While I'm not affiliated with any of the links below, these are some
              websites that I have used to order my plants:
              <a href="https://www.airplantsupplyco.com/"><p>Airplant Supply Co<p></a>
              <a href="https://airplanthub.com/"><p>Airplanthub<p></a>
            </p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="images/3.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2020 Joseph Chase, made with Bootstrap &middot; <a href="#">Contact</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>