<?php
include("includes/init.php");
$title = "Home";
$target = "Home";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Phone wallpaper</title>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="/__/firebase/7.21.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="/__/firebase/7.21.0/firebase-analytics.js"></script>

    <!-- Initialize Firebase -->
    <script src="/__/firebase/init.js"></script>
</head>

<body>
    <header>
        <?php
        include("includes/navbar.php");
        ?>
    </header>
    <div class="vid-div">
        <video id="video1" autoplay muted loop>
            <source src="./images/video.mp4" type="video/mp4"></video>
    </div>


    <div class="aboutUs" id="aboutUs">
        <h2>We are <br> here to </h2>
        <p>Turn your daily moments into aesthetic wallpapers</p>
    </div>

    <div class="featured-in" id="featured-in">
        <div class="card">
            <div class="image">
                <img src="images/avatar-1.jpg" alt="avatar-1">
            </div>
            <h2>New York Times</h2>
            <p>You can never have enough of this website. Period. The easiest way to know is to try it yourself today. One of the best life recommendation of our readers.</p>
        </div>

        <div class="card">
            <div class="image">
                <img src="images/avatar-2.jpg" alt="avatar-2">
            </div>
            <h2>Los Angeles Times</h2>
            <p>We only speak for the best, and we decided to leave a note here. This is our readers' go-to website for their devices' wallpaper. This is THE site. </p>
        </div>

        <div class="card">
            <div class="image">
                <img src="images/avatar-3.jpg" alt="avatar-3">
            </div>

            <div class="text">
                <h2>Star News -San Diego</h2>
                <p>Multiple users' use cases have been featured in other newspaper, and a few articles are dedicated solely to stan for the website, from both photographers and users.</p>
            </div>
        </div>

    </div>

    <!--email us/ subscribe-->
    <div class="contactUs" id="subscribe">
        <h2>Savor your daily dose of inspiration</h2>
        <form id="subscribe-box" name="subscribe">
            <input id="email1" type="email" placeholder="email address">
        </form>
        <button id="subsribe">Subscribe</button>
    </div>

    <footer>
        <?php
        include("includes/footer.php");
        ?>
    </footer>

</body>

</html>