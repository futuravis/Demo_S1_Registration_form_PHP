  <?php

  require_once('dbConnection.php');

  //Getting the value from form:::::
  $firstName = $_REQUEST['firstName'];
  $LastName = $_REQUEST['LastName'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  // printf("The variables are %s. ",$firstName,$LastName,$email,$password);



  //Validate and Insert the value in DB::::::::
  $query = "SELECT * FROM Slt_users where email='$email'";
  $results = mysqli_query($conn,$query);

  if(mysqli_num_rows($results)>0)
  {
      echo "email id eixst. Try with some other email id";
  }
  else
  {
    $query_insert = "INSERT INTO Slt_users (Firstname, LastName, email, password) VALUES ('$firstName', '$LastName', '$email', '$password')";
    $results_insert = mysqli_query($conn,$query_insert);
    if($results_insert)
    {
      echo "Registered successfully";
    }
    else{
        echo "Failed to post request";
    }
   }








  ?>
