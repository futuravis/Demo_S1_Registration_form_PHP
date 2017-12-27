<?php
require_once('dbConnection.php');
//Getting the value from form:::::
$email = $_REQUEST['ForgotPassword_email'];
$oldPassword = $_REQUEST['old_password'];
$newPassword = $_REQUEST['new_password'];
// printf("The variables are ForgotPassword_email %s. ",$email);
// printf("The variables are old_password %s. ",$oldPassword);
// printf("The variables are new_password %s. ",$newPassword);




//Validate and Insert the value in DB::::::::
$query = "SELECT * FROM Slt_users where email='$email' and password = '$oldPassword'";
$results = mysqli_query($conn,$query);
// printf("The number of rows is %s. ",mysqli_num_rows($results));
if (mysqli_num_rows($results) == 1) {
  while($row = mysqli_fetch_assoc($results))
  {
    $Id = $row['Id'];
    // printf("The id is %s. ",$Id);

    $query = "UPDATE Slt_users SET password='$newPassword' WHERE Id='$Id'";
    $results = mysqli_query($conn,$query);
    if($results){
      echo "Record updated successfully";
    }else{
      echo "Error updating record";
    }
  }
}

















//Validate and Insert the value in DB::::::::
// $query = "SELECT * FROM Slt_users where email='$email' and password = '$oldPassword'";
// $results = mysqli_query($conn,$query);
// if(mysqli_num_rows($results)>0)
// {
//   $query = "UPDATE Slt_users SET password='$newPassword' WHERE email='$email'";
//   $results = mysqli_query($conn,$query);
//   if($results){
//     echo "Record updated successfully";
//   }else{
//     echo "Error updating record";
//   }
// }
// else
// {
//   echo "Enter the valid email/password";
// }


// while($row = mysqli_fetch_assoc($result)) {
//
// }
//
//
// if (mysqli_num_rows($id) > 0) {
//
// $all_data = array();
//
//    while($row = mysqli_fetch_assoc($result)) {
//      $all_data['state'][] =  $row;
//    }
// } else{
//    echo "0 results";
// }
//
// echo json_encode($all_data);
//

?>
