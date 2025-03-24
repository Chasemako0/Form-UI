<?php
include ("config/database.php");
//demo project no security and validation
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Form-Register</title>
</head>
<body>
<section>
    <h1>REGISTER</h1>
</section>
<div class="container">
    <form action="handle_registration.php" method="post">
    <label for="uname">Username <br>
        <input type="text" name="uname" value="">
    </label><br><br>
    <label for="email">Email <br>
        <input type="email" name="email" value="">
    </label><br><br>
    <label for="password">Password <br>
        <input type="password" name="password" value="">
    </label><br><br>
    <button type="submit" name="submit" class="submit">SignUp</button>
    </form>
    <br>
</div>
<div class="extra">
    <a href="view_user.php"><button type="submit" name="users" class="other_buttons">Users</button></a>
    <a href="index.php"><button type="submit" name="logout" class="other_buttons">Logout</button></a>
</div>
</body>
</html>
