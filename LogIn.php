<?php
    require('connDB.php');

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            echo("Please fill out all fields.");
            return;
        } 

        $sql = "SELECT * FROM accountInfo WHERE username='$username' AND password = '$password' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);

        if (!$user) {
            echo("This username or password is incorrect.");
        } else {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: createprofilenew.html');
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
    <body>

        <span  class="N-logo">N.</span>

        <div class="box">
          <div class="left">
            <img src="login.svg" alt="alt text"/>
          </div>

          <div class="right">
            <h2>Log In</h2>
            <form class="log-form" action = "" method = "post">
              <label for="username">Username:</label>
              <input type="text" name="username" />
            <br />
            <label for="password">Password:</label>
            <input type="password" name="password" />
            <button type = "submit" class="login-button" id="login-button">Log In</button>
            </form>
            <button class="forgot-pass-button" id="forgot-pass-button">Forgot Password?</button>
            <h3 class="log-h3">New to Nereus? Register <a href="register.html">here</a></h3>
          </div>
        </div>

    </body>
  </html>
</DOCTYPE>
