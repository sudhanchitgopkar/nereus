<?php
require_once ('connDB.php'); 
// Check connection
if($conn== false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    echo "connected";
}
//calls the information from ep.php and stores it in variables to update the db
$username=mysqli_real_escape_string($conn, $_POST['username']);
$firstName=mysqli_real_escape_string($conn, $_POST['firstName']);
$lastName=mysqli_real_escape_string($conn, $_POST['lastName']);
$bio=mysqli_real_escape_string($conn, $_POST['bio']);
$age=mysqli_real_escape_string($conn, $_POST['age']);
$jobTitle=mysqli_real_escape_string($conn, $_POST['jobTitle']);
$sex=mysqli_real_escape_string($conn, $_POST['sex']);
$lookingForSex=mysqli_real_escape_string($conn, $_POST['lookingForSex']);
$relationType=mysqli_real_escape_string($conn, $_POST['relationType']);
$instagram=mysqli_real_escape_string($conn, $_POST['instagram']);
$twitter=mysqli_real_escape_string($conn, $_POST['twitter']);
$spotify=mysqli_real_escape_string($conn, $_POST['spotify']);

$Q1=mysqli_real_escape_string($conn, $_POST['wouldYouRather1']);
$Q2=mysqli_real_escape_string($conn, $_POST['wouldYouRather2']);
$Q3=mysqli_real_escape_string($conn, $_POST['wouldYouRather3']);
$Q4=mysqli_real_escape_string($conn, $_POST['wouldYouRather4']);
$Q5=mysqli_real_escape_string($conn, $_POST['wouldYouRather5']);

echo $age;
$sql = "UPDATE profileInfo SET firstName='$firstName',lastName='$lastName',bio='$bio',age='$age',jobTitle='$jobTitle',sex='$sex',lookingForSex='$lookingForSex',relationType='$relationType',instagram='$instagram',twitter='$twitter', spotify='$spotify' WHERE username='$username' ";
$sql2 = "UPDATE questionsInfo SET one='$Q1',two='$Q2',three='$Q3',four='$Q4',five='$Q5' WHERE username='$username' ";


if(mysqli_query($conn, $sql)){
    if(mysqli_query($conn, $sql2)){
        header('location: newbrowse.php');
        // "Records edited successfully profile and questions.";
        // "SUCCESS";

    } else {
        // include('error.html');

        // "ERROR: Could not able to execute $sql2. 
    }
} else{

    // include('error.html');

    // "ERROR: Could not able to execute $sql.  
}


  
?>

