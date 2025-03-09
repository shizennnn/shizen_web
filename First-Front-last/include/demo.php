<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Responsive Header with Hamburger Menu</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: ;
            color: black;
        }

        .logo {
            align-items: center;
            justify-content: ;
            display: flex;
            width: 20%;

        }

        /* Logo Styling */
        .logo img {
            width: 100px;
            height: 100px;
            align-items: center;
            justify-content: center;
            display: flex;
            margin-top: 10px;
            border-radius: 50px;
        }

        /* Social Links Styling */
        .social-links {
            display: flex;
            gap: 20px;
            justify-content: flex-end;
            align-items: center;
            margin-top: -145px;
        }



        /* Social Links Styling */
        .social-links {
            display: flex;
            gap: 50px;
            justify-content: flex-end;
            align-items: center;
            margin-top: -145px;
        }

        .container-fluid {
            margin-top: -50px;
        }

        .social-links a {
            color: black;
            text-decoration: none;
            font-size: 18px;
        }

        .social-links a:hover {
            color: #ff9900;
        }

        .social-icon {
           
            gap: 10px;
            border-radius: 50%;

            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            transition: background-color 0.3s ease;


        }

        .social-icon a {
            background-color: ;
            padding: 8px;
            justify-content: center;
            font-size: 25px;
            border-radius: 50px;
        }


        .navbar-nav {
            color: black;
            display: flex;
            gap: 40px;
            justify-content: flex-end;
            margin-top: 10px;
        }

        .navbar-nav li {
            list-style: none;
        }
        
        .navbar-nav li a {
            color: black;
            text-decoration: none;
            font-size: 16px;
            padding: 12px 30px;
            /* Larger left-right padding for wider button */
            border-radius: 50px;
            /* Fully rounded corners to make it look like a pill */
            display: flex;
            /* Flexbox to center content */
            align-items: center;
            /* Vertically center the text */
            justify-content: center;
            /* Horizontally center the text */
            transition: all 0.3s ease;
            /* Smooth transition on hover */
        }

        .navbar-nav li a:hover {
            background-color: black;
            /* Black background on hover */
            color: white;
            /* White text on hover */
        }


        .navbar-dark .navbar-nav ul{
            background-color: black;
      
        }
        .navbar-dark .navbar-nav .nav-link {
            color: black;
        }


        /* Media Query for Mobile */
        @media (max-width: 1000px) {

            /* Logo and Hamburger aligned */
            .logo {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 0;
                width: 100%;
                /* Make logo take full width */
            }

            .logo img {
                width: 100px;
                height: 100px;
            }

            .hamburger {
                display: block;
                font-size: 30px;
                color: black;
                cursor: pointer;
                margin-top: 30px;
                justify-self: end;
                z-index: 0;
            }

            .navbar .container-fluid{
            background-color:black ;
            width: 100%;
            color: while;
        }

            /* Initially hidden on mobile */
            .navbar-nav,
            .social-links {
                display: none;
                transition: all 1s;
            }

            /* When active, show navbar and social links */
            .navbar-nav.active,
            .social-links.active {
                display: flex;
                flex-direction: column;
                width: 100%;
                text-align: center;
            }

            .add-to-cart-prd {
                display: none;
            }

            .container-fluid {
                margin-top: 10px;
            }

            .navbar-dark .navbar-nav .nav-link {
                color: white;
            }
        }

        .add-to-cart-btn {
            background-color: #ff6347;
            /* Tomato color for the button */
            color: white;
            /* White text color */
            padding: 12px 20px;
            /* Space inside the button */
            font-size: 16px;
            /* Text size */
            border: none;
            /* No border */
            border-radius: 30px;
            /* Rounded corners */
            display: flex;
            /* To align the icon and text */
            align-items: center;
            /* Vertically align the icon */
            gap: 8px;
            /* Space between the icon and text */
            cursor: pointer;
            /* Show a pointer when hovering */
            transition: all 0.3s ease;
            /* Smooth transition for hover effects */
        }

        .add-to-cart-btn:hover {
            background-color: #ff4500;
            /* Darker tomato color when hovered */
        }

        .add-to-cart-btn i {
            font-size: 20px;
            /* Icon size */
        }

        
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

    </style>
</head>

<body>


    <div class="header">
        <div class="container">
            <div class="row">
                <!-- Logo Column -->
                <div class="col-6 col-md-4 logo">
                    <img src="\First-Front-last\logo5.png" alt="Logo" class="img-fluid">
                </div>

                <!-- Hamburger Menu Icon (Visible on mobile) -->
                <div class="col-6 col-md-8 text-right">
                    <span class="hamburger" onclick="toggleMenu()">&#9776;</span>
                </div>

            </div>


            <!-- Social Links Row (On desktop and mobile) -->
            <div class="row">
                <div class="col-12 social-links">
                    <a href="mailto:someone@example.com" class="email"><i class="fas fa-envelope"></i> info@gmail.com</a>
                    <a href="tel:+1234567890" class="phone"><i class="fas fa-phone-alt"></i> +98-9817487565</a>
                    <a href="#" class="location"><i class="fas fa-map-marker-alt"></i> 12, Satva Icon</a>
                    <div class="social-icon">
                        <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com" class="linkedin"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <!-- Navigation Menu Row (On desktop and mobile) -->
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <div class="container-fluid">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                <li>
                                    <div class="add-to-cart-prd">
                                        <button class="add-to-cart-btn">
                                            <i class="fas fa-shopping-cart"></i> Cart
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        

<div class="slideshow-container">
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="first-front-last\banner2.jpg" style="width:100%">
        <div class="text">
            <h1>Product Name</h1>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable</p>
            <a href="#" id="btn">Read More</a>

        </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="banner2.jpg" style="width:100%">
        <div class="text">
            <h1>Product Name</h1>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable</p>
            <a href="#" id="btn">Read More</a>

        </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="banner.jpg" style="width:100%">
        <div class="text">
            <h1>Product Name</h1>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable</p>
            <a href="#" id="btn">Read More</a>

        </div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<!-- <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div> -->
<!-- Hero slider End -->

    </div>


   