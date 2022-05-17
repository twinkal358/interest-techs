
<?php
   $con = mysqli_connect("localhost","root","","loginsystem") or die(mysqli_error($con));
    if(!isset($_SESSION['email'])){
        session_start();
    }
   
    $confession = $_POST['confession'];
    $user_id = $_SESSION['user_id'];      
   
   
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        $insert_query = "INSERT INTO `confession`(`user_id`,`confession`) VALUES ('$user_id','$confession')";
        $inser_query_result = mysqli_query($con , $insert_query) or die(mysqli_error($con));
        $user_id = mysqli_insert_id($con);
        header('location:confession.php');
    }
 ?>   