<?php

require_once('connDB.php');

$name=$_POST['name'];
$password=$_POST['password'];
$check=$_POST['check'];

$query="SELECT * FROM users WHERE username='$name' AND password='$password'";

$data=$db->query($query);

if($data->rowCount()>0) {
    if($check=='1') {
        setcookie("mycookie", TRUE, time()+6)
        // header('Location: welcome.html');
        // include('browse.php');
    } else {
        // header('Location: error.html');)
    }
}

// Display the Browse List page
include('browse.php');

?>

