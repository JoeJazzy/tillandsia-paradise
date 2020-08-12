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
            <li class="nav-item">
              <a class="nav-link" href="welcome.php">Home</a>
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
            <li class="nav-item active">
              <a class="nav-link" href="database.php">Database <span class="sr-only">(current)</span></a>
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
<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">Add Plant</h2>
    <p class="lead">Once you submit your entry, it will be pushed to our database and await approval
      from an administrator. Thank you for contributing to our database!
    </p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" src="images/ionantha.jpg" alt="Generic placeholder image">
  </div>
</div>

<hr class="featurette-divider">

    <meta charset="UTF-8">
    <title>Add Plant</title>
    <style type="text/css">
        .wrapper{ width: 350px; padding: 20px; }
    </style>

    <div class="wrapper">
        <h2>Plant Information</h2>
        <p>Please fill out this form.</p>
        <form action="contribute-send.php" method="POST">
            <div class="form-group">
                <label>Plant Name</label>
                <input type="text" name="name" class="form-control">
            </div>    
            <div class="form-group">
                <label>Scientific Name</label>
                <input type="text" name="scientificname" class="form-control">
            </div>

            <div class="form-group">
                <label>Plant Location</label>
                <input type="text" name="location" class="form-control">
            </div>


            <div class="form-group">
                <label>Size</label>
                <input type="text" name="size" class="form-control">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" type="text" class="form-control" cols="80"></textarea>
            </div>

            <div class="form-group">
                <label>Plant Care</label>
                <textarea name="care" type="text" class="form-control" cols="80"></textarea>
            </div>

            <div class="form-group">
                <label>Additional Notes</label>
                <textarea name="notes" type="text" class="form-control" cols="80"></textarea>
            </div>
            <p>Please note, submitting images is currently not working. If you would like to, please
                feel free to leave the admins a link to the image in the 'Plant Notes' section of this form.</p>
            <!-- <div class="form-group">
                <label>Image</label>
                <input type="file" name="image">
            </div> -->
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </form>
    </div>    


    <!-- START THE FEATURETTES -->

<hr class="featurette-divider">




<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>