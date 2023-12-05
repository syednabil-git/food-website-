<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p> Welcome to CAFE-BAUET, Our restaurent specializes in serving authentic and flavorful Dayaramour cuisine. Our chefs are skilled in preparing traditional dishes that capture the essence of the region's culinary heritag</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>Our chefs are passionate about creating dishes that burst with flavor. We use a blend of aromatic spices and cooking techniques that bring out the authentic taste of Dayaramour cuisine.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p> within 30 mint we delivery our food </p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>We source the freshest and highest-quality ingredients to ensure that every dish we serve is of the utmost quality. Our commitment to excellence in ingredients is evident in every bite.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/mahin.jpg" alt="">
            <p> Mozzarella cheese, with its gooey, melted perfection, blanketed the entire pizza. It was generous in quantity, creating a cheesy haven that stretched tantalizingly as each slice was pulled away. The slight browning around the edges added a savory depth to the overall taste.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mahin</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/imran.png" alt="">
            <p> The pizza was cooked to perfection, with a crispy crust that held its structure while maintaining a tender interior. The edges were slightly charred, adding a delightful smokiness to each bite without any hint of burnt flavor.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Imran</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/mridul.jpg" alt="">
            <p>The foundation of a great burger, the bun, was soft yet sturdy, providing the perfect vessel for all the deliciousness within. It held up admirably against the juicy burger patty and toppings without becoming soggy or overwhelming.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mridul</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/nafis.png" alt="">
            <p>The star of the show, the burger patty, was a revelation. Cooked to a perfect medium-rare, it was juicy, tender, and packed with flavor. The beef was clearly of high quality, boasting a rich, meaty taste that was a true testament to the art of burger-making.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Nafis</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/rob.png" alt="">
            <p>The dessert arrived like a work of art on a plate. The presentation was a testament to the chef's skill and attention to detail, with vibrant colors, delicate drizzles, and artistic garnishes that made it almost too beautiful to eat.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Abdul Rob</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/shimul.png" alt="">
            <p>The dessert's flavor profile was a revelation. It balanced sweetness with depth, allowing each component to shine while working together in harmony. A hint of citrus zest cut through the richness, adding a refreshing contrast that kept each bite interesting and never overwhelming</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Shimul</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>