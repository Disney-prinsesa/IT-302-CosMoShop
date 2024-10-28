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
    <link href="style/makeupPalette.css" media="screen" rel="stylesheet" content="text/css">
</head>
<body>
<div class="navbar">
    <div class="logo">Palette & Contour</div>
    <div class="navbar-links">
        <a href="BarolaCamilleindex.php">Home</a>
        <div class="dropdown">
            <a href="DizonRacelMae.php" class="dropbtn">Contours</a>
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
            <img src="images/EB1.jpg" alt="Palette 1">
            <h3>Ever Bilena Ultimate Eyeshadow Palette (new)</h3>
            <p>A stunning collection of richly pigmented, blendable shades ranging from soft neutrals to bold hues, perfect for creating versatile eye looks from day to night.</p>
            <div class="price">₱175.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/nars6.jpg" alt="Blush 2">
            <h3>NARS Afterglow Liquid Blush</h3>
            <p>This liquid blush is designed to provide a healthy-looking flush to your cheeks while offering a hydrating and comfortable feel.</p>
            <div class="price">₱178.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
           <img src="images/SL1.jpg" alt="Palette 1">
            <h3>SACE LADY 3 IN 1 Highlighter Contour Bronzer Blush Powder Pigmented Smooth Lightweight Mulit-Use Makeup Palette</h3>
            <p>The smooth texture and highly pigmented formula creates a unique, satiny texture that lasts all day.Applies evenly and blends smoothly, won't fade or crease.</p>
            <div class="price">₱300.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
          <img src="images/nars5.jpg" alt="Blush & Contour 3">
            <h3>NARS Dual-Intensity Palette and Blush, Contour & Lip Palette</h3>
            <p>The limited-edition palette features eight dual-intensity eyeshadows with riveting range from delicate peach pink to fierce black orchid and a specially designed wet/dry eyeshadow brush.</p>
            <div class="price">₱295.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
           <img src="images/SL6.jpeg" alt="Blush & Contour 3">
            <h3>SACE LADY Matte Lipstick + Eyeshadow Palette Makeup Kit Waterproof Make Up Set</h3>
            <p>A waterproof, long-lasting set featuring bold, smudge-proof matte lipstick and versatile, highly pigmented eyeshadow shades for all-day wear.</p>
            <div class="price">₱200.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
             <img src="images/EB3.jpg" alt="Makeup Brush 4">
            <h3>Ever Bilena Compact Blush for a Natural and Filter-free Look</h3>
            <p>These shades are highly pigmented and buildable, so you can blend them easily with other blushes to get the perfect look you want to achieve.</p>
            <div class="price">₱195.00</div>
            <button>Add to Cart</button>
        </div>
        <!-- Added Products  kay para di boring bitch-->
        <div class="product">
           <img src="images/nars4.jpg" alt="palette 3">
            <h3>NARS Netal Creme Multi-Use Palette & Kabuki Brush Set</h3>
            <p>Cream-based palette for eyes, lips, and cheeks, paired with a Kabuki brush for seamless, customizable application.</p>
            <div class="price">₱370.00</div>
            <button>Add to Cart</button>
    </div>
</div>

<div class="footer">
    <p>&copy; Disney-prinsesa Razel Mae</p>
</div>

</body>
</html>
