<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/8201081510.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="browse.css">
    <title>Browse</title>
</head>

<body>
    <div class="container pt-5 pb-2">
        <div class="row head">
            <?php
            require('connDB.php');
            session_start();

            if (!isset($_SESSION['username'])) {
                header("Location: LogIn.php");
            } else {
                $username = $_SESSION['username'];
                $url = "browse.php?username=" . $username;
                echo "Hello, ";
                echo $username;
            }

            $userQ = "SELECT one,two,three,four,five FROM questionsInfo WHERE '$username'=username";
            $query_runUserQ = mysqli_query($conn, $userQ);
            $row3 = mysqli_num_rows($query_runUserQ) > 0;
            if ($row3) {
                while ($row6 = mysqli_fetch_array($query_runUserQ)) {
                    $one = $row6['one'];
                    $two = $row6['two'];
                    $three = $row6['three'];
                    $four = $row6['four'];
                    $five = $row6['five'];
                }
            }

            $query1 = "SELECT * FROM questionsInfo";
            $query_run1 = mysqli_query($conn, $query1);
            $check_user = mysqli_num_rows($query_run1) > 0;
            $count = 0;
            $maxCount = -1;
            $holdMatch = "";
            if ($check_user) {
                while ($col = mysqli_fetch_array($query_run1)) {
                    $count = 0;

                    if ($one == $col['one']) {
                        $count++;
                    }
                    if ($two == $col['two']) {
                        $count++;
                    }
                    if ($three == $col['three']) {
                        $count++;
                    }
                    if ($four == $col['four']) {
                        $count++;
                    }
                    if ($five == $col['five']) {
                        $count++;
                    }
                    if ($maxCount < $count) {
                        if ($col['username'] != $username) {
                            $maxCount = $count;
                            // echo $maxCount;
                            $holdMatch = $col['username'];
                            // echo $holdMatch;
                        }
                    }
                }
            }
            ?>
        </div>
        <div class="row mb-2">
            <h3 class=""> Your top match is:</h3>
        </div>
        <?php
        $printMatch = "SELECT * from profileInfo WHERE '$holdMatch'=username";
        $pM = mysqli_query($conn, $printMatch);
        $pMChek = mysqli_num_rows($pM) > 0;

        if ($pMChek) {
            while ($PM = mysqli_fetch_array($pM)) {
        ?>
                <div class="container pt-2">
                    <div class="card mb-3" style="max-width: 30vw;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="https://www.georgiacenter.uga.edu/sites/default/files/sauga-2021-elodie-collier.jpg">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $PM['firstName'] . " ";
                                                            echo $PM['lastName']; ?></h5>
                                    <p class="card-text"><?php echo $PM['bio'] . "<br>"; ?></p>
                                    <ul class="social mb-0 list-inline my-3">
                                        <li class="list-inline-item"><a href class="social-link"><i class="fa fa-twitter"></i><?php $PM['instagram']; ?></a></li>
                                        <li class="list-inline-item"><a href class="social-link"><i class="fa fa-instagram"></i><?php $PM['instagram']; ?></a></li>
                                        <li class="list-inline-item"><a href class="social-link"><i class="fa fa-spotify"></i><?php $PM['instagram']; ?></a></li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Top match using Nereus.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

        <?php
            } //while
        } else {
            echo "No Match Found";
        }
        ?>
        <div class="container mt-5">
            <div class="row justify-content-begin">
                <h2>Browse:</h2>
            </div>
        </div>


        <div class="container mb-5 mt-2">
            <div class="row">
                <?php
                require('connDB.php');

                $sql = "SELECT * FROM profileInfo";
                // video stuff
                $query_run = mysqli_query($conn, $sql);
                $check_user = mysqli_num_rows($query_run) > 0;

                if ($check_user) {
                    while ($row = mysqli_fetch_array($query_run)) {

                ?>
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="bg-white rounded  shadow-sm py-5 px-4 text-center">
                                <img src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0"><?php echo $row['firstName'] . " <br>";
                                                    echo $row['lastName']; ?></h5>
                                <span class="small text-uppercase text-muted"><?php echo $row['jobTitle'] . "<br>"; ?></span>
                                <?php echo $row['bio'] . "<br>"; ?>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href class="social-link"><i class="fa fa-twitter"></i><?php $row['instagram']; ?></a></li>
                                    <li class="list-inline-item"><a href class="social-link"><i class="fa fa-instagram"></i><?php $row['instagram']; ?></a></li>
                                    <li class="list-inline-item"><a href class="social-link"><i class="fa fa-spotify"></i><?php $row['instagram']; ?></a></li>
                                </ul>
                            </div>
                        </div>
                <?php

                    }
                } else {
                    echo "No Users Found";
                }
                ?>
            </div>
        </div>
    </div>
</body>

<!---





</html>