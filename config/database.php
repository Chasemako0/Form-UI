<?php
$servername="localhost";
$username="root";
$password="";
$dbname="userdata";



$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("<p style='color: red;text-align: center;'>Connection failed to establish".$conn->connect_error."</p>");
}else{
    echo "<p id='message' style='color: green; text-align: center;'>Connected successfully</p>";
}
?>

<script src="/assets/js/timer.js"></script>