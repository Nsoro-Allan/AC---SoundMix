<?php
session_start();
include("Sessions.php");
include("connection.php");

$id = $_GET['id'];


if(isset($_POST['submit'])){
$soundmix_name=mysqli_real_escape_string($con, $_POST['soundmix_name']);
$soundmix_audio=$_POST['soundmix_audio'];


$sql = "UPDATE `soundmixes` SET `soundmix_name`='$soundmix_name',`soundmix_audio`='$soundmix_audio'WHERE id=$id";

$result = mysqli_query($con, $sql);

if($result) {
    header("Location: view_soundmixes.php?SoundMix Data Updated...");
}
else {
    echo "Failed: " . mysqli_error($con);
}
}
?>

<?php
    include("connection.php");
   $sql = "SELECT * FROM `soundmixes` WHERE id = $id LIMIT 1";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC - SoundMix || Edit Soundmix</title>
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
            <h1>Edit SoundMix</h1>
            <div class="line"></div>
        </div>

        <div class="soundmix-content">
        <form action="" method="post">
            <label>SoundMix Name:</label>
            <input type="text" name="soundmix_name" value="<?php echo $row['soundmix_name']?>">

            <label>SoundMix Audio:</label>
            <input type="file" name="soundmix_audio">

            <label>Current SoundMix Audio:</label>
            <audio src="uploads/<?php echo $row['soundmix_audio']?>" accept="audio/*" style="margin-top:10px;" controls></audio>

            <button type="submit" name="submit">Update SoundMix</button>
        </form>
        </div>

</div>   

</div>        

</body>
</html>