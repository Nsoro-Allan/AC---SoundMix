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
    <title>AC - SoundMix || Soundmixes</title>
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
     padding:15px;
    }

    td a{
        color:#fff;
        padding:8px 15px;
        background:black;
        border-radius:4px;
        text-decoration:none;
        border:1.4px solid black;
        transition:all ease-in-out 0.5s;
        margin-left:-5px;
        margin-right:4%;
    }

    td a:hover{
        color:black;
        background:transparent;
        transition:all ease-in-out 0.5s;
    }

    .soundmix-content-table{
        width:80%;
        margin-top:20px;
        margin-left:50px;
    }

  </style>

  <div class="middle-main-container">

  <div class="soundmix-container">

        <div class="soundmix-title">
            <h1>View Soundmixes</h1>
            <div class="line"></div>
        </div>

        <div class="soundmix-content-table">
            <table>

                <tr>
                    <th>#</th>
                    <th>SoundMix Name</th>
                    <th>Soundmix Audio</th>
                    <th>Actions</th>
                </tr>

                <?php
                 $query = mysqli_query($con,"select * from soundmixes");
                 while($row = mysqli_fetch_array($query))
                 {
                                       
                ?>

                <tr>

                <td><?php echo $row['id']; ?></td>

                <td><?php echo $row['soundmix_name']; ?></td>

                <td>
                    <audio src="uploads/<?php echo $row['soundmix_audio']; ?>" controls ></audio>
                </td>

                <td>
                <a href="edit_soundmix.php?id=<?php echo $row['id']?>">Edit</a><br><br>

                <a href="delete_soundmix.php?id=<?php echo $row['id']?>">Delete</a>
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