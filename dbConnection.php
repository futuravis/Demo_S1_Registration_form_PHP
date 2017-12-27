<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "Avis";
  // Create connection
  $conn = new mysqli($servername, $username, $password,$dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }



//Sample select qurey:::::::::::::::
  // $query  = "SELECT * FROM Slt_users";
  // $result = mysqli_query($conn, $query);
  // if (!$result) {
  //   die('Error: ' . mysqli_error($conn));
  // }else {
  //   print_r ($result);
  // }
  // $conn->close();




?>
