<?php
include("admin/connection.php");

if(isset($_POST['submit'])){
    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $result=$con->query("insert into contacts values('','$name','$email','$subject','$message')");

    if($result){
        header("location:home?msg=Message Sent Successfully...");
    }

    else{
        header("location:home?msg=Failed to send message...");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC - SoundMix</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./imgs/icon.png" type="image/x-icon">
</head>
<body>
    <div class="main-container">
        
        <!-- Navbar Starts Here -->
        <header>
            <h1><a href="./home">AC - SoundMix</a></h1>

        <div class="nav">
        <ul>
           <li><a href="#home">Home</a></li>
           <li><a href="#about">About Us</a></li>
           <li><a href="#soundmix">SoundMixes</a></li>
           <li><a href="#contact">Contact Us</a></li>
        </ul>
        </div>

        </header>
        <!-- Navbar Ends Here -->

        <!-- Header Container Starts Here -->
        <div class="header-container" id="home">

            <div class="left-container">
                <h1>Hello...</h1>
                <p>Welcome to our pratform <br> where we provide the best of our soundmixes that we have for you.</p>
                <a href="#soundmix">Get Started...</a>
            </div>

            <div class="right-container">
                <img src="./imgs/1.webp" alt="img">
            </div>

        </div>
        <!-- Header Container Ends Here -->

        <div class="long-line"></div>

        <!-- About Us Section Starts Here  -->
        <section id="about">
            <div class="about-title">
                <h1>About Us</h1>
                <div class="line"></div>
            </div>
        <div class="about-container">
            <div class="about-left">
                <img src="./imgs/2.webp" alt="">
            </div>
            <div class="about-right">
                <h1>About Us</h1>
                <p>This is a great platform which is providing you with the best <br> soundmixes which are high quality and great for your ears.</p>
                <a href="#soundmix">Get Started...</a>
            </div>
        </div>

        </section>
        <!-- About Us Section Ends Here  -->

        <div class="long-line"></div>

        <!-- Soundmix Section Starts Here -->
        <section id="soundmix">
            <div class="soundmix-title">
                <h1>SoundMixes</h1>
                <div class="line"></div>
            </div>

            <div class="soundmix-container">

            <?php

            // Retrieve room information from database
            $sql = "SELECT soundmix_name, soundmix_audio FROM soundmixes";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $soundmix_name = $row['soundmix_name'];
                $soundmix_audio = $row['soundmix_audio'];

                echo'
                <div class="soundmix-card">
                    <img src="./imgs/icon.png" alt="">
                    <h1>' . $soundmix_name . '</h1>
                    <audio src="./admin/uploads/' . $soundmix_audio . '" controls></audio>
                </div>

                ';

            }
            ?> 

            
            </div>
        </section>
        <!-- Soundmix Section Ends Here -->

        <div class="long-line"></div>

        <!-- Contact Us Section Starts Here -->
        <section id="contact">
            <div class="contact-title">
                <h1>Contact Us</h1>
                <div class="line"></div>
            </div>

            <div class="contact-container">
                <form action="" method="post">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name..." required>

                    <label>Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email..." pattern="[^ @]*@[^ @]*" required>

                    <label>Subject:</label>
                    <input type="text" name="subject" id="subject" placeholder="Enter Your Subject..." required>

                    <label>Message:</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter Your Message..." required></textarea>

                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>

        </section>
        <!-- Contact Us Section Ends Here -->

        <!-- Footer Starts Here -->
        <footer>
            <p>All Rights Reserved &copy; <a href="https://allancorp.netlify.app">AllanCorp</a> - 2023</p>
        </footer>
        <!-- Footer Ends Here -->
    </div>
</body>
</html>
