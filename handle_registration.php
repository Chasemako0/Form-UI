<?php
include("config/database.php");

if(isset($_POST['submit'])){
    extract($_POST);

    $sql="INSERT INTO users(username,email,password) VALUES('$uname','$email','$password')";

    $result=$conn->query($sql);
    if($result){
        header("location:view_user.php");

        echo "<p id='message' style='color: green; text-align: center;'>User created successfully</p>";
    }else{
        header("location:index.php");
        echo "<p id='message' style='color: green; text-align: center;'>Registration Unsuccessful</p>";
    }
    exit();
}



?>

<script src="assets/js/timer.js"></script>
