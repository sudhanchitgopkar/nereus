
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
                        <a href="logOut.php">Log Out</a>
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
                <?php
                    require('connDB.php');
                    session_start();
                    
                    if(!isset($_SESSION['username'])) {
                        header("Location: LogIn.php");
                        // exit();
                    } else {
                    $username = $_SESSION['username'];
                    $url = "browse.php?username=" . $username;
                    echo "Hello: ";
                    echo $username;
                    // echo "this is the php";
                    }
                    $userQ = "SELECT one,two,three,four,five FROM questionsInfo WHERE '$username'=username";
                    $query_runUserQ = mysqli_query($conn, $userQ);
                    $row3= mysqli_num_rows($query_runUserQ) > 0;
                    if($row3) {
                        while ($row6 = mysqli_fetch_array($query_runUserQ)) {
                            $one = $row6['one'];
                            $two = $row6['two'];
                            $three = $row6['three'];
                            $four = $row6['four'];
                            $five = $row6['five'];
                        }
                    }
                    echo $one;
                    echo $two;
                    echo $three;
                    echo $four;
                    echo $five;



                    $query1 = "SELECT * FROM questionsInfo";
                    $query_run1 = mysqli_query($conn, $query1);
                    $check_user = mysqli_num_rows($query_run1) > 0;
                    // echo $row3;
                    $count = 0;
                    $maxCount = -1;
                    $holdMatch = "";
                    if($check_user){
                        while($col = mysqli_fetch_array($query_run1) ) {
                            $count = 0;

                            if($one == $col['one']) {
                                $count++;
                            }
                            if($two == $col['two']) {
                                $count++;
                            }
                            if($three == $col['three']) {
                                $count++;
                            }
                            if($four == $col['four']) {
                                $count++;
                            }
                            if($five == $col['five']) {
                                $count++;
                            }
                            if($maxCount < $count) {
                                if($col['username'] != $username) {
                                    $maxCount = $count;
                                    // echo $maxCount;
                                    $holdMatch = $col['username'];
                                    // echo $holdMatch;
                                }
                            }

                        }
                    }
            
                ?>
                <?php  
                    $printMatch = "SELECT * from profileInfo WHERE '$holdMatch'=username";
                    $pM = mysqli_query($conn, $printMatch);
                    $pMChek = mysqli_num_rows($pM) > 0;

                    if($pMChek) {
                        while($PM = mysqli_fetch_array($pM)){
                ?> 
                            <div class="frontBox" style="display: inline-block;">
                                <div style="display: inline-block;margin-right: 250px !important;" class="circle">
                                    <div style="padding-left: 190px;font-size: 30px;padding-top: 20px;"><?php echo $PM['firstName'] . " <br>"; echo $PM['lastName'];?></div>
                                </div>
                                <div style="font-size: 17px; text-align:center"> 
                                    <br>
                                    <?php echo $PM['bio'] . "<br>";?>
                                    <br>
                                    <div>
                                    <br>
                                                <b><?php echo $PM['jobTitle'] . "<br>";?></b>
                                                <a href> <?php $PM['instagram'];?>instagram</a>
                                                <a href> <?php $PM['spotify'];?>spotify</a>
                                                <a href> <?php $PM['twitter'];?>twitter</a>
                                    </div>
                            
                                </div>
                            </div>
                <?php
                        } //while
                    } else {
                        echo "No Match Found";
                    }

                ?> 
                
            </div>
            
            <div>
                <br>
                <br>
                <h2 style="padding-right: 1200px !important;">Browse: </h2>
            </div>
            
            <div class="container py-5" style="padding-top: 0px !important;margin-left: 120px !important;">
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
                                <div class="col-md-3" style="margin-right: 80px;">
                                    <div class="otherBox" >
                                        <div class="card-body" style="padding: 0px !important;display: inline-block;">
                                            <div style="display: inline-block;">
                                                <img src="" class="profileCircle" alt="User Images" style="display: inline-block;">
                                                <div style="font-size: 25px; display: inline-block;height: 90px !important;width: 110px !important;"><?php echo $row['firstName'] . " <br>"; echo $row['lastName'];?></div>
                                            </div>
                                            <p class="card-text" style="font-size: 17px;">
                                                <br>

                                                <?php echo $row['bio'] . "<br>";?>
                                                <br>
                                                <b><?php echo $row['jobTitle'] . "<br>";?></b>
                                                <a href> <?php $row['instagram'];?>instagram</a>
                                                <a href> <?php $row['spotify'];?>spotify</a>
                                                <a href> <?php $row['twitter'];?>twitter</a>
                                                
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
