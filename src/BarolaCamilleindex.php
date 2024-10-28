<?php
// Start the session at the beginning of the file
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosMoShop</title>
    <link rel="shortcut icon" type="x-icon" href="images/logofinal.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Raleway:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="style/frontstyle.css" media="screen" rel="stylesheet" content="text/css">
</head>
<body>

<div class="navbar">
    <div class="logo">
        <img src="images/logofinal.png" class="logo-img">
    </div>
    <a href="#home">Home</a>
    <a href="#about">About</a>
    
    <div class="dropdown">
        <button class="dropbtn">Products</button>
        <div class="dropdown-content">
            <a href="DizonRacelMae.php">Contour</a>
            <a href="JoymayAnneLador.php">Mascara</a>
            <a href="BarolaSamantha.php">Foundation</a>
            <a href="Sambayon.php">Lipstick</a>
        </div>
    </div>

    <!-- Check if the user is logged in and show the Logout button -->
    <?php if (isset($_SESSION['email'])): ?>
        <a href="Logout.php" class="dropbtn">Logout</a>
        <div class="user-info">
            <div class="user-avatar">
                <?php 
                    // Get the first three letters of the email
                    $initials = strtoupper(substr($_SESSION['email'], 0, 3)); 
                    $username = htmlspecialchars($_SESSION['email']); // Store username
                ?>
                <span class="initials"><?php echo htmlspecialchars($initials); ?></span>
                <div class="tooltip"><?php echo $username; ?></div> <!-- Tooltip for username -->
            </div>
        </div>
    <?php else: ?>
        <a href="Login.php" class="dropbtn">Log In</a>
        <a href="Signup.php" class="dropbtn">Sign Up</a>
    <?php endif; ?>

    <div class="social-icons">
        <a href="https://www.facebook.com/profile.php?id=61563850221131" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/xa_mi_lla/" title="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://github.com/Disney-prinsesa/coms" title="GitHub"><i class="fab fa-github"></i></a>
    </div>
</div>

<div id="home" class="section home">
    <h2>Welcome to CosMoShop</h2>
    <p class="welcome">Your ultimate destination for the latest and greatest in cosmetic products. Explore our wide range of high-quality cosmetics designed to enhance your beauty and confidence. Discover our exclusive collections and enjoy shopping with us today!</p>
    
    <video width="500px" height="300px" autoplay muted loop>
        <source src="images/videoads.mp4" type="video/mp4">
    </video>

    <div class="home-features">
        <!-- Racel's Contour Products -->
        <div class="feature">
            <div class="feature-img">
                <img src="images/modelcountourtwo.webp" alt="Model applying contour makeup">
                <a href="DizonRacelMae.html">
                    <img src="images/modelhoverpaletteone.webp" alt="Contour Palette Hover" class="hover-img">
                    <button class="shop-now">Shop Now</button>
                </a>
            </div>
            <h3>Exclusive Palette</h3>
        </div>
        <div class="feature">
            <!-- Joymay's Mascara products -->
            <div class="feature-img">
                <img src="images/model-mascara3.jpg" alt="Model with mascara">
                <a href="JoymayAnneLador.html">
                    <img src="images/hover-eyeliner.webp" alt="Mascara Hover" class="hover-img">
                    <button class="shop-now">Shop Now</button>
                </a>
            </div>
            <h3>Trendy Mascara</h3>
        </div>
        <div class="feature">
            <!-- Samantha's Foundation Products -->
            <div class="feature-img">
                <img src="images/concelearmodel-one.jpeg" alt="Model applying concealer">
                <a href="BarolaSamantha.html">
                    <img src="images/hover-concealer.webp" alt="Concealer Hover" class="hover-img">
                    <button class="shop-now">Shop Now</button>
                </a>
            </div>
            <h3>Essential Foundation</h3>
        </div>
        <div class="feature">
            <!-- Cleo's Lipstick Product  -->
            <div class="feature-img">
                <img src="images/lipgloss-model two.webp" alt="Model applying lip gloss">
                <a href="Sambayon.html">
                    <img src="images/hover-lipstick-two.webp" alt="Lipstick Hover" class="hover-img">
                    <button class="shop-now">Shop Now</button>
                </a>
            </div>
            <h3>Special Lipstick</h3>
        </div>
    </div>
</div>

<div id="about" class="section about">
    <div class="about-content">
        <h2>About Us</h2>
        <p>Welcome to CosMoShop, where beauty meets excellence! Our passion lies in providing you with the finest cosmetic products that redefine your beauty standards. Our mission is to offer innovative, high-quality, and affordable beauty solutions tailored to your unique needs. Discover a blend of classic beauty staples and cutting-edge trends, all meticulously crafted to elevate your beauty experience.</p>
        <p>Join us on this journey, and let us help you find the perfect products to enhance your beauty and confidence!</p>
        <a href="#home" class="explore-button">Explore Our Collection</a>
    </div>
    <div class="about-image">
        <img src="images/modelofall.jpg" alt="CosMoShop Team" />
    </div>
</div>

<div class="footer">
    <p>&copy; CosMoShop &trade;
        <a href="https://web.facebook.com/crazycompanies/" title="Facebook" class="footer-icon"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/xa_mi_lla/" title="Instagram" class="footer-icon"><i class="fab fa-instagram"></i></a>
        <a href="https://github.com/Xamilla" title="GitHub" class="footer-icon"><i class="fab fa-github"></i></a>
        <a href="https://mail.google.com/mail/u/0/" title="email" class="footer-icon"><i class="fa fa-envelope-open" aria-hidden="true"></i></a>
        <a href="https://www.google.com/search?q=suicide+hotline+page&oq=suicide+hotline+page&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTINCAEQABiGAxiABBiKBTIKCAIQABiABBiiBDIKCAMQABiABBiiBDIKCAQQABiABBiiBDIKCAUQABiABBiiBNIBCTI5MDMwajBqNKgCALACAQ&sourceid=chrome&ie=UTF-8" title="phone-number" class="footer-icon"><i class="fa fa-phone" aria-hidden="true"></i></a>
    </p>
</div>

</body>
</html>
