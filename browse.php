
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

        <div class="frontBox" style="display: inline-block;height: 250px;left:35%">
            <div style="display: inline-block;" class="circle">
                <div style="padding-left: 150px; font-size: 20px; padding-top: 20px;">Sudhan Chitgopkar</div>
            </div>
            <div style="font-size: 15px; text-align:center"> 
                <p>Hi! This is my bio. I might say some cheesy shit here, or tell a half-assed joke.</p>
                <p><b>Professional Memer</b></p>
                <p>Instagram • Twitter • Facebook</p>
            </div>
        </div>

        <?php
            require('connDB.php');
            
            $sql = "SELECT username FROM accountInfo";
        
            $result = $conn->query($sql);
            foreach($result as $row) {
                echo $row['username'] . "<br>";
            } 
        ?>
        <section>
            <table style=" border-collapse: collapse;">
                <!-- <tr>
                    <th style="border: 1px dotted black;border-collapse: collapse;padding: 5px;"></th>
                    <th style="border: 1px dotted black;border-collapse: collapse;padding: 5px;"></th>
                    <th style="border: 1px dotted black;border-collapse: collapse;padding: 5px;"></th>
                    <th style="border: 1px dotted black;border-collapse: collapse;padding: 5px;"></th>

                </tr> -->
                <?php foreach ($result as $row) : ?>
                    <tr>
                    <!-- style="border: 1px dotted black;border-collapse: collapse;padding: 5px;" -->
                    <!-- <div class="otherBox"> -->
                        <th style="background-color: #EDEDED;
    border: 2px solid black;
    padding: 50px;
    margin: 20px;
    border-radius: 30px;
    /* margin-left: 520px; */
    padding-left: 20px;
    padding-top: 20px;
    position: relative;
    width: 300px;
    padding-right: 20px;
    height: 250px;
    padding-bottom: 20px;">Name: <?php echo $row['username']; ?></th>
                    <!-- </div> -->
                        <!-- <td style="border: 1px dotted black;border-collapse: collapse;padding: 5px;"></td> -->
                    </tr>
                <?php endforeach; ?>
                
                
            </table>
        </section>
        

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