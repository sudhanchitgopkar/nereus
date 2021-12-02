
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
        <script type="text/javascript">
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>
        
        <div style="text-align:center;">
            <div>
                <div class="N-logo">N.</div>

                <div class="dropdown" style="padding-top: 38px !important; margin-right: 30px;">
                    <button onclick="myFunction()" class="dropbtn">
                        <!-- Dropdown -->
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                        <div class="hamburger"></div>
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="index.html">Home</a>
                        <a href="browse.php">Browse</a>
                        <a href="#contact">Log Out</a>
                    </div>
                </div>
            </div>
            


            <!-- <div style="display: inline-block;padding-top: 40px !important;">
                <div class="N-logo">N.</div>
                <div class="navbar" style="padding-left: 1000px !important; display: inline-block;">
                    <button class="dropbtn" onclick="myFunction()">Dropdown
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content" id="myDropdown">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
                
            </div> -->
            <br>
            <br>
            <br>
            <br>
            <div >
                <h1 style="text-align: center;">Your #1 Match:</h1>
                <div class="frontBox" style="display: inline-block;width: 450px;height: 350px;">
                    <div style="display: inline-block;margin-right: 250px !important;" class="circle">
                        <div style="adding-left: 190px;font-size: 30px;padding-top: 20px;">Sudhan Chitgopkar</div>
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
                <h2 style="padding-right: 1200px !important;">Browse: </h2>
            </div>
            
            <div class="container py-5" style="padding-top: 0px !important;margin-left: 200px !important;">
                <div class="row mt-4" style="margin-left: 50px;">


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
                                <div class="col-md-3" style="margin-right: 30px;">
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

    
    


    
=======
>>>>>>> 2e7fd3cedd96450dc2802418aaf540139fa9e606
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
<<<<<<< HEAD
=======
>>>>>>> VenSaba
>>>>>>> 2e7fd3cedd96450dc2802418aaf540139fa9e606

    </html>