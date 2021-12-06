<?php
    session_set_cookie_params(0);
    
    session_start();

    require('connDB.php');

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $emptyUP = false;

        if (empty($username) || empty($password)) {
            echo "<div class=echo><h4>Please fill out all fields.</h4></div>";
        } else {

        $sql = "SELECT * FROM accountInfo WHERE username='$username' AND password = '$password' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);

        if (!$user) {
            echo "<div class=echo><h4>Username or password is incorrect.</h4></div>";         
        } else {
          if(isset($_SESSION['username'])) {
          

            header('Location: newbrowse.php');
            exit();
          } else if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $_SESSION['username'] = $username;
            $url = "browse.php";
            header('Location: newbrowse.php');

            //header(string: 'Location: ' . "browse.php");
            exit();
          }

        }
      }


     }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <title>Log In</title>
</head>

<body><script type="text/javascript">
  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
  function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                  openDropdown.classList.remove('show');
              }
          }
      }
  }
</script>
<div style="text-align:center;">
  <div>
      <div class="N-logo"><a href="#">N.</a></div>
      <div class="dropdown" style="padding-top: 38px !important; margin-right: 30px;">
          <button onclick="myFunction()" class="dropbtn">
              <!-- Dropdown -->
              <div class="hamburger"></div>
              <div class="hamburger"></div>
              <div class="hamburger"></div>
          </button>
          <div id="myDropdown" class="dropdown-content">
              <a href="#">Home</a>
              <a href="#">Browse</a>
              <a href="#">Log Out</a>
          </div>
      </div>
  </div>
    
    <div class="mainbody d-flex">
        <div class="container d-flex justify-content-center my-auto">
            <div class="row g-0" id="logrow">
                <div class="col-lg-6 mx-0 my-0">
                    <img class="img-fluid" src="diversity.jpeg" id="loginimg">
                </div>
                <div class="col-lg-6 pt-5 px-5">
                    <h1>Log In</h1>
                    <p>Welcome back!
                    <p>
                    <form method="post">
                        <div class="form-row mb-3 mt-4">
                            <input type="text" placeholder="Username" name="username" required>
                        </div>
                        <div class="form-row mb-4">
                            <input type="password" placeholder="Password" name="password"required>
                        </div>
                        <div class="form-row mb-2">
                            <button class="accbtn mb-2" type="submit">Submit</button>
                            <button class="regbtn">Forgot Password</button>
                        </div>
                        <div class="form-row">
                            <p class="mb-0"> New to Nereus? Register <a href="registerNew.html">here</a>.</p>
                            <p> or learn more about us <a href="">here</a>.</p>
                        </div>
                    </form>
                </div>
            </div>
       
        </div>
    <!---</div>--->
</body>
</html>

<!-- <DOCTYPE! html>
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
            <br/>
            <label for="password">Password:</label>
            <input type="password" name="password" />
            <button type = "submit" class="login-button" id="login-button">Log In</button>
            <button class="forgot-pass-button" id="forgot-pass-button">Forgot Password?</button>
            </form>
            <h3 class="log-h3">New to Nereus? Register <a href="register.php">here</a></h3>
          </div>
        </div>

    </body>
  </html>
</DOCTYPE> -->
