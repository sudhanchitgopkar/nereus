<?php
session_start();

//connect to database
require_once ('connDB.php'); 
// Check connection
if($conn=== false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//ensures someone is logged inbefore allowing them to create a profile
if(!isset($_SESSION['username'])) {
    // header(string: "Location: LogIn.php");
    header("Location: LogIn.php");
    exit();
} else{
    $username = $_SESSION['username'];
    // $url = "browse.php?username=" . $username;
}

//calls the inforamtion from the form in profile.html

$first_name = mysqli_real_escape_string($conn, $_REQUEST['firstName']);
// $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
// echo $_SESSION['username']; // green
$last_name = mysqli_real_escape_string($conn, $_REQUEST['lastName']);
$bio = mysqli_real_escape_string($conn, $_REQUEST['bio']);
$age = mysqli_real_escape_string($conn, $_REQUEST['age']);
$jobTitle = mysqli_real_escape_string($conn, $_REQUEST['jobTitle']);
$sex = $_POST['sex'];
$lookingForSex = $_POST['lookingForSex'];
$relationType = $_POST['relationType'];
$instagram = mysqli_real_escape_string($conn, $_REQUEST['instagram']);
$twitter = mysqli_real_escape_string($conn, $_REQUEST['twitter']);
$spotify = mysqli_real_escape_string($conn, $_REQUEST['spotify']);
$question1 = $_POST['wouldYouRather1'];
$question2 = $_POST['wouldYouRather2'];
$question3 = $_POST['wouldYouRather3'];
$question4 = $_POST['wouldYouRather4'];
$question5 = $_POST['wouldYouRather5'];

//we use sql statements to insert the information into the database with the correct column names
$sql = "INSERT INTO profileInfo (username, firstName, lastName, bio, age, jobTitle, sex, lookingForSex, relationType, instagram, twitter, spotify) VALUES ('$username', '$first_name', '$last_name', '$bio','$age', '$jobTitle', '$sex', '$lookingForSex', '$relationType', '$instagram', '$twitter', '$spotify');";
$query = "INSERT INTO questionsInfo (one,two,three,four,five,username) VALUES ('$question1', '$question2', '$question3','$question4', '$question5','$username');";
if(mysqli_query($conn, $sql)){
    if(mysqli_query($conn, $query)){
        header('location: newbrowse.php');
        // Records added successfully profile and questions.
    } else {
        // include('error.html');
        echo "ERROR: Could not able to execute $query.  MAKE HTML FILE FOR GO BACK" . mysqli_error($conn);
    }
} else{

    // include('error.html');
echo "ERROR: Could not able to execute $sql.  MAKE HTML FILE FOR GO BACK" . mysqli_error($conn);
}

mysqli_close($conn);
// include('browse.php');

?>