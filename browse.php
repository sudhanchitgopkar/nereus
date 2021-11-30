
<!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="browseCSS.css">
        <title>Browse</title>
    </head>
    <body>
        <span class="N-logo">N.</span>
        <br>
        <br>
        <br>
        <br>
        <h1 style="text-align: center;">Your #1 Match:</h1>

        <div class="frontBox" style="display: inline-block;">
            <div style="display: inline-block;" class="circle">
                <div style="padding-left: 150px; font-size: 20px; padding-top: 20px;">Sudhan Chitgopkar</div>
            </div>
            <div class="text">
                <p>Hi! This is my bio. I might say some cheesy shit here, or tell a half-assed joke.</p>
                <p><b>Professional Memer</b></p>
                <p>Instagram • Twitter • Facebook</p>
            </div>
        </div>

        <?php
            require('connDB.php');
            
            $sql = "SELECT username FROM accountInfo";
        
            $result = $conn->query($sql);
        
            // foreach($result as $row) {
            //     echo $row['username'] . "<br>";
            // }
            // $check_user = $result->num_rows > 0;
            // if($result->num_rows == 0) {
            //     echo "no results";
            // }
            // else {
            //     echo "results";
            // }
        
            // if($check_user) {
            //     echo 'inside if';
            // } else {
            //     echo 'inside else';
            // }
            // echo 'after;';
        ?>

        <?php foreach ($query as $name) : 
            echo 'after for each'; ?>
            <li>
                <a class="linkColor" href="?category_id=<?php echo $name['username']; ?>">
                    <?php echo $name['username']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </body>

    
    


    

</html>