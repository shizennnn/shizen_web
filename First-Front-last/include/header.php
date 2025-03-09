<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Add Font Awesome CDN link in the head section of your HTML file -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>First-Project</title>
</head>

<body>

    <header>
        <div class="head">
            <div class="col-1">
                <img src="logo5.png" alt="hader-logo">
            </div>
            <div class="col-2">
                <!-- Hamburger Icon (for opening the menu) -->
                <div class="hamburger" onclick="toggleMenu()">
                    <i class="fas fa-bars"></i>
                </div>

                <!-- Close Icon (for closing the menu) -->
                <div class="close" onclick="closeMenu()">
                    <i class="fa-solid fa-xmark"></i>
                </div>

                <div class="row1">

                    <div class="icon-container">
                        <i class="fas fa-envelope"></i> <a href="#">info@mayurwebtech</a>
                        <!-- Email icon -->
                    </div>
                    <div class="icon-container">
                        <i class="fas fa-phone-alt"></i> + 91-67799-2599 <!-- Use fa-phone for a phone icon -->
                    </div>
                    <div class="icon-container">
                        <i class="fas fa-user"></i> My Account
                    </div>


                    <div class="social-icons">
                        <!-- Facebook Icon with Link -->
                        <a href="https://facebook.com" target="_blank" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <!-- Twitter Icon with Link -->
                        <a href="https://twitter.com" target="_blank" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <!-- Instagram Icon with Link -->
                        <a href="https://instagram.com" target="_blank" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <div class="row2">
                    <ul>
                        <a href="index.php">
                            <li>Home</li>
                        </a>
                        <a href="about.php">
                            <li>About-us</li>
                        </a>
                        <a href="product.php">
                            <li>Product</li>
                        </a>
                        <a href="gallery.php">
                            <li>Gallery</li>
                        </a>
                        <a href="service.php">
                            <li>service</li>
                        </a>
                        <a href="contact.php">
                            <li>contact-us</li>
                        </a>
                        <div class="add-to-cart-prd">
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i> Cart
                            </button>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <script>
            // Function to open the menu and show close icon
            function toggleMenu() {
                document.querySelector('header').classList.add('menu-open');
            }

            // Function to close the menu and hide close icon
            function closeMenu() {
                document.querySelector('header').classList.remove('menu-open');
            }
        </script>
    </header>