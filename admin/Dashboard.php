<?php
session_start();
include("Sessions.php");
include("connection.php");

?>

<?php
// Total number of soundmixes
$sql = "SELECT COUNT(*) AS total_soundmixes FROM soundmixes";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$total_soundmixes = $row["total_soundmixes"];

// Total number of contacts
$sql = "SELECT COUNT(*) AS total_contacts FROM contacts";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$total_contacts = $row["total_contacts"];


// Close database connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC - SoundMix || Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../imgs/icon.png" type="image/x-icon">

</head>
<body>

<?php
  include("header.php");
?>

<div class="middle-main-container">

<div class="soundmix-container">
        <div class="soundmix-title">
            <h1>Admin Dashboard</h1>
            <div class="line"></div>
        </div>

        <div class="soundmix-content">

          <!-- Total Number of Soundmixes -->
          <div class="soundmix-left">
            <img src="imgs/soundmixes.ico" alt="">
            <h1>Number of Soundmixes:</h1>
            <a href="./view_soundmixes.php">
              <div class="soundmix-total-number">
              <a href="./view_soundmixes.php"><?php echo $total_soundmixes; ?></a>
            </div>
            </a>
          </div>

          <!-- Total Number of User Contacts -->
          <div class="soundmix-right">
            <img src="imgs/user_contacts.ico" alt="">
            <h1>Number of User Contacts:</h1>
            <a href="./view_soundmixes.php">
            <div class="soundmix-total-number">
              <a href="./view_contacts.php"><?php echo $total_contacts; ?></a>
            </div>
            </a>
          </div>

        </div>
</div>       

</div>

</body>
</html>