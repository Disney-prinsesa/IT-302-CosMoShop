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
    <meta name="description" content="Beauty Blend & Brushes offers the best beauty blenders and makeup brushes. Explore our range for your perfect beauty tools.">
    <meta name="keywords" content="beauty blenders, makeup brushes, beauty tools, cosmetics">
    <title>Beauty Blender & Brushes Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Raleway:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="style/lipstick&lipgloss.css" media="screen" rel="stylesheet" content="text/css">
</head>
<body>
<div class="navbar">
    <div class="logo">Lipstick</div>
    <div class="navbar-links">
        <a href="BarolaCamilleindex.php">Home</a>
        <div class="dropdown">
        <a href="#products" class="dropbtn">Products</a>
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

<div id="products" class="container">
    <div class="products">
        <div class="product">
            <img src="images/sl15.webp" alt="eyeliner 2">
            <h3>Rimmel London Lipstick</h3>
            <p>Soft, versatile, and perfect for a flawless finish.</p>
            <div class="price">₱329.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/sl14.webp" alt="Beauty Blender 2">
            <h3>Flormar Silk Matte Lipstick</h3>
            <p>Luxurious blend for a smooth application.</p>
            <div class="price">₱229.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/sl13.webp" alt="eyeliner 2">
            <h3>Peptalk Lipstick</h3>
            <p>Soft bristles for perfect blending.</p>
            <div class="price">₱320.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/sl12.webp" alt="Makeup Brush 2">
            <h3>Super Lustrous Lipstick </h3>
            <p>Precision brush for detailed work.</p>
            <div class="price">₱250.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/sl11.webp" alt="Beauty Blender 3">
            <h3>Retro Matte Lipstick</h3>
            <p>For a flawless foundation application.</p>
            <div class="price">₱299.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/sl10.avif" alt="Makeup Brush 3">
            <h3>Yuency Super Shine Lip Gloss</h3>
            <p>.</p>
            <div class="price">₱200.00</div>
            <button>Add to Cart</button>
        </div>
        <!-- Added Products  kay para di boring bitch-->
        <div class="product">
            <img src="images/sl.avif" alt="Meyeliner 4">
            <h3>Anastasia Beverly Hills Lip Gloss</h3>
            <p>Brush for detailed and precise application.</p>
            <div class="price">₱.300</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/sl0.jpg" alt="eyeliner 4">
            <h3>Mirror Lip Gloss Waterproof</h3>
            <p>Perfect for both liquid and powder products.</p>
            <div class="price">₱249.00</div>
            <button>Add to Cart</button>
        </div>
    </div>
    
</div>
</div>

<div class="footer">
    <p>&copy; Disney-prinsesa Cleo</p>
</div>

</body>
</html>
