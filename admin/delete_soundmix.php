<?php
include("connection.php");

$id = $_GET['id'];
$sql = "DELETE FROM `soundmixes` WHERE id = $id";
$result = mysqli_query($con, $sql);
if($result){
    header("Location: view_soundmixes.php?msg=Just Deleted a soundmixes...");
}
else {
    echo "Failed: " . mysqli_error($con);
}
?>

