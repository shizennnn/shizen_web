<?php include('include/demo.php'); ?>



<!-- Hero Slider start -->
<div class="slideshow-container">
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="../banner.jpg" style="width:100%">
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

<!-- Hero Slider Start -->
<script>

   let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

</script>


<!-- Top product strat here -->
<div class="product-title">
    <h1>Top Products</h1>
    <p>Lorem Ipsum is not simply random tex Lorem Ipsum is not simply random text</p>
</div>

<div class="feature-product">
    <h2 class="section-title"></h2>
    <div class="ftr-card">
        <div class="box-card">
            <img src="1.webp" alt="Product 1">
            <div class="card-details">
                <div class="title">Product 1</div>
                <div class="price">$89</div>
                <button class="add-to-cart">Add to Cart</button>
                <button class="add-to-cart">Buy Now</button>
            </div>
        </div>
        <div class="box-card">
            <img src="2.webp" alt="Product 2">
            <div class="card-details">
                <div class="title">Product 2</div>
                <div class="price">$99</div>
                <button class="add-to-cart">Add to Cart</button>
                <button class="add-to-cart">Buy Now</button>
            </div>
        </div>

        <div class="box-card">
            <img src="3.webp" alt="Product 3">
            <div class="card-details">
                <div class="title">Product 3</div>
                <div class="price">$79</div>
                <button class="add-to-cart">Add to Cart</button>
                <button class="add-to-cart">Buy Now</button>
            </div>
        </div>

        <div class="box-card">
            <img src="4.webp" alt="Product 4">
            <div class="card-details">
                <div class="title">Product 4</div>
                <div class="price">$129</div>
                <button class="add-to-cart">Add to Cart</button>
                <button class="add-to-cart">Buy Now</button>
            </div>
        </div>
    </div>


    <div class="ftr-card">
        <div class="box-card">
            <img src="1.webp" alt="Product 1">
            <div class="card-details">
                <div class="title">Product 1</div>
                <div class="price">$89</div>
                <button class="add-to-cart">Add to Cart</button>
                <button class="add-to-cart">Buy Now</button>
            </div>
        </div>

        <div class="box-card">
            <img src="2.webp" alt="Product 2">
            <div class="card-details">
                <div class="title">Product 2</div>
                <div class="price">$99</div>
                <button class="add-to-cart">Add to Cart</button>
                <button class="add-to-cart">Buy Now</button>
            </div>
        </div>

        <div class="box-card">
            <img src="3.webp" alt="Product 3">
            <div class="card-details">
                <div class="title">Product 3</div>
                <div class="price">$79</div>
                <button class="add-to-cart">Add to Cart</button>
                <button class="add-to-cart">Buy Now</button>
            </div>
        </div>

        <div class="box-card">
            <img src="4.webp" alt="Product 4">
            <div class="card-details">
                <div class="title">Product 4</div>
                <div class="price">$129</div>
                <button class="add-to-cart">Add to Cart</button>
                <button class="add-to-cart">Buy Now</button>
            </div>
        </div>
    </div>
    
    <!-- View More Button -->
    <div class="view-more-container">
        <a href="#" class="view-more-btn">View More</a>
    </div>
</div>
<!-- Top product strat here -->



<!-- Welcome Text On Hero Start -->

<div class="welcome-text">
    <div class="wel-title">Welcome Titiel</div>
    <div class="contents">
        <p>Bootstrap is developed mobile first, a strategy in which we optimize code for mobile devices first and then scale up components as necessary using CSS media queries. To ensure proper rendering and touch zooming for all devices, add the responsive viewport meta tag to your</p>
    </div>
    <a href="#"><button> Read More </button></a>
</div>
<!-- Welcome Text On Hero End -->





<!-- Gallery Image Slider Start -->
<div class="gallery-image">
    <h3 class="gallery-title">Gallery</h3>
    <div class="gallery-slider">
        <div class="slider-container">
            <div class="slides">
                <img src="1.webp" alt="Image 1">
            </div>
            <div class="slides">
                <img src="2.webp" alt="Image 2">
            </div>
            <div class="slides">
                <img src="3.webp" alt="Image 3">
            </div>
            <div class="slides">
                <img src="4.webp" alt="Image 4">
            </div>
            <div class="slides">
                <img src="3.webp" alt="Image 5">
            </div>
            <div class="slides">
                <img src="2.webp" alt="Image 6">
            </div>
            <!-- Add more slides as needed -->
        </div>
       
        <div class="view-more-container">
            <a href="#" class="view-more-btn">View More</a>
        </div>
    </div>
</div>
<!-- Gallery Image Slider End -->




<!-- Footer Start here -->
<div class="hero-video-div">
    <div class="video">
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" width="700px" height="450px" allowfullscreen></iframe>
        </div>
    </div>
</div>
<footer>
    <div class="footer-container">
        <!-- Menu Column -->
        <div class="footer-column">
            <h3> Use Full Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Product Us</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3> Our Products</h3>
            <ul>
                <li><a href="#">Web designing</a></li>
                <li><a href="#">Software</a></li>
                <li><a href="#">UI/UX</a></li>
                <li><a href="#">Graphic Design</a></li>
            </ul>
        </div>

        <!-- Contact Information Column -->
        <div class="footer-column">
            <h3>Contact Information</h3>

            <!-- Address Section -->
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <p>123 Street Name, City, Country</p>
            </div>

            <!-- Email Section -->
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <p><a href="mailto:example@example.com">example@example.com</a></p>
            </div>

            <!-- Phone Section -->
            <div class="contact-item">
                <i class="fas fa-phone-alt"></i> <!-- Phone Icon -->
                <p>+123 456 7890</p>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <!-- Left side text -->
        <p>&copy; 2025 Your Company. All rights reserved.</p>

        <!-- Right side Social Media links -->
        <div class="footer-column">
            <ul class="social-media">
                <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- Footer End here -->


<?php include('include/footer.php') ?>