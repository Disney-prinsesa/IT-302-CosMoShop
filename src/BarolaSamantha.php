<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // Redirect to the login page if not logged in
    header('Location: Login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon " type="x-icon" href="images/cropped_image.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Achieve flawless skin with our foundation and concealer duo, designed to provide seamless coverage and a natural finish. Effortlessly blend away imperfections for a radiant, picture-perfect complexion all day long.">
    <meta name="keywords" content="foundation, concealer">
    <title>Foundation & Concealer Section</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fonticonpicker/2.0.0/jquery.fonticonpicker.min.js">
    <link href="style/foundation.css" media="screen" rel="stylesheet" content="text/css">
</head>
<body>
<div class="navbar">
    <div class="logo">
        <img src="images/logofinal.png" class="logo-img">
</div>
    <div class="navbar-links">
        <a href="BarolaCamilleindex.php">Home</a>
        <div class="dropdown">
            <a href="#products" class="dropbtn">Foundations</a>
            <div class="dropdown-content">
            <?php if (isset($_SESSION['email'])): ?>
                    <a href="DizonRacelMae.php">Contour</a>
                    <a href="JoymayAnneLador.php">Mascara</a>
                    <a href="BarolaSamantha.php">Foundation</a>
                    <a href="Sambayon.php">Lipstick</a>
                <?php else: ?>
                    <p>Please log in to view products.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <div class="navbar-actions">
        <form class="search-form" action="#" method="get">
            <input type="text" name="search" placeholder="Search...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
        <a href="#cart" class="cart-icon"><i class="fas fa-shopping-cart"></i></a>
    </div>
  
</div>
<div class="home-features">
<div class="feature">
    <div class="feature-img">
        <img src="images/rare.jpg">
        <a href="rare.php">
            <img src="images/rbf.jpg"  class="hover-img">
        </a>
    </div>
</div>
<div class="feature">
    <div class="feature-img">
        <img src="images/fenty.jpg">
        <a href="fenty.php">
            <img src="images/fbf.jpg"  class="hover-img">
        </a>
    </div>
</div>
<div class="feature">
    <div class="feature-img">
        <img src="images/chanel.jpg">
        <a href="chanel.php">
            <img src="images/chanelf.jpg"  class="hover-img">
        </a>
    </div>
</div>
<div class="feature">
    <div class="feature-img">
        <img src="images/dior.jpg">
        <a href="dior.php">
            <img src="images/diorf.jpg"  class="hover-img">
        </a>
    </div>
</div>
</div>




<div class="footer">
    <p>&copy; Disney-prinsesa Samantha Kate's</p>
</div>

</body>
</html>