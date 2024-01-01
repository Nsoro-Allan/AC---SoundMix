<?php
session_start();
include("Sessions.php");
include("connection.php");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


$sql = "UPDATE `admin` SET `email`='$email',`password`='$password' WHERE 1";

$result = mysqli_query($con, $sql);

if($result) {
    header("Location: admin_settings.php?msg=Successfully Updated Admin Settings");
}
else {
    echo "Failed: " . mysqli_error($con);
}
}
?>

<?php
include("connection.php");
$sql = "SELECT * FROM `admin` WHERE 1";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC - SoundMix || Settings</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../imgs/icon.png" type="image/x-icon">
</head>
<body>
    
   <?php
   include("header.php");
   ?>

   <style>

    form .top{
    padding: 10px;
    background:#d1d0d09e;
    border-radius:10px;
    }

    form .bottom{
    padding: 10px;
    background:#d1d0d09e;
    border-radius:10px;
    margin-top:10px;
    }

    label{
        font-style:unset;
    }

    form input{
        padding:8px;
        font-size:1rem;
    }

   </style>

<div class="middle-main-container">

<div class="soundmix-container">
        <div class="soundmix-title">
            <h1>Admin Settings</h1>
            <div class="line"></div>
        </div>

            <form action="" method="post">

                <div class="top">

                    <label>Current Admin Email:</label>
                    <input type="text"  name="email" value="<?php echo $row['email']?>" readonly><br><br>

                    <label>Current Admin Password:</label>
                    <input type="text" value="<?php echo $row['password']?>" readonly>

                </div>

                <div class="bottom">
                    
                    <label>New Admin Email:</label>
                    <input type="text" placeholder="Enter your new email..." name="email"><br><br>

                    <label>New Admin Password:</label>
                    <input type="password" placeholder="Enter your new password..." name="password">

                    <button type="submit" name="submit">Update</button>

                </div>

            </form>

</div>       

</div>

</body>
</html>