<?php
$servername = '';
$username = '';
$password = '';
$dbname = '';
  
  $connect = mysqli_connect($servername, $username, $password, $dbname);
  if ($connect->connect_error) {
    die("Database connection failed: " . $connect->connect_error);
  }

 
// Processing form data when form is submitted
if ($connect->connect_error) {
    die("Database connection failed: " . $connect->connect_error);
  }

if(isset($_POST['submit'])){
$name = $_POST['name'];
$location = $_POST['location'];
$scientificname = $_POST['scientificname'];
$size = $_POST['size'];
$description = ($_POST['description']);
$care = $_POST['care'];
$notes = $_POST['notes'];

$query = "INSERT INTO  `plants` (`name`, `location`, `scientific_name`, `size`, `description`, `care`, `notes`, `approved`) 
VALUES ('$name', '$location', '$scientificname', '$size', '$description', '$care', '$notes', '0')";


if (!mysqli_query($connect, $query)) {
  die('An error has occured submitting.');
  header ("refresh:2; url=contribute.php");
} else {
  echo "Thank you for your submission! Returning you to the submit page...";
}
header ("refresh:2; url=contribute.php");
}
?>