<?php

    $servername = "localhost"; 
    $username = "root"; //default username
    $password = "";     //default pass
    $dbname = "nereus";

    // Create connection
    try {
        $conn = new mysqli($servername, $username, $password, $dbname);
        //  echo 'Connected successfully<br>';
    }
    catch (PDOException $e)
    {
        $error=$e->getMessage();
        // echo '<p> Unable to connect to database: ' .$error;
        exit();
    }
    if(!isset($accountID))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM accountInfo WHERE username='$username' && password='$password'";
        // require_once(connDB.php);
        $qry = mysqli_query($conn, $sql) or die ("Login probs");
        $count = mysqli_num_rows($qry);
        if($count==1) {
            $_SESSION['user'] = $username;
            setcookie("mycookie", TRUE, time()+6);
        echo "Login Success";
        } else {
            echo 'Login Failure after succ';
        }
    } 
?>

<!DOCTYPE html>
<html >
    <head>
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="browseCSS.css">
        <title>Browse</title>
    </head>
    <body class="font">
        <div style="display: inline-block;">
            <h1 style="display: inline;" class="color">N.</h1>
            <div class="topBar">
                <div class="hamburger"></div>
                <div class="hamburger"></div>
                <div class="hamburger"></div>
            </div>

        </div> 
        <h1 style="text-align: center;">Your #1 Match:</h1>
 
        <div class="frontBox" style="display: inline-block;">
            <div style="display: inline-block;" class="circle">
                <div style="padding-left: 150px; font-size: 25px; padding-top: 20px;">Sudhan Chitgopkar</div>
            </div>
            <div class="text">
                <p>Hi! This is my bio. I might say some cheesy shit here, or tell a half-assed joke.</p>
                <p><b>Professional Memer</b></p>
                <p>Instagram • Twitter • Facebook</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div>
            <h2>Browse:</h2>
            <!-- <div class="otherBox" style="display: inline-block;">
                <div style="display: inline-block;" class="circle">
                    <div style="padding-left: 150px; font-size: 25px; padding-top: 20px;">Sudhan Chitgopkar</div>
                </div>
                <div class="text">
                    <p>Hi! This is my bio. I might say some cheesy shit here, or tell a half-assed joke.</p>
                    <p><b>Professional Memer</b></p>
                    <p>Instagram • Twitter • Facebook</p>
                </div>
            </div> -->

            <!-- FROM THE VIDEO BUT ITS BOOTSTRAP-->
            <div class="container py-5">
                <div class="row mt-4">
                    <?php
                    //require database connection
                    // require ('connDB.php');
                    $query = "SELECT * FROM accountInfo";
                    $query_run = mysqli_query($conn, $query);

                    $check_user = mysqli_num_rows() > 0;

                    if($check_user) {
                        while($row = mysqli_fetch_assoc($query_run)) { //could be array
                            ?>
                            <div class="col-md-4 mt-3">
                                <div class="card">
                                    <img src=" <?php echo $row['image'] ?> " width="200px" height="200px" alt="Profile Pic">  <!-- type in path into src -->   
                                    <div class="card-body">
                                        <h2 class="card-title"> <?php echo $row['username']; ?> </h2> <!--username would be name first and last -->
                                        <p class="card-text"> <?php echo $row['email']; ?>  </p> <!--bio would be name first and last -->
                                    </div>
                                </div>
                            </div>
                            <?php 

                            echo $row['username'];
                        }
                    } else {
                        echo "No users found";
                    }
                    ?>
                  <!-- COULD WORK NOT BOOTSTRAP -->  
                <div class="grid-container">
                    <?php
                    //require database connection
                    // require ('connDB.php');
                        $query = "SELECT * FROM accountInfo";
                        $query_run = mysqli_query($conn, $query);

                        $check_user = mysqli_num_rows() > 0;

                        if($check_user) {
                            while($row = mysqli_fetch_assoc($query_run)) { //could be array
                    ?>
                    <div class="grid-item">
                        <img src=" <?php echo $row['image'] ?> " width="200px" height="200px" alt="Profile Pic">  <!-- type in path into src -->   
                        <div class="card-body">
                            <h2 class="card-title"> <?php echo $row['username']; ?> </h2> <!--username would be name first and last -->
                            <p class="card-text"> <?php echo $row['email']; ?>  </p> <!--bio would be name first and last -->
                        </div>
                    </div>
                    <div class="grid-item">1</div>
                    <div class="grid-item">1</div>
                    <div class="grid-item">1</div>
                    <div class="grid-item">1</div>
                    <div class="grid-item">1</div>
                    <div class="grid-item">1</div>
                    <div class="grid-item">1</div>
                    <div class="grid-item">1</div>
                </div>