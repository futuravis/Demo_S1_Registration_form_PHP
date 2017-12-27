<?php
require_once('dbConnection.php');

//Getting the value from form:::::
$deleteAccount_email = $_REQUEST['deleteAccount_email'];
$deleteAccount_password = $_REQUEST['deleteAccount_password'];
// printf("The variables are ForgotPassword_email %s. ",$deleteAccount_email);
// printf("The variables are old_password %s. ",$deleteAccount_password);

//Validate and Insert the value in DB::::::::
$query = "SELECT * FROM Slt_users where email='$deleteAccount_email' and password = '$deleteAccount_password'";
$results = mysqli_query($conn,$query);
if(mysqli_num_rows($results)>0)
{
  while($row = mysqli_fetch_assoc($results))
  {
    $Id = $row['Id'];
    // printf("The id is %s. ",$Id);
    $query = "DELETE FROM Slt_users WHERE Id='$Id'";
    $results = mysqli_query($conn,$query);
    if($results){
      echo "Record deleted successfully";
    }else{
      echo "Error updating record";
    }
  }
}
else
{
  echo "Enter the valid email/password";
}

?>
