<!doctype html>
<html lang="en">
<?php
    // connects to the db and begins a session. If the session user has not been set, the user is redirected to the login page.
    // If the user is logged in, the user is redirected to the edit page.
            require('connDB.php');
            session_start();

            if (!isset($_SESSION['username'])) {
                header("Location: LogIn.php");
            } else {
                $username = $_SESSION['username'];
                $url = "ep.php?username=" . $username;
                $url1 = "editProfile.php?username=" . $username;

                // echo "Hello,i am in edit profiel";
                // echo $username;
            }
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/ep.css">


    <title>Nereus | Edit Profile</title>
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

    <div class="container profile-container my-5 py-5" >
        <div class="row" style="margin-left:130px; text-align:center;">
            <h1>Edit Profile</h1>
            <p>Start by telling us a little about yourself!</p>
        </div>
            <!-- within this div, we have created a form with various inputs to allow us to use it to paste into our database. -->
        <div class="row" style="margin-left:130px;">

            <form action = "editProfile.php" method = "post">
                
                <div class="form-group">

                    <!-- <div class="row mb-1">
                        <label>Profile Picture</label>
                        <input class="form-control" type="file" id="formFile">
                      </div> -->
            <!-- here we use text. -->
                    <div class="row mb-1">
                        <label>General</label>
                        <div class="col-5">
                            <input type="text" class="form-control" id="firstname" placeholder="First name" name="firstName">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" id="lastname" placeholder="Last name" name="lastName">
                        </div>
                        <div class="col-3">
                            <input type="number" class="form-control" id="age" placeholder="Age" name="age">
                        </div>
                        <small>* Must be 18 years or older to create a profile.</small>
                    </div>
<!-- 
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="r.hendricks"> -->

                    <label for="bio">Bio</label>
                    <textarea name="bio" class="form-control " rows="4" maxlength="100"
                        placeholder="Describe yourself here..."></textarea>
                    <label for="job">Occupation</label>
                    <input type="text" class="form-control" id="job" name= "jobTitle" placeholder="Software Dev">

                    <div class="radiogroup my-2">
                        <label for="sex">Sex</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sex" id="male" value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sex" id="female" value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sex" id="other" value="other">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>
            <!-- here we use radio buttons -->
                    <div class="radiogroup mb-2">
                        <label for="seeking">Seeking</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="lookingForSex" id="male" value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="lookingForSex" id="female" value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="lookingForSex" id="other" value="other">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>

                    <div class="radiogroup">
                        <label for="rtype">Relationship Wanted</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="relationType" id="serious" value="serious">
                            <label class="form-check-label" for="serious">Serious</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="relationType" id="friends" value="friends">
                            <label class="form-check-label" for="friends">Friends</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="relationType" id="fling" value="fling">
                            <label class="form-check-label" for="fling">Fling</label>
                        </div>

                        <div class="row mb-1">
                            <label>Social Media URLs</label>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="Instagram" name ="instagram">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="Twitter" name = "twitter">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="Spotify" name = "spotify">
                            </div>
                        </div>
                        <hr>
                        <p class="text-center">Now help us get to know you better!</p>
                        <label for="wyr">Would you rather...</label>
                        <br>
                        <input id="q1a1" type="radio" name="wouldYouRather1" value ="1">
                        <label for="q1a1">Be eaten by a lion</label>
                        OR
                        <input id="q1a2" type="radio" name="wouldYouRather1" value ="2">
                        <label for="q1a2">Be eaten by ants</label>

                        <br>
                        <input id="q2a1" type="radio" name="wouldYouRather2" value ="1">
                        <label for="q2a1">Know how you die</label>
                        OR
                        <input id="q2a2" type="radio" name="wouldYouRather2" value ="2">
                        <label for="q2a2">Know when you die</label>

                        <br>
                        <input id="q3a1" type="radio" name="wouldYouRather3" value ="1">
                        <label for="q3a1">Become Gandalf</label>
                        OR
                        <input id="q3a2" type="radio" name="wouldYouRather3" value ="2">
                        <label for="q3a2">Become Dumbledore</label>

                        <br>
                        <input id="q4a1" type="radio" name="wouldYouRather4" value ="1">
                        <label for="q4a1">Wear comfy clothes</label>
                        OR
                        <input id="q4a2" type="radio" name="wouldYouRather4" value ="2">
                        <label for="q4a2">Wear stylish clothes</label>

                        <br>
                        <input id="q5a1" type="radio" name="wouldYouRather5"value ="1">
                        <label for="q5a1">Become very rich</label>
                        OR
                        <input id="q5a2" type="radio" name="wouldYouRather5" value ="2">
                        <label for="q5a2">Become very famous</label>
                    </div>
                </div>
                <br>
                <input type = "submit" value ="Submit" class= "accbtn">
            </form>
        </div>
    </div>

</html>