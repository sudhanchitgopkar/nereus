<?php
    //==================== CONNECTING TO DB ====================//
        $servername = "localhost"; 
        $username = "root"; //default username
        $password = "";     //default pass
	$dbname = "nereus";

        // Create connection
        $mysqli = new mysqli($servername, $username, $password, $dbname);

    ?> 