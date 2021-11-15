<?php
    //==================== CONNECTING TO DB ====================//
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
    ?> 