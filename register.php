<?php
    require('connDB.php');

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if (empty($username) || empty($password) || empty($email)) {
            echo "<div class=echo><h4 id=malign>Please fill out all fields.</h4></div>";
            // return;
        } 

        else if (strlen($password) < 7) {
            echo "<div class=echo><h4 id=malign>Password must be more than 6 characters.</h4></div>";
            // return;
        } else {

        $checkDuplicate = "SELECT * FROM accountInfo WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conn, $checkDuplicate);

        $user = mysqli_fetch_assoc($result);
  
        if ($user) { // if user exists
            if ($user['username'] === $username) {
              echo "<div class=echo><h4 id=malign>Username already exists!</h4></div>";
            } //if

            if ($user['email'] === $email) {
               echo "<div class=echo><h4 id=malign>Email already exists!</h4></div>";
            } //if
        } else {
            $query = "INSERT INTO accountInfo VALUES(NULL, '$username', '$password', '$email')";
  	        mysqli_query($conn, $query);
  	        $_SESSION['username'] = $username;
  	        $_SESSION['success'] = "You are now logged in";
            header('location: createprofilenew.html');
            }
          }
        }
     
?>

<DOCTYPE! html>
  <html>
    <head>
      <link rel="stylesheet" href="logstyle.css" />
      <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    </head>

    <div class=gradient>
      <span  class="N-logo">N.</span>

      <div class="box">

        <div class="left">
          <img src="register.svg" alt="alt text"/>
        </div>

        <div class="right">
          <h2>Register</h2>
          <form class="reg-form" action = "" method = "post">
            <label for="username">Username:</label>
            <input type="text" name="username" />
           <br/>
           <label for="password">Password:</label>
           <input type="password" name="password" />
           <br/>
           <label for="email">Email:</label>
           <input type="email" name="email"/>
           <br>
           <div class = "buttons">
           <button type="submit" class="register-button" id="registr-button">Register</button>
           <button class="learn-more-button" id="learn-more-button">Learn More</button>
          </div>
          </form>
          <h3 class="reg-h3">Already have an account? Log in <a href="LogIn.php">here</a></h3>
        </div>

      </div>

    </div>
  </html>
</DOCTYPE>
