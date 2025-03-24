<?php
global $conn;
include "config/database.php";

$sql="SELECT * FROM users";
$result=$conn->query($sql);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/view_user.css">
    <title>Add_Users</title>
</head>
<body>
<section>
    <h1 >Admin Dashboard</h1>
</section>
<table>

    <thead>
    <tr style="background-color: #f2f2f2;">
        <th >Username</th>
        <th >Email</th>
        <th >Password</th>
        <th >Action</th>

    </tr>
    </thead>
    <tbody>
    <?php
    if($result->num_rows > 0){
        while($row=mysqli_fetch_assoc($result)){



    ?>
    <tr>
        <td ><?php echo $row["username"]; ?></td>
        <td > <?php echo $row["email"]; ?>  </td>
        <td >  <?php echo $row["password"]; ?>      </td>
        <td><a href="edit_users.php?id=<?php echo $row["id"]?>"><button type="submit" name="edit" style="width: 60px">EDIT</button></a></td>
    </tr>
    <?php
        }

    }
    else{
        echo"<tr>
            <td colspan='4'>No records found</td>
            </tr>";
    }



    ?>
    </tbody>
</table>
<br><br>
   <a href="index.php"> <button type="submit" name="add_users">Add Users</button></a>
<a href="home.php"> <button type="submit" name="home">Home</button></a>

</body>
</html>