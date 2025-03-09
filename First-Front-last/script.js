

// // Hero Slider Script

// let slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//     showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//     showSlides(slideIndex = n);
// }

// function showSlides(n) {
//     let i;
//     let slides = document.getElementsByClassName("mySlides");
//     let dots = document.getElementsByClassName("dot");
//     if (n > slides.length) {
//         slideIndex = 1
//     }
//     if (n < 1) {
//         slideIndex = slides.length
//     }
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" active", "");
//     }
//     slides[slideIndex - 1].style.display = "block";
//     dots[slideIndex - 1].className += " active";
// }





// /* Customize the width and appearance of the cards */
// .card {
//   border: none;
//   width: 100%;
//   height: 100%;
//   float: left;
//   align-items: center;
//   justify-content: center;
//   gap: 20px;
//   border: 1px solid black;
//   box-shadow: 10px 10px 10px gray;
// }

// .card-img-top {
//   height: 300px;
//   object-fit: cover;
//   width: 100%;
// }

// .card .card-body {
//   padding: 10px;

// }

// .card .card-title {
//   padding: 5px;
//   font-size: 18px;
// }

// .card .card-price{
//   padding: 5px;
//   font-size: 20px;
//   font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
// }
// .card .card-body button {
//   width:120px;
//   padding: 10px;
//   border-radius: 30px;
// }

// .prd-btn {
//   width: 100%;
//   padding: 5px;
//   color: black;

// }
// #btn1 , #btn2{
//   text-decoration: none;
//   color: blueviolet;
//   background-color: white;
//   border: 1px solid black;
// }

// .prd-btn a{
//   text-decoration: none;
//   color: black;
// }

// .prd-btn a:hover {
//   color: white;
//   cursor: pointer;
// }
// .prd-btn #btn1:hover,  #btn2:hover {
//   background-color: black;
//   color: white;
// }
// /* Styling the carousel navigation buttons */
// .carousel-control-prev, .carousel-control-next {
//   position: absolute;
//   top: 50%;
//   transform: translateY(-50%);
//   z-index: 2;
// }

// .carousel-control-prev {
//   left: 0;
// }

// .carousel-control-next {
//   right: 0;
// }

// .container {
//   display: flex;
//   justify-content: center;
// }

// .multi-carousel .carousel-inner {
//   display: flex;
//   gap: 20px;
// }

// .carousel-item {
//   width: 33.33%; /* Show 3 items at once */
//   transition: transform 0.5s ease;
// }

// .card {
//   border: 1px solid black;
//   box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
//   margin-bottom: 10px;
// }

// .card-img-top {
//   width: 100%;
//   height: 250px;
//   object-fit: cover;
// }

// .card .card-body {
//   padding: 10px;
// }

// .card .card-title {
//   font-size: 1.2rem;
// }

// .card .card-price {
//   font-size: 1.1rem;
//   color: #ff6347;
// }

// .card .prd-btn button {
//   width: 120px;
//   padding: 10px;
//   background-color:white;
//   color: white;
//   border: none;
//   cursor: pointer;

// }

// .card .prd-btn button:hover {
//   background-color: #ff6347;
// }

// .carousel-control-prev, .carousel-control-next {
//   position: absolute;
//   top: 50%;
//   transform: translateY(-50%);
//   z-index: 2;
// }
// */






























// // Get all the links in the navigation
// const links = document.querySelectorAll('.row2 ul li a');

// // Loop through the links and add the 'active' class to the current page
// links.forEach(link => {
//     if (link.href === window.location.href) {
//         link.classList.add('active');
//     }
// });

// // /* gallery code */
// // /* Container for the gallery */
// // .gallery-image {
// //     width: 100%;
// //     height: 600px;
// //     background-color: red;
// //     max-width: 1200px; /* You can adjust this based on the desired width */
// //     margin:20px auto;
// //     align-items: center;
// //     display: flex;
// //     justify-content: center;
// //     align-items: center;
// // }

// // /* Gallery Slider Container */
// // .gallery-slider {
// //     position: relative;
// //     overflow: hidden;
// //     width: 100%;
// //     display: flex;
// //     justify-content: center;
// //     align-items: center;

// // }

// // /* Slider container holding the slides */
// // .slider-container {
// //     display: flex;
// //     transition: transform 0.5s ease-in-out;
// // }

// // /* Each individual slide */
// // .slides {
// //     min-width: 25%; /* To show 4 images at a time */
// //     max-width: 25%;
// //     padding: 5px; /* Optional: add some spacing between images */
// //     box-sizing: border-box;
// // }

// // .slides img {
// //     width: 100%;
// //     height: 200px;
// //     object-fit: cover;

// // }

// // /* Navigation buttons */
// // .prev1, .next1 {
// //     position: absolute;
// //     top: 50%;
// //     z-index: 1;
// //     background-color: rgba(0, 0, 0, 0.5);
// //     color: white;
// //     border: none;
// //     padding: 15px;
// //     cursor: pointer;
// //     border-radius: 50%;
// //     font-size: 24px;
// //     transform: translateY(-50%);
// // }

// // .prev1 {
// //     left: 10px;
// // }

// // .next1 {
// //     right: 10px;
// // }

// // /* Hover effect for navigation buttons */
// // .prev1:hover, .next1:hover {
// //     background-color: rgba(0, 0, 0, 0.8);
// // }

// // /* Responsive Design */
// // @media (max-width: 768px) {
// //     .slides {
// //         min-width: 50%; /* 2 images per row on tablets */
// //     }
// // }

// // @media (max-width: 480px) {
// //     .slides {
// //         min-width: 100%; /* 1 image per row on mobile */
// //     }
// // }

// // .product-slider-container {
// //     width: 100%;
// //     overflow: hidden;
// //     position: relative;
// //   }

// //   .product-slider {
// //     display: flex;
// //     transition: transform 0.5s ease;
// //   }

// //   .product-box {
// //     width: 25%; /* 4 boxes visible at a time (100% / 4) */
// //     box-sizing: border-box;
// //     padding: 20px;
// //     text-align: center;
// //     background: lightgray;
// //   }

// //   @keyframes moveSlider {
// //     0% {
// //       transform: translateX(0);
// //     }
// //     100% {
// //       transform: translateX(-25%); /* Move 1 box per step */
// //     }
// //   }





//   .image-slider-container {
//     width: 100%;
//     overflow: hidden;
//     position: relative;
//   }

//   .image-slider {
//     display: flex;
//     transition: transform 1s ease;
//   }

//   .image-slide {
//     width: 25%; /* Show 4 images at a time */
//     box-sizing: border-box;
//     padding: 10px;
//     text-align: center;
//   }

//   .image-slide img {
//     width: 100%;
//     height: 300px;
//     display: block;
//   }

//   button {
//     position: absolute;
//     top: 50%;
//     transform: translateY(-50%);
//     background-color: rgba(0, 0, 0, 0.5);
//     color: white;
//     border: none;
//     padding: 10px;
//     cursor: pointer;
//     font-size: 20px;
//     z-index: 1;
//   }

//   .prev1 {
//     left: 0;
//   }

//   .next1 {
//     right: 0;
//   }
// .container{
//   width: 100%;
//   height: 600px;
//   align-items: center;
//   display: grid;
//   gap: 20px;
// }

// .container .carousel-inner {
//   align-items: center;
//   text-align: center;
//   justify-content: center;
//   display: flex;
//   gap: 20px;
// }


/* Feature Product Container */
.feature-product {
  padding: 20px;
  background-color: #f8f8f8;
}
/* Section Title */
.section-title {
  text-align: center;
  font-size: 2rem;
  font-weight: bold;
  margin-bottom: 30px;
  color: #333;
}

/* Main Container for Cards */
.ftr-card {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
  max-width: 1200px;
  margin: 0 auto;
}

/* Individual Product Card */
.box-card {
  background-color: #fff;
  border: 1px solid #ddd;
  width: 23%;
  text-align: center;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.box-card img {
  width: 100%;
  height: auto;
}

/* Card Details */
.card-details {
  padding: 15px;
}

.title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
  color: #333;
}

.price {
  font-size: 16px;
  color: #ff4500;
  margin-bottom: 10px;
}

.add-to-cart {
  background-color: #007bff;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 14px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.add-to-cart:hover {
  background-color: #0056b3;
}

/* Hover effect for product card */
.box-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
}

/* Responsiveness */
@media (max-width: 768px) {
  .box-card {
      width: 45%;
  }
}

@media (max-width: 480px) {
  .box-card {
      width: 90%;
  }
}

.product-slider-container {
  width: 100%;
  overflow: hidden;
  position: relative;
}

.product-slider {
  display: flex;
  transition: transform 0.5s ease;
}

.product-box {
  width: 25%; /* 4 boxes visible at a time (100% / 4) */
  box-sizing: border-box;
  padding: 20px;
  text-align: center;
  background: lightgray;
}

@keyframes moveSlider {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-25%); /* Move 1 box per step */
  }
}
