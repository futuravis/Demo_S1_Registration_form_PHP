<?php
require_once('dbConnection.php');

// Getting the value from form:::::
$email = $_REQUEST['login_email'];
$password = $_REQUEST['login_password'];
// printf("The variables are %s. ",$email,$password);



// Validate and Insert the value in DB::::::::
$query = "SELECT * FROM Slt_users where email='$email' and password = '$password'";
$results = mysqli_query($conn,$query);
if(mysqli_num_rows($results)>0)
{
  header("Location: http://localhost/siva");
  exit;

    // echo "You are logged in successfully";
}
else
{
    echo $results;
}
?>
