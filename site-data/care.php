<?php
// Initialize the session
session_start();
 
//Check if the user is logged in, if not then redirect him to login page
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
            <li class="nav-item">
              <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="care.php">Care Guide <span class="sr-only">(current)</span></a>
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


    <div class="container marketing">


<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">Airplant Care</h2>
    <br>


    <h2><span class="text-muted">How do they grow?</span></h2>
    <p class="lead">Airplants grow without roots or soil. They absorb nutrients through
      air, light, and water. They do best in areas with good air circulation.
    </p>

    <h2><span class="text-muted">How should I water them?</span></h2>
    <p class="lead">Airplants should be watered at least once or twice a week.
      The easiest way to water all of your plants at once is to fill a container with
      lukewarm water and submerge all of your plants in that for about 30 minutes.
      The most important part is to make sure that they dry fully afterwards, so be sure to
      hang/turn the plants upside down to prevent water from staying trapped in the plant, and 
      be sure they're drying in an area with a lot of light and air circulation.
      If a plant is returned while still having water inside of it, it will rot the plant.
    </p>

  </div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" src="images/bulbosa.jpg" alt="Generic placeholder image">
  </div>
</div>

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <p class="lead">

    <h2><span class="text-muted">Do they need light?</span></h2>
    <p class="lead">Most airplants prefer indirect and bright sunlight. They will do
      best in areas with a lot of natural light, and occasional direct morning sunlight is okay.
      They also do well in florescent lighting, making them perfect for large office-spaces.
    </p>

    <h2><span class="text-muted">How long will they last?</span></h2>
    <p class="lead">It will depend on the plant! For every airplant, once they flower 
      they will begin to die. Oftentimes, they will develop pups that can be removed from the parent
      plant once they're about a third of the parent's size and grown as a new airplant!
    </p>
  </div>
  <div class="col-md-5 order-md-1">
    <img class="featurette-image img-fluid mx-auto" src="images/xerographica.png" alt="Generic placeholder image">
  </div>
</div>


</div>

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