<?php
    session_start();
    $_SESSION = array();
    session_destroy();
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
<nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
        <a class="navbar-brand" href="index.html">Nereus.</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="aboutus.html">About Us</a>
                <a class="nav-item nav-link" href="newbrowse.php">Browse</a>
                <a class="nav-item nav-link" href="LogIn.php">Login</a>
                <a class="nav-item nav-link" href="ep.html">Edit Profile</a>
                <a class="nav-item nav-link" href="logOut.php">Logout</a>
            </div>
        </div>
    </nav>

    <div class="mainbody d-flex">
        <div class="container d-flex justify-content-center my-auto">
            <div class="row g-0">
                <div class="col-lg-6 mx-0 my-0">
                    <img class="img-fluid" src="diversity.jpeg" id="loginimg">
                </div>
                <div class="col-lg-6 pt-5 px-5">
                    <h1>You've successfully logged out!</h1>
                    <form>
                       
                        <div class="form-row">
                            <p class="mb-0"> Have an account? Login <a href="LogIn.php">here</a>.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>