<?php

global $conn;
include ("config/database.php");

//added it because of the undefined
global $row;

if(isset($_GET["id"])){
    $sql="SELECT * FROM users WHERE id=".$_GET["id"];
    $result=$conn->query($sql);
    $row=mysqli_fetch_assoc($result);

}

if(isset($_POST["update"])){
    extract($_POST);
    $sql="UPDATE users SET username='$uname',email='$mail',password='$pword' WHERE id=".$_GET['id'];
    $result=$conn->query($sql);
    if ($result){
        echo "<p id='message' style='color: green; text-align: center;'>Data updated successfully</p>";
    }else{
        echo "<p id='message' style='color: green; text-align: center;'>An error occurred please try again</p>";

    }
    exit();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
<form action="edit_users.php?id=<?php echo $row["id"]?>"  method="post">
    <label>Username <br>
        <input type="text" name="uname" value="<?php echo $row["username"] ?>">
    </label> <br><br>
    <label>Email <br>
        <input type="email" name="mail" value="<?php echo $row["email"]?>">
    </label> <br><br>
    <label>Password <br>
        <input type="password" name="pword" value="<?php echo $row["password"]?>">
    </label> <br><br>

    <button type="submit" name="update" style="width: 80%;background-color: #28a745;height: 40px">Update </button>
</form>
</body>
</html>