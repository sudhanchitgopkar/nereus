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
        echo "Login Success";
        } else {
            echo 'Login Failure after succ';
        }
    } 
?>

<!-- <!DOCTYPE HTML>
<html>
    <head>

    </head>
    <body>
        <p> pls print</p>
    </body>
</html> -->