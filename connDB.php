<?php
    //==================== CONNECTING TO DB ====================//
        // $db = parse_ini_file("config.ini");

        // $servername = $db['dbhost']; 
        // $username = $db['dbuser'];  //default username
        // $password = $db['dbpass'];      //default pass
        // $dbname = $db['dbname']; 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "nereus";
        // Create connection
        try {
            $conn = new mysqli($servername, $username, $password, $dbname);
             echo 'Connected successfully<br>';
          }
          catch (PDOException $e)
          {
            $error=$e->getMessage();
            echo '<p> Unable to connect to database: ' .$error;
            exit();
          }
    ?> 
