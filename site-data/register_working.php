<?php

  $servername = '';
  $username = '';
  $password = '';
  $dbname = '';
    
    $connect = mysqli_connect($servername, $username, $password, $dbname);
    if ($connect->connect_error) {
      die("Database connection failed: " . $connect->connect_error);
    }

if(isset($_POST['submit'])){
  $inputFirstName = $_POST['inputFirstName'];
  $inputLastName = $_POST['inputLastName'];
  $inputUsername = $_POST['inputUsername'];
  $inputEmail = $_POST['inputEmail'];
  $inputPassword = crypt(trim($_POST['inputPassword']), 'Salt');
  
  $query = "INSERT INTO  `Accounts` (`ID`, `First Name`, `Last Name`, `Username`, `Email`, `Password`) 
  VALUES (NULL, '$inputFirstName', '$inputLastName', '$inputUsername', '$inputEmail', '$inputPassword')";


  if (!mysqli_query($connect, $query)) {
    die('An error has occured submitting.');
  } else {
    echo "Submitted successfully, bringing you back to the homepage...";
  }

  header ("refresh:1; url=index.html");
}

?>