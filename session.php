<?php

    session_start();
    if(!isset($_SESSION['accountID'])) {
        header("Location: LogIn.php");
    }
?>
