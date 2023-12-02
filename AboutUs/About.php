<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>
   <link rel="stylesheet" href="About.css">
   <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   <!-- start first section  -->
   <header class="container-fluid first-section">
      <nav class="navbar navbar-expand-lg   ">
         <div class="container">
            <a class="navbar-brand " href="#"><img src="img/logo3 1.png" alt="" srcset=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
               aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
               <ul class="navbar-nav me-5">
                  <li class="nav-item me-5">
                     <a class="nav-link hoverAfter " aria-current="page" href="../index.php">Home</a>
                  </li>
                  <li class="nav-item me-5 ">
                     <a class="nav-link hoverAfter " aria-current="page" href="../Service/Service.php">Services </a>
                  </li>
                  <li class="nav-item me-5">
                     <a class="nav-link hoverAfter " aria-current="page" href="../Contact/Contact.php">Contact</a>
                  </li>
                  <li class="nav-item me-5">
                     <a class="nav-link hoverAfter " aria-current="page" href="../AboutUs/About.php">About</a>
                  </li>
                  <li class="nav-item  me-5">
                     <a class="nav-link  " aria-current="page" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                  </li>
                  <?php if(isset($_SESSION['username'])) { ?>
                  <li class="nav-item me-5 ">
                     <a class="nav-link loginBtn" aria-current="page" href="../singIN/logout.php">logout</a>
                  </li>
                  <?php } else{ ?>
                     <li class="nav-item me-5 ">
                     <a class="nav-link loginBtn" aria-current="page" href="../singIN/sing.php">login</a>
                  <?php } ?>

               </ul>
            </div>
         </div>
      </nav>
   </header>
   <!-- end first section  -->

   <div class="image-container">
      <div><img src="img/crop-plate-with-salad.jpg" alt="crop-plate-with-salad"></div>
      <div class="banner-text">
         <h1>About Us</h1>
      </div>
   </div>
   <section class="firstsection-about" data-aos="fade-left">
      <H2 > We Invite You To Visit Our Restaurant </H2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque neque <br>
         reprehenderit et, voluptatem, expedita eius similique porro numquam nobis <br>
         labore repudiandae eligendi facere nisi dolores, excepturi totam officiis libero rerum.</p>
      <video src="img/videoplayback.mp4" controls poster="img/restaurant-interior.jpg" data-aos="fade-right"></video>
   </section>
   <section class="WhatWe-Do">
      <h1 data-aos="zoom-in" >What We Do </h1>
      <div class="cards-about">
         <div class="card" style="width: 14rem;">
            <img src="img/healthy-food.png" class="card-img-top" alt="...">
            <div class="card-body">
               <h5>Fresh products</h5>
               <p class="card-text"> hihihiu ufytfse</p>
            </div>
         </div>


         <div class="card" style="width: 14rem;">
            <img src="img/chef (3).png" class="card-img-top" alt="...">
            <div class="card-body">
               <h5>Skilled Shef</h5>
               <p class="card-text"> hihihiu ufytfse</p>
            </div>
         </div>


         <div class="card" style="width: 14rem;">
            <img src="img/cocktail (1).png" class="card-img-top" alt="...">
            <div class="card-body">
               <h5>Best Bar</h5>
               <p class="card-text"> hihihiu ufytfsedt</p>
            </div>
         </div>


         <div class="card" style="width: 14rem;">
            <img src="img/cuisine (1).png" class="card-img-top" alt="...">
            <div class="card-body">
               <h5>Vegan Cuisine</h5>
               <p class="card-text"> hihihiu ufytfsed</p>
            </div>
         </div>
      </div>
   </section>
   <section class="meetourtteam-about">
      <h1 data-aos="zoom-in" > Meet Our Team</h1>
      <!-- the cards heree -->
      <div class="ourteam-about">
         <!-- the first card A.M -->
         <div class="imagecards">
            <img src="img/Acharouaou.jpg" alt="Acharouaou">
            <div class="insideimage-container">
               <div class="name-job-clickicon">
                  <div class="name-job">
                     <h5>Acharouaou Mohamed</h5>
                     <p>Senior Shef</p>
                  </div>
                  <div class="clickicon">
                     <img src="img/contact (1).png" alt="contact">
                  </div>
               </div>
               <!-- the social media icons for card one -->
               <div class="PersonSocialMedia">
                  <div class="socialmediaicons">
                     <a href="#"><img src="img/facebook.png" alt="facebook"></a>
                     <a href="#"><img src="img/linkedin.png" alt="linkedin"></a>
                     <a href="#"><img src="img/instagram.png" alt="instagram"></a>
                     <a href="#"><img src="img/twitter.png" alt="twitter"></a>
                  </div>
               </div>
            </div>
         </div>
         <!-- the second card A.F -->
         <div class="imagecards">
            <img src="img/Fihar.jpg" alt="Fihar">
            <div class="insideimage-container">
               <div class="name-job-clickicon">
                  <div class="name-job">
                     <h5>Abdelali Fihar</h5>
                     <p>Senior Shef</p>
                  </div>
                  <div class="clickicon">
                     <img src="img/contact (1).png" alt="contact">
                  </div>
               </div>
               <!-- the social media icons for the second card -->
               <div class="PersonSocialMedia">
                  <div class="socialmediaicons">
                     <a href="#"><img src="img/facebook.png" alt="facebook"></a>
                     <a href="#"><img src="img/linkedin.png" alt="linkedin"></a>
                     <a href="#"><img src="img/instagram.png" alt="instagram"></a>
                     <a href="#"><img src="img/twitter.png" alt="twitter"></a>
                  </div>
               </div>
            </div>
         </div>
         <!-- the third card A.T -->
         <div class="imagecards">
            <img src="img/Taouil.jpg" alt="Taouil">
            <div class="insideimage-container">
               <div class="name-job-clickicon">
                  <div class="name-job">
                     <h5>Abdelatif Taouil</h5>
                     <p>Senior Shef</p>
                  </div>
                  <div class="clickicon">
                     <img src="img/contact (1).png" alt="contact">
                  </div>
               </div>
               <!-- the social media icons for the third card -->
               <div class="PersonSocialMedia">
                  <div class="socialmediaicons">
                     <a href="#"><img src="img/facebook.png" alt="facebook"></a>
                     <a href="#"><img src="img/linkedin.png" alt="linkedin"></a>
                     <a href="#"><img src="img/instagram.png" alt="instagram"></a>
                     <a href="#"><img src="img/twitter.png" alt="twitter"></a>
                  </div>
               </div>
            </div>
         </div>
         <!-- the forth card I.B -->
         <div class="imagecards">
            <img src="img/Ibtihal.jpg" alt="Ibtihal">
            <div class="insideimage-container">
               <div class="name-job-clickicon">
                  <div class="name-job">
                     <h5>Ibtihal Boukanchoch</h5>
                     <p>Senior Shef</p>
                  </div>
                  <div class="clickicon">
                     <img src="img/contact (1).png" alt="contact">
                  </div>
               </div>
               <!-- the social media icons for the forth card -->
               <div class="PersonSocialMedia">
                  <div class="socialmediaicons">
                     <a href="#"><img src="img/facebook.png" alt="facebook"></a>
                     <a href="#"><img src="img/linkedin.png" alt="linkedin"></a>
                     <a href="#"><img src="img/instagram.png" alt="instagram"></a>
                     <a href="#"><img src="img/twitter.png" alt="twitter"></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- start footer  section  -->
   <footer class="container-fluid ">
      <div class="container">
         <div class="row  p-5">
            <div class="col-lg-3 col-md-6 col-sm-12">
               <ul class="first-list">
                  <li>CONTACT</li>
                  <li> <i class="fa-solid fa-location-dot"></i> &nbsp; &nbsp;1247/Plot No. 39, Phase, </li>
                  <li class="d-flex align-items-center "><i class="fa-solid fa-phone-volume "></i> &nbsp;
                     &nbsp;+91 987-654-3210 <br>
                     &nbsp; &nbsp;+91123-456-7890</li>
                  <li class="d-flex align-items-center"> <i class="fa-regular fa-envelope"></i> &nbsp; &nbsp;
                     example@gmail.com</li>
                  <li>
                     <form action="">
                        <input type="email" placeholder="       Enter Your Email">
                        <input type="submit" value="Send">
                     </form>
                  </li>
               </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               <ul>
                  <li>OUR LINKS</li>
                  <li>Home</li>
                  <li>About Us</li>
                  <li>Services</li>
                  <li>Team</li>
                  <li>Blog</li>
               </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               <ul>
                  <li>OUR SERVICES</li>
                  <li>Strategy & receach</li>
                  <li>Fast delivery </li>
                  <li>Set reservation</li>
                  <li>Pick up in Store</li>
                  <li>Our Menu</li>
               </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               <ul>
                  <li>HELP CENTER</li>
                  <li>FAQ</li>
                  <li>Shop </li>
                  <li>Category Filter</li>
                  <li>Testimonials</li>
                  <li>Contact</li>
               </ul>
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer  section  -->









































   <script src="About.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
      AOS.init();
   </script>

</body>

</html>