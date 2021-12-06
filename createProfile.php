<?php
session_start();

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//$c = mysqli_connect("localhost", "root", "", "demo");
require_once ('connDB.php'); 
// Check connection
if($conn=== false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(!isset($_SESSION['username'])) {
    // header(string: "Location: LogIn.php");
    header("Location: LogIn.php");
    exit();
} else{
    $username = $_SESSION['username'];
    // $url = "browse.php?username=" . $username;
}

// echo "this is the username";
// echo $username;
// echo "this is the php";

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


$sql = "INSERT INTO profileInfo (username, firstName, lastName, bio, age, jobTitle, sex, lookingForSex, relationType, instagram, twitter, spotify) VALUES ('$username', '$first_name', '$last_name', '$bio','$age', '$jobTitle', '$sex', '$lookingForSex', '$relationType', '$instagram', '$twitter', '$spotify');";
$query = "INSERT INTO questionsInfo (one,two,three,four,five,username) VALUES ('$question1', '$question2', '$question3','$question4', '$question5','$username');";
if(mysqli_query($conn, $sql)){
    if(mysqli_query($conn, $query)){
        header('location: newbrowse.php');
        // echo "Records added successfully profile and questions. MAKE HTML FILE FOR GO BACK";
    } else {
        // include('error.html');
        echo "ERROR: Could not able to execute $query.  MAKE HTML FILE FOR GO BACK" . mysqli_error($conn);
    }
} else{

    // include('error.html');

    echo "ERROR: Could not able to execute $sql.  MAKE HTML FILE FOR GO BACK" . mysqli_error($conn);
}
// $alterTable = "ALTER TABLE profileInfo ADD FOREIGN KEY (username) REFERENCES accountInfo(username);";
// $alterTableQ = "ALTER TABLE questionsInfo ADD FOREIGN KEY (username) REFERENCES accountInfo(username);";
// if(mysqli_query($conn, $alterTable)){
//     if(mysqli_query($conn, $alterTableQ)){
//         header('location: browse.php');
//         // echo "Records added successfully profile and questions. MAKE HTML FILE FOR GO BACK";
//     } else {
//         // include('error.html');
//         echo "ERROR: Could not able to execute $alterTableQ.  MAKE HTML FILE FOR GO BACK" . mysqli_error($conn);
//     }
// } else{

//     // include('error.html');

//     echo "ERROR: Could not able to execute $alterTable.  MAKE HTML FILE FOR GO BACK" . mysqli_error($conn);
// }
// Close connection
mysqli_close($conn);
// include('browse.php');

?>