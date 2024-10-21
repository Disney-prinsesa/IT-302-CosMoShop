<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style/signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Raleway:wght@300;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="x-icon" href="images/logofinal.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">
                <img src="images/logofinal.png" class="logo-img">
        </div>
        <a href="BarolaCamilleindex.html">Home</a>
        <a href="BarolaCamilleindex.html">About</a>
        
        <div class="dropdown">
            <button class="dropbtn">Products</button>
            <div class="dropdown-content">
                <a href="countour.html">Contour</a>
                <a href="mascara.html">Mascara</a>
                <a href="foundation.html">Foundation</a>
                <a href="lipstick.html">Lipstick</a>
            </div>
        </div>
        
        <a href="Login.php" class="dropbtn">Log In</a>
        <a href="Signup.php" class="dropbtn">Sign Up</a>
        <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=61563850221131" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/xa_mi_lla/" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/Disney-prinsesa/coms" title="GitHub"><i class="fab fa-github"></i></a>
        </div>
    </div>
            <div id="signInModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Sign In</h2>
                        <!-- <span class="modal-close" id="signInClose">&times;</span> -->
                    </div>
                    <div class="modal-body">
                    <form id="signInForm" action="handle_signin.php" method="POST">
                            <label>Username:</label><br>
                            <input title="create a unique username" name="username" type="text" placeholder="Username" required><br>

                            <label>Email:</label><br>
                            <input title="only accept verified emails" name="email" type="email" placeholder="Email" required><br>

                            <label>Password:</label><br>
                            <input title="password content letter 'upperCase letter a-z && numbers 0-9'" name="password" type="password" placeholder="Password" required><br>

                            <button title="Sign Up" type="submit">Sign In</button>
                    </form>
                    </div>
                </div>
            </div>

            <script>
    const signInModal = document.getElementById('signInModal');
    const signInForm = document.getElementById('signInForm');

    // Close the modal if clicked outside of it
    window.onclick = function(event) {
        if (event.target === signInModal) {
            signInModal.style.display = 'none';
            window.location.href = 'BarolaCamilleindex.html'; 
        }
    };

    // Handle form submission and redirect to login page
    signInForm.onsubmit = function(event) {
        event.preventDefault(); 
        signInForm.submit();  // Let the form submit
    };
</script>


<!-- <script>
            for experimentaion only by the the index creator user_name :Xamilla
    const signInModal = document.getElementById('signInModal');
    const signInClose = document.getElementById('signInClose');
    const signInForm = document.getElementById('signInForm');
 

    signInClose.onclick = function() {
        signInModal.style.display = 'none';
        // Redirect  closed
        window.location.href = 'BarolaCamilleindex.html'; 
    }

    // Close clicked outside and redirect
    window.onclick = function(event) {
        if (event.target === signInModal) {
            signInModal.style.display = 'none';
            // Redirect closed
            window.location.href = 'BarolaCamilleindex.html'; 
        }
    }

    // Redirect  login page
    signInForm.onsubmit = function(event) {
        event.preventDefault(); 
        // Redirect to the login page 
        window.location.href = 'login.html'; 
    }
</script> -->

</body>
</html>
