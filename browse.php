<?php

include('connDB.php');

if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}

include('browse.php');
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <p> this is browse</p>
    </body>
</html>