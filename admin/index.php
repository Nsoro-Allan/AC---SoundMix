<?php
session_start();
include("connection.php");

if(isset($_POST['submit'])){
    $email=mysqli_real_escape_string($con, $_POST['email']);
    $password=mysqli_real_escape_string($con, $_POST['password']);

    $result=$con->query("select * from admin where email='$email' AND password='$password'");

    if($row=$result->fetch_assoc()){
        $_SESSION['email'] = $email;
        header("location:Dashboard.php?msg=Logged in");
    }

    else{
        echo"Failed....";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC - SoundMix || Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../imgs/icon.png" type="image/x-icon">
</head>
<body>

    <div class="container">

    <div class="left">
        <img src="../imgs/2.webp" alt="">
    </div>

    <div class="right">
        
        <form action="" method="post">
            <div class="admin-title">
            <h1>Admin - Login</h1>
            <div class="line"></div>
            </div>

            <label>Email:</label>
            <input type="email" name="email" placeholder="Enter your Email..." required>

            <label>Password:</label>
            <input type="password" name="password" placeholder="Enter your Password..." required>

            <button type="submit" name="submit">Login</button>

        </form>

    </div>

    </div>
</body>
</html>