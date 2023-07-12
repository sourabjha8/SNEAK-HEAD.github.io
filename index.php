<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4277854baa.js" crossorigin="anonymous"></script>
    <script src="func.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>SNEAK-HEAD</title>
</head>

<body>

    <!-- nav bar -->

    <header>
        <a href="index.php" class="logo">SNEAK-HEAD</a>
        <nav>
            <ul class="cen-nav">
                <li><a href="store-shoe.php">Store</a></li>
                <!-- <li><a href="#">Men</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Children</a></li> -->
            </ul>
        </nav>
        <div class="search">
            <div class="searchbox">
                <input type="text" placeholder="Search here....." class="nav-icon" id="myInput" onkeyup="search()">
            </div>
            <!-- <a href="#"><i class="fa-solid fa-magnifying-glass icon searchBtn"></i></a> -->
            <!-- <a href="#"><i class="fa-solid fa-xmark icon closeBtn"></i></a> -->
            <a href="mycart.php" class="nav-icon"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
            <a href="form.html" class="nav-icon"><i class="fa-regular fa-user icon"></i></a>
            <!-- <a href="#">Total Price:  &#8377; 100</a> -->

        </div>
    </header>

    <!-- Banner -->

    <div class="container">
        <div class="sub-container">
            <img src="banner 3.png" alt="" class="background">
            <img src="nike-sneak.png" alt="" class="foreground">
            <div id="text">
                <h1>SNEAK-HEAD</h1>
                <h3>Sneakers, Simplified.</h3>
            </div>
        </div>
    </div>

    <!-- Video Card -->

    <div class="company-container">
        <div class="heading">
            <h2>Our Brands</h2>
        </div>

        <div class="video-card-container">
            <div class="video-card">
                <img src="image/nike-logo.png" class="video-card-image" alt="">
                <video src="image/Nike Logo Animation _ Motion Graphics _ 2D Animation _ Motionalistic.mp4"
                    onmouseover="this.play()" onmouseleave="this.pause()" muted loop class="card-video"></video>
            </div>
            <div class="video-card">
                <img src="image/adidas-logo.png" class="video-card-image" alt="">
                <video src="image/ADIDAS LOGO ANIMATION.mp4" onmouseover="this.play()" onmouseleave="this.pause()" muted
                    loop class="card-video"></video>
            </div>
            <div class="video-card">
                <img src="image/puma-logo.png" class="video-card-image" alt="">
                <video src="image/MG 101 - DARK SMOKE PUMA LOGO ANIMATION.mp4" onmouseover="this.play()"
                    onmouseleave="this.pause()" muted loop class="card-video"></video>
            </div>
            <div class="video-card">
                <img src="image/converse-logo.png" class="video-card-image" alt="">
                <video src="image/Converse Logo Animation After effect.mp4" onmouseover="this.play()"
                    onmouseleave="this.pause()" muted loop class="card-video"></video>
            </div>
            <div class="video-card">
                <img src="image/vans-logo.jpg" class="video-card-image" alt="">
                <video src="image/Vans Logo Animation.mp4" onmouseover="this.play()" onmouseleave="this.pause()" muted
                    loop class="card-video"></video>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer-start">
        <footer class="text-white">
            <div class="container-fluid pt-5 pb-5">
                <div class="row">
                    <div class="col-md-2">
                        <h1 class="fw-bold mt-5 pt-2">SNEAK-HEAD</h1>
                    </div>
                    <div class="col-md-3">
                        <h4 class="fw-bold mb-3">FIND US</h4>
                        <a href="https://sourabjha8.github.io/portfolio.github.io/"><i class="fa-brands fa-instagram" style="color: #f5f5f5;"></i></a>
                        <a href="https://sourabjha8.github.io/portfolio.github.io/"><i class="fa-brands fa-facebook" style="color: #f5f5f5;"></i></a>
                        <a href="https://sourabjha8.github.io/portfolio.github.io/"><i class="fa-brands fa-discord" style="color: #f5f5f5;"></i></a>
                    </div>
                    <div class="col-md-3">
                        <h4 class="fw-bold mb-3">CONTACT</h4>
                        <ul>
                            <li><a href="https://goo.gl/maps/e7KwHJ2CSaxSEcwg7"><i class="fa-solid fa-location-dot"
                                        style="color: #f5f5f5;"></i>New Delhi, New Delhi</a></li>
                            <li><a href="tel:7011191242"><i class="fa-solid fa-phone" style="color: #f5f5f5;"></i>+91
                                    7011191242</a></li>
                            <li><a href=mailto:“sourabjha805@gmail.com”><i class="fa-solid fa-envelope"
                                        style="color: #f5f5f5;"></i>sourabjha805@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 about-points">
                        <h4 class="fw-bold mb-3">ABOUT SNEAK-HEAD</h4>
                        <ul>
                            <li><a href="https://sourabjha8.github.io/portfolio.github.io/">News</a></li>
                            <li><a href="https://sourabjha8.github.io/portfolio.github.io/">Blogs</a></li>
                            <li><a href="https://sourabjha8.github.io/portfolio.github.io/">Mission</a></li>
                            <li><a href="https://sourabjha8.github.io/portfolio.github.io/">Physical Store</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>
    </div>

    <script>
        const search = () =>{
            let filter = document.getElementById
        }
    </script>

</body>

</html>