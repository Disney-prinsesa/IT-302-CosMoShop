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
    <link href="style/makeupMascara.css" media="screen" rel="stylesheet" content="text/css">
	 <link href="BarolaCamilleindex.html" media="screen" rel="stylesheet" content="text/css">
</head>
<body>
    <div class="navbar">
        <div class="logo">MakeupMascara</div>
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
            <img src="images/eyeliner-1.jpg" alt="eyeliner 2">
            <h3>O.TWO.O Long Wear Black Eyeliner</h3>
            <p>Lengthening Non Smuge Mascara.</p>
            <div class="price">₱246.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/eyeliner-2.webp" alt="Beauty Blender 2">
            <h3>O.TWO.O Gold Embroidery Eyeliner</h3>
            <p>Eyeliner Pen Lasting Waterproof Long Classic Black Easy to Wear Eye Makeup.</p>
            <div class="price">₱301.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/eyeliner-3.jpg" alt="eyeliner 2">
            <h3>O.TWO.O Liquid Eyeliner Waterproof</h3>
            <p>Precise and Quick Drying with an Ultra-fine Brush 9084.</p>
            <div class="price">₱350.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/eyeliner-7.jpg" alt="Makeup Brush 2">
            <h3>O.TWO.O Eyeliner Gel  </h3>
            <p>Eye Liner Pen 4 Colors 1.0mm Ultra-fine Smooth Waterproof White K4.</p>
            <div class="price">₱220.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/mascara-1.png" alt="Beauty Blender 3">
            <h3>Maybelline Lash Infused With Fibers</h3>
            <p>Sensational Sky High Mascara Waterproof O.24oz For Long Full Lashes.</p>
            <div class="price">₱129.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/mascara-2.jpg" alt="Makeup Brush 3">
            <h3>Maybelline Fatty Huang</h3>
            <p>Mascara Waterproof anti smuge natural long eyelashes.</p>
            <div class="price">₱250.00</div>
            <button>Add to Cart</button>
        </div>
        <!-- Added Products  kay para di boring bitch-->
        <div class="product">
            <img src="images/mascara-4.jpg" alt="My Mascara 4">
            <h3>Maybelline Hypercurl Mascara</h3>
            <p>Waterproof coating gel dries .</p>
            <div class="price">₱260.00</div>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/eyeliner-4.webp" alt="eyeliner 4">
            <h3>Maybelline Hyperlight Eyeliner</h3>
            <p>Eyeliner BZ-1 Bronze Light Waterproof.</p>
            <div class="price">₱299.00</div>
            <button>Add to Cart</button>
        </div>
    </div>
    
</div>
</div>

<div class="footer">
    <p>&copy; Disney-prinsesa Joymay Anne</p>
</div>

</body>
</html>
