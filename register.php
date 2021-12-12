<?php
    session_set_cookie_params(0);
   
    session_start();

    require('connDB.php');
    // connect to the db
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
      // below is doing input validation with ensuring the password is more than 7 and the none of the fields are empty.
        if (empty($username) || empty($password) || empty($email)) {
            echo "<div class=echo><h6 id=malign>Please fill out all fields.</h6></div>";
            // return;
        } 

        else if (strlen($password) < 7) {
            echo "<div class=echo><h6 id=malign>Password must be more than 6 characters.</h6></div>";
            // return;
        } else {
          //here we check for duplicates within the db if you want to create a new account
        $checkDuplicate = "SELECT * FROM accountInfo WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conn, $checkDuplicate);

        $user = mysqli_fetch_assoc($result);
  
        if ($user) { // if user exists
            if ($user['username'] === $username) {
              echo "<div class=echo><h6 id=malign>Username already exists!</h6></div>";
            } //if

            if ($user['email'] === $email) {
               echo "<div class=echo><h6 id=malign>Email already exists!</h6></div>";
            } //if
        } else {
          //if user name does not exist, we can create a new account and insdert it into the db
            $query = "INSERT INTO accountInfo VALUES('$username', '$password', '$email')";
  	        mysqli_query($conn, $query);
            if(isset($_SESSION['username'])) {
         
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
    <link rel="stylesheet" href="./style/style.css">

    <title>Hello, world!</title>
</head>

<body>
      <!-- This is our tool bar at the top thats consistent to all pages. Allows users to jump page to page easily. -->
<nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
        <a class="navbar-brand" href="index.html">Nereus.</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link" href="./static/aboutus.html">About Us</a>
                <a class="nav-item nav-link" href="newbrowse.php">Browse</a>
                <a class="nav-item nav-link" href="LogIn.php">Login</a>
                <a class="nav-item nav-link" href="ep.php">Edit Profile</a>
                <a class="nav-item nav-link" href="logOut.php">Logout</a>
            </div>
        </div>
    </nav>
        
    <div class="mainbody d-flex">
        <div class="container d-flex justify-content-center my-auto">
            <div class="row g-0">
                <div class="col-lg-6 mx-0 my-0">
                    <img class="img-fluid" src="./images/register.jpg" id="loginimg">
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

