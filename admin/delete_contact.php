<?php
include("connection.php");

$id = $_GET['id'];
$sql = "DELETE FROM `contacts` WHERE id = $id";
$result = mysqli_query($con, $sql);
if($result){
    header("Location: view_contacts.php?msg=Just Deleted a user contact...");
}
else {
    echo "Failed: " . mysqli_error($con);
}
?>

