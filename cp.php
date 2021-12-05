<!DOCTYPE html>
<html lang="en">
    <head>
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="mycss.css">
        <meta charset="UTF-8">
        <title>Add Record Form</title>
    </head>
    <body>
        <div>
            <span  class="N-logo">N.</span>
        <br>
        <div class="header">
            <h1>Create Your Profile</h1>
            <p>Tell us a bit about yourself!</p>
            <?php
                    require('connDB.php');
                    session_start();
                    if(!isset($_SESSION['username'])) {
                        header(string: "Location: LogIn.php");
                        exit();
                    }
                    $username = $_SESSION['username'];
                    $url = "browse.php?username=" . $username;
                    echo "this is the username";
                    echo $username;
                    echo "this is the php";

                ?>
        </div>
        <div class="right">
            <!-- <img src="create_profile.svg" alt="alt text"/> -->
        </div>
        <div class="circle"></div>

        <h1>TESTING Form</h1>
        <form action="createProfile.php" method="post" >
            <div style="margin-left: 550px;">
                    <label for="firstName">First Name:</label>
                    <input type="text" name="firstName" id="firstName">
                    <br>
                    <label for="lastName">Last Name:</label>
                    <input type="text" name="lastName" id="lastName">
                    <br>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username">
                    <br>
                    <label for="bio">bio:</label>
                    <input type="text" name="bio" id="bio">
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div style="display: inline-block;">
                <div style="display: inline-block;">
                    <label for="age">Age:</label>
                    <input type="text" name="age" id="age">
                </div>
                <div style="display: inline-block;">
                    <label for="jobTitle">jobTitle:</label>
                    <input type="text" name="jobTitle" id="jobTitle">
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div style="display: inline-block;">
                <div style="display: inline-block;">
                    <label for="sex">I identify as:</label>
                    <br>
                    <span><input type="radio" name="sex" value="Male"/>Male</span>
                    <span><input type="radio" name="sex" value="Female"/>Female</span>
                    <span><input type="radio" name="sex" value="Non-Binary"/>Non-Binary</span>
                    <span><input type="radio" name="sex" value="Other"/>Other</span>

                   
                </div>
                <div style="display: inline-block;">
                    <label for="sex">Looking for:</label>

                    <br>
                    <span><input type="radio" name="lookingForSex" value="Male"/>Male</span>
                    <span><input type="radio" name="lookingForSex" value="Female"/>Female</span>
                    <span><input type="radio" name="lookingForSex" value="Non-Binary"/>Non-Binary</span>
                    <span><input type="radio" name="lookingForSex" value="Other"/>Other</span>
    
                </div>
                <div style="display: inline-block;">
                    <label for="sex">Relationship Type:</label>

                    <br>
                    <span><input type="radio" name="relationType" value="Friends"/>Friends</span>
                    <span><input type="radio" name="relationType" value="Serious"/>Serious</span>
                    <span><input type="radio" name="relationType" value="Hookups"/>Hookups</span>
                    <span><input type="radio" name="relationType" value="IDK"/>IDK</span>
             
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div style="display: inline-block;">
                <div style="display: inline-block;">
                    <label for="instagram">instagram:</label>
                    <input type="text" name="instagram" id="instagram">
                </div>
                <div style="display: inline-block;">
                    <label for="twitter">twitter:</label>
                    <input type="text" name="twitter" id="twitter">
                </div>
                <div style="display: inline-block;">
                    <label for="spotify"> spotify:</label>
                    <input type="text" name="spotify" id="spotify">
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div>
                <h3>WOULD YOU RATHER.....</h3>
                <label for="wouldYouRather">Would You Rather:</label>

                    <br>
                    <span><input type="radio" name="wouldYouRather1" value="1"/>Be Eaten By A Lion</span>
                    <span><input type="radio" name="wouldYouRather1" value="2"/>Be Eaten By Ants</span>
                    <br>
                    <span><input type="radio" name="wouldYouRather2" value="1"/>Know how the world ends</span>
                    <span><input type="radio" name="wouldYouRather2" value="2"/>Know when the world ends</span>
                    <br>
                    <span><input type="radio" name="wouldYouRather3" value="1"/>Be Gandolf</span>
                    <span><input type="radio" name="wouldYouRather3" value="2"/>Be Dumbledore</span>
                    <br>
                    <span><input type="radio" name="wouldYouRather4" value="1"/>Wear comfortable clothes</span>
                    <span><input type="radio" name="wouldYouRather4" value="2"/>Wear stylish clothes</span>
                    <br>
                    <span><input type="radio" name="wouldYouRather5" value="1"/>Be famous</span>
                    <span><input type="radio" name="wouldYouRather5" value="2"/>Be rich</span>
                   
            </div>
           
            <input type="submit" value="Submit">

        </form>

            <!-- //onclick have js to have if statements to match the browse
            //find way to move that query to the next page -->

            
        <!-- <form action="insertQ.php" method="post">
            <div>
                <h3>WOULD YOU RATHER.....</h3>
                <label for="wouldYouRather">Would You Rather:</label>

                    <br>
                    <span><input type="radio" name="wouldYouRather1" value="1"/>Be Eaten By A Lion</span>
                    <span><input type="radio" name="wouldYouRather1" value="2"/>Be Eaten By Ants</span>
                    <br>
                    <span><input type="radio" name="wouldYouRather2" value="1"/>Know how the world ends</span>
                    <span><input type="radio" name="wouldYouRather2" value="2"/>Know when the world ends</span>
                    <br>
                    <span><input type="radio" name="wouldYouRather3" value="1"/>Be Gandolf</span>
                    <span><input type="radio" name="wouldYouRather3" value="2"/>Be Dumbledore</span>
                    <br>
                    <span><input type="radio" name="wouldYouRather4" value="1"/>Wear comfortable clothes</span>
                    <span><input type="radio" name="wouldYouRather4" value="2"/>Wear stylish clothes</span>
                    <br>
                    <span><input type="radio" name="wouldYouRather5" value="1"/>Be famous</span>
                    <span><input type="radio" name="wouldYouRather5" value="2"/>Be rich</span>
                   
            </div>
            <input type="submit" value="Submit">

        </form> -->

        </div>
        

    </body>
</html>



