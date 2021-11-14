<?php
    //==================== CONNECTING TO DB ====================//
        $servername = "localhost"; 
        $username = "root"; //default username
        $password = "";     //default pass
	    $dbname = "nereus";

        // Create connection
        try {
            $mysqli = new mysqli($servername, $username, $password, $dbname);
            //  echo 'Connected successfully<br>';
          }
          catch (PDOException $e)
          {
            $error=$e->getMessage();
            echo '<p> Unable to connect to database: ' .$error;
            exit();
          }

    ?> 

<!DOCTYPE html>
<html>
  <head>
    <meta title="Nereus" />
    <link rel="stylesheet" href="logstyle.css" />
  </head>

  <body>
    <h1>Welcome to <span style="color: #bee09c">Nereus</span></h1>
    <h2 id="subtitle">
      We’re so excited you’re joining us! Let’s get you started with an account. <br>
      If you already have an account, you can log in now.
    </h2>

    <div class="twocol">
      <h2>Log In</h2>
      <form action="cookies.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" />
        <br />
        <label for="password">Password:</label>
        <input type="password" name="password" />
        <!-- <input id="accentbtn" type="submit" value="Login" /> -->
        <button id="accentbtn" type="submit">Log In</button>
        <button>Forgot Password?</button>
        <!-- <input id="accentbtn" type="submit" value="Login" id="submit" />
        <button>Forgot Password?</button> -->
      </form>

      

    </div>

    
      <h2>Register</h2>
      <form id="right" action="cookies.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" />
        <br />
        <label for="email">Email:</label>
        <input type="email" name="email" />
        <br />
        <label for="password">Password:</label>
        <input type="password" name="password" />
        <br>
        <button id="accentbtn">Log In</button>
        <button>Learn More About Us</button>
        <!-- <input type="submit" value="Login" id="submit" /> -->
      </form>

      <!-- <button id="accentbtn">Log In</button>
      <button>Learn More About Us</button> -->

  </body>
  <footer id="footer">
    <p id ="sosumi" style="float:left;">Must be located within the United States and above the age of 18 to register.</p>
    <!-- <br> &copy; Nereus 2021 | All rights reserved. -->
    <p style="float:right; margin-right: 20px">&copy; Nereus 2021 | All rights reserved.</p>
  </footer>
</html>
