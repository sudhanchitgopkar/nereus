
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="browse.css">
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
                <div class="frontBox" style="display: inline-block;padding: 20px 0px 0px !important;">
                    <div style="display: inline-block;margin-right: 160px !important;" class="circle">
                        <div style="padding-left: 150px; font-size: 20px; padding-top: 20px;">Sudhan Chitgopkar</div>
                    </div>
                    <div style="font-size: 13px; text-align:center"> 
                        <br>
                        <p>Hi! This is my bio. I might say some cheesy shit here, or tell a half-assed joke.</p>
                        <br>
                        <div>
                            <p><b>Professional Memer</b></p>
                            <p>Instagram • Twitter • Facebook</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div>
                <br>
                <br>
                <h2 style="padding-right: 950px !important;">Browse: </h2>
            </div>
            
            <div class="container py-5" style="padding-top: 0px !important;">
                <div class="row mt-4">


                    <?php
                        require('connDB.php');
                        
                        $sql = "SELECT * FROM profileInfo";
                        // video stuff
                        $query_run = mysqli_query($conn, $sql);
                        $check_user = mysqli_num_rows($query_run) > 0;
                        // echo mysqli_num_rows($query_run);
                        // echo "this is check user:";
                        // echo $check_user . "<br>";
                        // video stuff
                        // $result = $conn->query($sql);
                        // foreach($result as $row) {
                        //     echo "line44";
                        //     echo $row['username'] . "<br>";
                        // } 
                        
                        if($check_user) {
                            while($row = mysqli_fetch_array($query_run)){

                                ?>
                                <div class="col-md-3">
                                    <div class="otherBox" >
                                        <div class="card-body" style="padding: 0px !important;display: inline-block;">
                                            <div style="display: inline-block;">
                                                <img src="" class="circle" alt="User Images" style="display: inline-block;">
                                                <div style="font-size: 20px; display: inline-block;height: 90px !important;width: 110px !important;"><?php echo $row['firstName'] . " <br>"; echo $row['lastName'];?></div>
                                            </div>
                                            <p class="card-text">
                                                <br>

                                                <?php echo $row['bio'] . "<br>";?>
                                                <br>
                                                <b><?php echo $row['jobTitle'] . "<br>";?></b>
                                                <?php echo $row['instagram'];?>
                                                <?php echo $row['spotify'];?>
                                                <?php echo $row['twitter'];?>
                                                
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                // echo "Works";
                                // echo $row['username'] . "<br>";
                            }
                        } else {
                            echo "No Users Found";
                        }
                    ?>
                    
                </div>
            </div>
        </div>
        
    </body>

    
    


    

</html>