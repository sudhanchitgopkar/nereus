
<<<<<<< HEAD
    <!DOCTYPE html>
    <html>
        <h1>pls work</h1>
        <?php
            require('connDB.php');
            
            $sql = "SELECT username FROM accountInfo";
            // $db = $conn;
            // $result = mysqli_query($db, $sql);
            $result = $conn->query($sql);
        // $rows = $result -> fetchAll();
        
            // $result = mysqli_query($conn, $sql);
            // echo sizeof($result);
            // echo [$result] . "<br>";
            // var_dump($result);
            foreach($result as $row) {
                echo $row['username'] . "<br>";
            }
            $check_user = $result->num_rows > 0;
            if($result->num_rows == 0) {
                echo "no results";
            }
            else {
                echo "results";
            }
            // $result = $conn->query($sql);
            // echo $result;

            
            if($check_user) {
                echo 'inside if';
            } else {
                echo 'inside else';
            }
            echo 'after;';
        ?>
        


        <h1>pls work before foreach</h1>
        <?php foreach ($query as $name) : 
            echo 'after for each'; ?>
            <li>
                <a class="linkColor" href="?category_id=<?php echo $name['username']; ?>">
                    <?php echo $name['username']; ?>
                </a>
            </li>
        <?php endforeach; ?>
=======
<!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="browseCSS.css">
        <title>Browse</title>
    </head>
    <body>
        <div style="text-align:center;">
            <span class="N-logo">N.</span>
            <br>
            <br>
            <br>
            <br>
            <div >
                <h1 style="text-align: center;">Your #1 Match:</h1>
                <div class="frontBox" style="display: inline-block;height: 250px;">
                    <div style="display: inline-block;" class="circle">
                        <div style="padding-left: 150px; font-size: 20px; padding-top: 20px;">Sudhan Chitgopkar</div>
                    </div>
                    <div style="font-size: 15px; text-align:center"> 
                        <p>Hi! This is my bio. I might say some cheesy shit here, or tell a half-assed joke.</p>
                        <p><b>Professional Memer</b></p>
                        <p>Instagram • Twitter • Facebook</p>
                    </div>
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
                    <?php foreach ($result as $row) : ?>
                        <tr>
                            <th style="background-color: #EDEDED;border: 2px solid black;padding: 50px;margin: 20px;border-radius: 30px;padding-left: 20px;padding-top: 20px;position: relative;width: 300px;padding-right: 20px;height: 250px;padding-bottom: 20px;">Name: <?php echo $row['username']; ?></th>
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
        </div>
        
    </body>

    
    


    
>>>>>>> 22cd876deff9ee3685f19b68d709e3df73c4abc3

    </html>