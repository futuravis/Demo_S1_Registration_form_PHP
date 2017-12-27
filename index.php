<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="form">

    <ul class="tab-group">
      <li class="tab active"><a href="#signup">Sign Up</a></li>
      <li class="tab"><a href="#login">Log In</a></li>
      <li class="tab"><a href="#Forgot_Password">Forgot Password</a></li>
      <li class="tab"><a href="#deleteAccount">Delete Account</a></li>
    </ul>


    <div class="tab-content">


      <!-- Singup page -->
      <div id="signup">
        <h1>Sign Up for Free</h1>
        <form action="registration.php" method="post">
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" id="firstName" name="firstName" required autocomplete="off" />
            </div>
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" id="LastName" name="LastName"required autocomplete="off"/>
            </div>
          </div>
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="email" name="email" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" id="password" name="password" required autocomplete="off"/>
          </div>
          <button type="submit" class="button button-block">Get Started</button>
        </form>
      </div>


      <!-- login page -->
      <div id="login">
        <h1>Welcome Back!</h1>
        <form action="login.php" method="post">
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="login_email" name="login_email" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" id="login_password" name="login_password" required autocomplete="off"/>
          </div>
          <button class="button button-block">Log In</button>
        </form>
      </div>

      <!-- Forgot_Password page -->
      <div id="Forgot_Password">
        <h1>Change your password</h1>
        <form action="ForgotPassword.php" method="post">
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="ForgotPassword_email" name="ForgotPassword_email" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Old Password<span class="req">*</span>
            </label>
            <input type="password" id="old_password" name="old_password" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              New Password<span class="req">*</span>
            </label>
            <input type="password" id="new_password" name="new_password" required autocomplete="off"/>
          </div>
          <button class="button button-block">submit</button>
        </form>
      </div>


      <!-- Forgot_Password page -->
      <div id="deleteAccount">
        <h1>Delete the account</h1>
        <form action="deleteAccount.php" method="post">
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="deleteAccount_email" name="deleteAccount_email" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Old Password<span class="req">*</span>
            </label>
            <input type="password" id="deleteAccount_password" name="deleteAccount_password" required autocomplete="off"/>
          </div>
          <button class="button button-block">remove account</button>
        </form>
      </div>





    </div><!-- tab-content -->

  </div> <!-- /form -->








  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script  src="js/index.js"></script>

</body>
</html>
