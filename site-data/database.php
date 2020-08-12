<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    // header("location: database.php");
    // exit;
}
?>

<?php
	function display_db_table( $tablename, $connect) {
		$query = "SELECT * FROM $tablename";
		display_db_query( $query, $connect, True, 2);
	}

	function get_max_db_table( $tablename, $connect, $maxsearch) {
		$query = "SELECT Max($maxsearch) FROM $tablename";
		$result = mysqli_query( $connect, $query);
		while($row = $result->fetch_assoc()) {
			$columns = array_keys($row);
			foreach( $columns as $column ) {
				$max = $row[$column];
				return($max);
			}
		}
	}

	function display_db_query( $query, $connect, $Head, $Border ) {
		$result = mysqli_query( $connect, $query);
		print ("<center>");
		print( "<table border=$Border>\n" );
		If($Head){
			print( "<tr>\n" );
			while ($fieldinfo=mysqli_fetch_field($result))
			printf("<td><b>$fieldinfo->name</b></td>");
			print( "</tr>\n" );
		}
		while( $row = $result->fetch_assoc() ) {
			$columns = array_keys($row);
			foreach( $columns as $column ) {
				print( "<td>{$row[$column]}</td>" );
			}
			print( "</tr>\n" );
		}
		print( "</table>\n" );
		print ("</center>");
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
        <a class="navbar-brand" href="index.html">Tillandsia Paradise</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="care.html">Care Guide</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="stats.html">Statistics</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="database.php">Database <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Accounts</a>
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

    <!-- <h2>PLANTS</h2>

    <?php
    $servername = '';
    $username = '';
    $password = '';
    $dbname = '';
      
    $connect = mysqli_connect($servername, $username, $password, $dbname);
    $query = "SELECT name, location, notes FROM `plants`
    where approved=1";
    $nameQuery = "SELECT name FROM `plants`";
    display_db_query($query, $connect, True, 2);
    
    ?>
    <a class="nav-link" href="Xerographica.php">Xerographica</a>
 -->
 <div class="container marketing">
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Plants in Database</h2>
            <p class="lead"><a href="Brachycaulos.php">Brachycaulos</a></p>
            <p class="lead"><a href="Bulbosa.php">Bulbosa</a></p>
            <p class="lead"><a href="Caput Medusae.php">Caput Medusae</a></p>
            <p class="lead"><a href="Ionantha.php">Ionantha</a></p>
            <p class="lead"><a href="Japanese Tree Lilac.php">Japanese Tree Lilac</a></p>
            <p class="lead"><a href="Xerographica.php">Xerographica</a></p>


          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="images/img03.jpg" alt="Generic placeholder image">
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