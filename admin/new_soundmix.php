<?php
session_start();
include("Sessions.php");
include("connection.php");

if (isset($_POST['submit'])) {
    $soundmix_name = mysqli_real_escape_string($con, $_POST['soundmix_name']);

    $soundmix_category = mysqli_real_escape_string($con, $_POST['soundmix_category']);

    // File Upload Logic
    $target_folder = "uploads/";
    $soundmix_audio = $_FILES['soundmix_audio']['name'];
    $target_path = $target_folder . $soundmix_audio;
    $upload_success = move_uploaded_file($_FILES['soundmix_audio']['tmp_name'], $target_path);

    if ($upload_success) {
        $query = "INSERT INTO soundmixes (soundmix_name, soundmix_audio, soundmix_category) VALUES ('', '$soundmix_name', '$soundmix_audio', '$soundmix_category')";
        $result = $con->query($query);

        if ($result) {
            header("location:view_soundmixes.php?msg=Added New SoundMix Successfully...");
            exit();
        } else {
            echo '<center><div class="error"><p>Failed to add soundmix to the database...</p></div></center>';
        }
    } else {
        echo '<center><div class="error"><p>Failed to upload soundmix file...</p></div></center>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC - SoundMix || New Soundmix</title>
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
            <h1>Add New Soundmix</h1>
            <div class="line"></div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <label>SoundMix Name:</label>
            <input type="text" name="soundmix_name" placeholder="Enter the name of soundmix...">

            <label>SoundMix Audio:</label>
            <input type="file" name="soundmix_audio" accept="audio/*" required>

            <label>SoundMix Category:</label>
            <select name="soundmix_category">

                <option selected disabled>Select your soundmix category...</option>

                <option value="trap">Trap</option>

                <option value="drill">Drill</option>

                <option value="afrobeat">Afrobeat</option>

                <option value="pop">Pop</option>

            </select>

            <button type="submit" name="submit">Add New SoundMix</button>
        </form>
    </div>

</div>

</body>
</html>


