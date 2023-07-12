<?php

session_start();

?>

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
    <link rel="stylesheet" href="store.css">
    <title>Nike-Store</title>
</head>

<body>

    <!-- nav bar -->

    <header>
        <a href="index.php" class="logo">SNEAK-HEAD</a>
        <nav>
            <ul class="cen-nav">
                <li><a href="#">Store</a></li>
                <!-- <li><a href="#">Men</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Children</a></li> -->
            </ul>
        </nav>
        <div class="search">
            <div class="searchbox">
                <input type="text" placeholder="Search here.....">
            </div>
            <!-- <a href="#"><i class="fa-solid fa-magnifying-glass icon searchBtn"></i></a> -->
            <!-- <a href="#"><i class="fa-solid fa-xmark icon closeBtn"></i></a> -->
            <?php 
                $count=0;
                if(isset($_SESSION['cart']))
                {
                    $count=count($_SESSION['cart']);
                }
            ?>
            <a href="mycart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php echo $count ?></sup></a>
            <a href="form.html"><i class="fa-regular fa-user icon"></i></a>
            <!-- <a href="#">Total Price: &#8377; 100</a> -->

        </div>
    </header>

    <!-- Video Banner -->
    <div class="company-banner">

        <video autoplay loop muted class="back-video">
            <source src="nike-banner.mp4">
        </video>

        <div class="video-banner">
            <img src="nike-logo.png" alt="NIKE-LOGO">
            <!-- <a href="#">Explore</a> -->
        </div>
    </div>

    <!-- Product Section -->

    <div class="product-section product-container">
        <div class="heading">
            <h2>NIKE</h2>
            <hr>
        </div>
        <div class="col-md-12 product-content">
            <!-- products -->
            <form action="manage-cart.php" method="POST">
                <div class="product-box">
                    <img src="nike-product/air jordan 1 low.jpg" alt="product" class="product-img">
                    <h2 class="product-title">Air Jordan 1</h2>
                    <span class="price">&#8377; 8295</span>
                    <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Air Jordan 1">
                    <input type="hidden" name="Price" value="8295">
                </div>
            </form>
            <form action="manage-cart.php" method="POST">
                <div class="product-box">
                    <img src="nike-product/air jordan low SE.jpg" alt="product" class="product-img">
                    <h2 class="product-title">Air Jordan Low SE</h2>
                    <span class="price">&#8377; 10295</span>
                    <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Air Jordan Low SE">
                    <input type="hidden" name="Price" value="8295">
                </div>
            </form>
            <form action="manage-cart.php" method="POST">
                <div class="product-box">
                    <img src="nike-product/airforce.jpg" alt="product" class="product-img">
                    <h2 class="product-title">Nike Air Force 1</h2>
                    <span class="price">&#8377; 7495 </span>
                    <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Nike Air Force 1">
                    <input type="hidden" name="Price" value="8295">
                </div>
            </form>
            <form action="manage-cart.php" method="POST">
                <div class="product-box">
                    <img src="nike-product/Nike air max 90.jpg" alt="product" class="product-img">
                    <h2 class="product-title">Nike Air Max 90</h2>
                    <span class="price">&#8377; 11895 </span>
                    <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Nike Air Max 90">
                    <input type="hidden" name="Price" value="11895">
                </div>
            </form>
            <form action="manage-cart.php" method="POST">
                <div class="product-box">
                    <img src="nike-product/nike dunk high premium.jpg" alt="product" class="product-img">
                    <h2 class="product-title">Nike Dunk High Premium</h2>
                    <span class="price">&#8377; 12295 </span>
                    <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Nike Dunk High Premium">
                    <input type="hidden" name="Price" value="12295">
                </div>
            </form>
            <form action="manage-cart.php" method="POST">
                <div class="product-box">
                    <img src="nike-product/nike revolution 6.jpg" alt="product" class="product-img">
                    <h2 class="product-title">Nike Revolution 6</h2>
                    <span class="price">&#8377; 3695 </span>
                    <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Nike Revolution 6">
                    <input type="hidden" name="Price" value="3695">
                </div>
            </form>
            <form action="manage-cart.php" method="POST">
                <div class="product-box">
                    <img src="nike-product/nike pegasus 40.jpg" alt="product" class="product-img">
                    <h2 class="product-title">Nike Pegasus</h2>
                    <span class="price">&#8377; 12795 </span>
                    <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Nike Pegasus">
                    <input type="hidden" name="Price" value="12795">
                </div>
            </form>
            <form action="manage-cart.php" method="POST">
                <div class="product-box">
                    <img src="nike-product/Nike Dunk Mid.jpg" alt="product" class="product-img">
                    <h2 class="product-title">Nike Dunk Mid</h2>
                    <span class="price">&#8377; 9695 </span>
                    <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Nike Dunk Mid">
                    <input type="hidden" name="Price" value="9695">
                </div>
            </form>
        </div>
    </div>

    <!-- <div class="col-md-1"> -->
    <!-- side nav -->

    <!-- <div class="cart">
                    <h2 class="cart-title">Your Cart</h2>
                    <div class="cart-content">
                        <div class="cart-box">
                            <img src="nike-product/air jordan 1 low.jpg" alt="" class="cart-img">
                            <div class="detail box">
                                <div class="cart-product-title">Nike Air Jordan 1</div>
                                <div class="cart-price">&#8377; xxxx</div>
                                <input type="number" value="1" class="cart-quantity">
                            </div> -->
    <!-- remove cart -->
    <!-- <i class="fa-solid fa-trash cart-remove" style="color: #000000;"></i>
                        </div>
                    </div>
                    <div class="total">
                        <div class="total-title">Total</div>
                        <div class="total-price">&#8377; xxxx</div>
                    </div>

                    <button type="button" class="btn-buy">Buy Now</button>
                    <i class="fa-solid fa-xmark" id="close-cart" idstyle="color: #000000;"></i>
                </div>
            </div>
    </div> -->

    <!-- ADIDAS -->

    <!-- Video Banner -->
    <div class="company-banner adidas">

        <video autoplay loop muted class="back-video">
            <source src="adidas-product/adidas commercial.mp4">
        </video>

        <div class="video-banner">
            <img src="adidas-product/adidas-logo.png" alt="NIKE-LOGO">
            <!-- <a href="#">Explore</a> -->
        </div>
    </div>

    <!-- Product Section -->

    <div class="product-section product-container">
        <div class="heading">
            <h2>ADIDAS</h2>
            <hr>
        </div>
        <div class="col-md-12 product-content">
            <!-- products -->
            <form action="manage-cart.php" method="POST">
            <div class="product-box">
                <img src="adidas-product/adidas superstar.jpg" alt="product" class="product-img">
                <h2 class="product-title">Adidas SuperStar</h2>
                <span class="price">&#8377; 7999 </span>
                <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Adidas SuperStar">
                    <input type="hidden" name="Price" value="7999">
            </div>
            </form>
            <form action="manage-cart.php" method="POST">
            <div class="product-box">
                <img src="adidas-product/adidasXgucci.jpg" alt="product" class="product-img">
                <h2 class="product-title">Adidas X Gucci </h2>
                <span class="price">&#8377; 21990 </span>
                <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Adidas X Gucci">
                    <input type="hidden" name="Price" value="21990">
            </div>
            </form>
            <form action="manage-cart.php" method="POST">
            <div class="product-box">
                <img src="adidas-product/Ultraboost_lightshoe.jpg" alt="product" class="product-img">
                <h2 class="product-title">Ultraboost Light Shoe</h2>
                <span class="price">&#8377; 18999 </span>
                <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                <input type="hidden" name="Item_Name" value="Ultraboost Light Shoe">
                 <input type="hidden" name="Price" value="18999">
            </div>
            </form>
            <form action="manage-cart.php" method="POST">
            <div class="product-box">
                <img src="adidas-product/CourtBeat_Court_Lifestyle_Shoes_White_HQ1762_01_standard.jpg" alt="product" class="product-img">
                <h2 class="product-title">Courtbeat Court</h2>
                <span class="price">&#8377; 4199 </span>
                <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Courtbeat Court">
                    <input type="hidden" name="Price" value="4199">
            </div>
            </form>
            <form action="manage-cart.php" method="POST">
            <div class="product-box">
                <img src="adidas-product/Adissage_Slides_Black_F35580_01_standard.jpg" alt="product" class="product-img">
                <h2 class="product-title">Adissage Slides</h2>
                <span class="price">&#8377; 1799 </span>
                <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Adissage Slides">
                    <input type="hidden" name="Price" value="1799">
            </div>
            </form>
            <form action="manage-cart.php" method="POST">
            <div class="product-box">
                <img src="adidas-product/Ultra_4D_Shoes_Black_GY5913_01_standard.jpg" alt="product" class="product-img">
                <h2 class="product-title">Ultra 4D </h2>
                <span class="price">&#8377; 15399 </span>
                <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Ultra 4D">
                    <input type="hidden" name="Price" value="15399">
            </div>
            </form>
            <form action="manage-cart.php" method="POST">
            <div class="product-box">
                <img src="adidas-product/adidas_by_Stella_McCartney_Seeulater_Shoes_Black_H06157_01_standard.jpg" alt="product" class="product-img">
                <h2 class="product-title">Adidas by Stell McCartney </h2>
                <span class="price">&#8377; 10199 </span>
                <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Adidas by McCartney">
                    <input type="hidden" name="Price" value="10199">
            </div>
            </form>
            <form action="manage-cart.php" method="POST">
            <div class="product-box">
                <img src="adidas-product/Supernova_2.0_Shoes_Blue_HR0101_01_standard.jpg" alt="product" class="product-img">
                <h2 class="product-title">Supernova 2.0 </h2>
                <span class="price">&#8377; 5999 </span>
                <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Supernova 2.0">
                    <input type="hidden" name="Price" value="5999">
            </div>
            </form>
        </div>
    </div>

    <!-- PUMA -->

    <!-- Video Banner -->
    <div class="company-banner adidas">

        <video autoplay loop muted class="back-video">
            <source src="puma-product/puma-video.mp4">
        </video>

        <div class="video-banner">
            <img src="puma-product/puma logo.png" alt="NIKE-LOGO">
            <!-- <a href="#">Explore</a> -->
        </div>
    </div>

    <!-- Product Section -->

    <div class="product-section product-container">
        <div class="heading">
            <h2>PUMA</h2>
            <hr>
        </div>
        <div class="col-md-12 product-content">
            <!-- products -->
            <form action="manage-cart.php" method="POST">
            <div class="product-box">
                <img src="puma-product/slip stream cord.jpg" alt="product" class="product-img">
                <h2 class="product-title">Slip Stream Cord </h2>
                <span class="price">&#8377; 7199 </span>
                <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Slip Stream Cord">
                    <input type="hidden" name="Price" value="7199">
            </div>
            </form>
            <form action="manage-cart.php" method="POST">
            <div class="product-box">
                <img src="puma-product/RS-X-Efekt-Track-Meet-Unisex-Sneakers.jpeg" alt="product" class="product-img">
                <h2 class="product-title">RS-X Efekt Track Meet </h2>
                <span class="price">&#8377; 5999 </span>
                <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="RS-X Efekt Track Meet">
                    <input type="hidden" name="Price" value="5999">
            </div>
            </form>
            <form action="manage-cart.php" method="POST">
            <div class="product-box">
                <img src="puma-product/RS-X-Geek-Unisex-Sneakers.jpg" alt="product" class="product-img">
                <h2 class="product-title">RS-X Geek </h2>
                <span class="price">&#8377; 10999 </span>
                <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="RS-X Greek">
                    <input type="hidden" name="Price" value="10999">
            </div>
            </form>
            <form action="manage-cart.php" method="POST">
            <div class="product-box">
                <img src="puma-product/PUMA-x-one8-PWRFRAME-Aerogram-Unisex-Sneakers.jpg" alt="product" class="product-img">
                <h2 class="product-title">Puma x one8 PWRFRAME Aerogram </h2>
                <span class="price">&#8377; 9999 </span>
                <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="Puma x one8 PWRFRAME Aerogram">
                    <input type="hidden" name="Price" value="9999">
            </div>
            </form>
            <form action="manage-cart.php" method="POST">
            <div class="product-box">
                <img src="puma-product/BMW-M-Motorsport-X-Ray-Speed-Unisex-Sneakers.jpg" alt="product" class="product-img">
                <h2 class="product-title">BMW M Motorsport X-Ray Speed </h2>
                <span class="price">&#8377; 8999 </span>
                <button type="submit" name="Add_To_Cart"><i class="fa-solid fa-cart-shopping add-cart"></i></button>
                    <input type="hidden" name="Item_Name" value="BMW M Motorsport X-Ray Speed">
                    <input type="hidden" name="Price" value="8999">
            </div>
            </form>
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
    <script src="store-fucntion.js"></script>
</body>

</html>