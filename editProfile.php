<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//$c = mysqli_connect("localhost", "root", "", "demo");
require_once ('connDB.php'); 
// Check connection
if($conn=== false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$first_name = mysqli_real_escape_string($conn, $_REQUEST['firstName']);
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
echo $question1;
echo $question2;
echo $question3;
echo $question4;
echo $question5;

$sql = "UPDATE INTO profileInfo (firstName, lastName, bio, age, jobTitle, sex, lookingForSex, relationType, instagram, twitter, spotify) VALUES ('$first_name', '$last_name', '$bio','$age', '$jobTitle', '$sex', '$lookingForSex', '$relationType', '$instagram', '$twitter', '$spotify');";
$query = "UPDATE INTO questionsInfo (one,two,three,four,five) VALUES ('$question1', '$question2', '$question3','$question4', '$question5');";
if(mysqli_query($conn, $sql)){
    if(mysqli_query($conn, $query)){
        echo "Records added successfully profile and questions.";
    } else {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// $query = "INSERT INTO questionsInfo (one,two,three,four,five) VALUES ('$question1', '$question2', '$question3','$question4', '$question5');";
// if(mysqli_query($conn, $sql)){
//     echo "Records added successfully questions.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
// }



// Close connection
mysqli_close($conn);
?>