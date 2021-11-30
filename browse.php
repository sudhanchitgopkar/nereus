
<!DOCTYPE html>
<html>
    <h1>pls work</h1>
    <?php
        require('connDB.php');
        
        $sql = "SELECT username FROM accountInfo";
        // $db = $conn;
        // $result = mysqli_query($db, $sql);
        $result = $conn->query($sql);
        // $result = mysqli_query($conn, $sql);
        // echo sizeof($result);
        // echo [$result] . "<br>";
        // var_dump($result);
        // foreach($result as $row) {
        //     echo $row . "<br>";
        // }
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

</html>