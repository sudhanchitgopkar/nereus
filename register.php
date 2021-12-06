<?php
    session_set_cookie_params(0);
   
    session_start();

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
            $query = "INSERT INTO accountInfo VALUES('$username', '$password', '$email')";
  	        mysqli_query($conn, $query);
            if(isset($_SESSION['username'])) {
              // $url = "browse.php"
              // $url = "browse.php";
              // header(string: 'Location: ' . "browse.php");
  
              header('Location: profile.html');
              exit();
            } else if (isset($_POST['username'])) {
              $username = $_POST['username'];
              $_SESSION['username'] = $username;
              $url = "profile.html";
              header('Location: profile.html');
  
              //header(string: 'Location: ' . "cp.php");
              exit();
            }
            // if(!isset($_SESSION['username'])) {
            //   echo "session is not set";
            // } else {
            //   echo "session is set";
            //   echo '<br /><a href="createProfile.html?' . SID . '">page 2</a>';
            //   echo '<br /><a href="createProfile.php?' . SID . '">page 3</a>';

            
            // }

  	        // $_SESSION['username'] = $username;
            // echo $_SESSION['username'];
  	        // $_SESSION['success'] = "You are now logged in";
            // header('location: createProfile.html');
            }
          }
        }
     
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
</head>

<body>
    <script type="text/javascript">
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
            <div class="row g-0">
                <div class="col-lg-6 mx-0 my-0">
                    <img class="img-fluid" src="diversity.jpeg" id="loginimg">
                </div>
                <div class="col-lg-6 pt-5 px-5">
                    <h1>Register</h1>
                    <p>Let's Get Started!<p>
                    <form method="post">
                        <div class="form-row mb-2 mt-4">
                            <input type="text" placeholder="Username" name ="username" required>
                        </div>
                        <div class="form-row mb-2">
                            <input type="email" placeholder="Email" name ="email" required>
                        </div>
                        <div class="form-row mb-2">
                            <input type="password" placeholder="Password" name ="password" required>
                        </div>
                        <div class="form-row mb-2">
                            <button class="accbtn mb-2" type="submit">Submit</button>
                            <button class="regbtn">Learn More</button>
                        </div>
                        <div class="form-row">
                            <p class="mb-0"> Have an account? Login <a href="LogIn.php">here</a>.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- </html>
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
</DOCTYPE> -->
