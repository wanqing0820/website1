<?php
include("includes/init.php");
$title = "Gallery";
$target2 = "Gallery";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Phone wallpaper</title>
</head>
<body>
    <header>
    <?php
    include("includes/navbar.php");
    ?>
    </header>

    <section class="Trending" id="trending">
        <div class="title">
            <p>Find your very own style. Look no further to begin your journey. Wait no further and delve into our vast collection of aesthetic images from our very own team of passionate photographers around the globe. <strong>Life is too short for boring wallpapers.</strong> </p>
        </div>
        <div class="photo-collage">
            <div class="photo" id = "photo-1">
                <a href = '#'>
                    <img src="./images/photo-1.jpg" alt="">
                </a>
            </div>
            <div class="photo" id = "photo-2">
                <a href = '#'>
                    <img src="./images/photo-2.jpg" alt="">
                </a>
</div>
            <div class="photo" id = "photo-3">
                <a href = '#'>
                    <img src="./images/photo-3.jpg" alt="">
                </a>
</div>
            <div class="photo" id = "photo-4">
                <a href = '#'>
                    <img src="./images/photo-4.jpg" alt="">
                </a>
</div>
            <div class="photo" id = "photo-5">
                <a href = '#'>
                    <img src="./images/photo-5.jpg" alt="">
                </a>
</div>
            <div class="photo" id = "photo-6">
                <a href = '#'>
                    <img src="./images/photo-6.jpg" alt="">
                </a>
</div>
            <div class="photo" id = "photo-7">
                <a href = '#'>
                    <img src="./images/photo-7.jpg" alt="">
                </a>
</div>

        </div>

    </section>
    <footer>
    <?php
    include("includes/footer.php");
    ?>
    </footer>


</body>
</html>
