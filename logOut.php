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
                    <a href="index.html">Home</a>
                    <a href="browse.php">Browse</a>
                    <a href="logOut.php">Log Out</a>
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