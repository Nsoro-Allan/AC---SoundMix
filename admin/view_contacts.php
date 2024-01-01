<?php
session_start();
include("Sessions.php");
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC - SoundMix || Contacts</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../imgs/icon.png" type="image/x-icon">
</head>
<body>
    
  <?php
  include("header.php");
  ?>

<style>

table{
width: 100%;
border-collapse: collapse;
padding:10px;
}

th{
 padding:15px; 
 text-align:left;
 background:black;
 color:#fff;
}


tr{
 padding:10px;
}

tr:nth-child(even){
 background-color: #f2f2f2;
}

td{
 padding:13px;
}

td a{
    color:black;
}

.soundmix-content-table{
    width:80%;
    margin-top:50px;
}

</style>

<div class="middle-main-container">

<div class="soundmix-container">

    <div class="soundmix-title">
        <h1>View Contacts</h1>
        <div class="line"></div>
    </div>

    <div class="soundmix-content-table">
        <table>

            <tr>
                <th>#</th>
                <th>Contact Name</th>
                <th>Contact Email</th>
                <th>Contact Subject</th>
                <th>Contact Message</th>
                <th>Actions</th>
            </tr>

            <?php
             $query = mysqli_query($con,"select * from contacts");
             while($row = mysqli_fetch_array($query))
             {
                                   
            ?>

            <tr>

            <td><?php echo $row['id']; ?></td>

            <td><?php echo $row['name']; ?></td>

            <td><?php echo $row['email']; ?></td>

            <td><?php echo $row['subject']; ?></td>

            <td><?php echo $row['message']; ?></td>

            <td>
            <a href="delete_contact.php?id=<?php echo $row['id']?>">Delete</a>
            </td>

            </tr>

            <?php
            }
            ?>

        </table>
    </div>
</div>   

</div>


</body>
</html>