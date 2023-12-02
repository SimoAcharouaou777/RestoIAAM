<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestIAM - Services</title>




    <!-- =========== bootstrap ======-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <!-- =========== Links  =========-->
    <link rel="stylesheet" href="Service.css">
    <script src="Service.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>
    <!-- start first section  -->
    <header class="container-fluid first-section">
        <nav class="navbar navbar-expand-lg   ">
            <div class="container">
                <a class="navbar-brand " href="#"><img src="../images/logo3.png" alt="" srcset=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav me-5">
                        <li class="nav-item me-5">
                            <a class="nav-link hoverAfter " aria-current="page" href="../index.php">Home</a>

                        </li>
                        <li class="nav-item me-5 ">
                            <a class="nav-link hoverAfter " aria-current="page" href="../Service/Service.php">Services

                            </a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link hoverAfter " aria-current="page" href="../Contact/Contact.php">Contact</a>

                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link hoverAfter " aria-current="page" href="../AboutUs/About.php">About</a>

                        </li>
                        <li class="nav-item  me-5">
                            <a class="nav-link  " aria-current="page" href="#"><i
                                    class="fa-solid fa-magnifying-glass"></i></a>
                        </li>
                       
                        <?php if(isset($_SESSION['username'])){ ?>
                            <li class="nav-item me-5 ">
                            <a class="nav-link loginBtn" aria-current="page" href="../singIN/logout.php">logout</a>
                        
                        <?php } else{ ?>
                        <li class="nav-item me-5 ">
                            <a class="nav-link loginBtn" aria-current="page" href="../singIN/sing.php">Login</a>

                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end first section  -->
    -->

    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="section-head col-sm-12">
                    <h4><span>Why choose</span> Us ?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Tenetur, in velit. Dolore quas perferendis perspiciatis odio voluptatum unde sed repellendus.
                    </p>
                </div>


                <div class=" col-md-3">
                    <div class="item"><span class="icon  "> <img class="animate__animated animate__headShake"
                                src="img/icon1.png" alt="icon1"></span>
                        <h6>Fresh Products</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ipsam! Porro, nisi.</p>
                    </div>
                </div>


                <div class=" col-md-3">
                    <div class="item"><span class="icon "> <img class="animate__animated animate__headShake"
                                src="img/icon2.png" alt="icon1"></span>
                        <h6>Skilled Chefs</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ipsam! Porro, nisi.</p>
                    </div>
                </div>


                <div class=" col-md-3">
                    <div class="item"><span class="icon "> <img class="animate__animated animate__headShake"
                                src="img/icon3.png" alt="icon1"></span>
                        <h6>Best Bar</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ipsam! Porro, nisi.</p>
                    </div>
                </div>


                <div class=" col-md-3">
                    <div class="item"><span class="icon "> <img class="animate__animated animate__headShake"
                                src="img/icon4.png" alt="icon1"></span>
                        <h6>Vegan Cuisine</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ipsam! Porro, nisi.</p>
                    </div>
                </div>

                <div class=" col-md-3">
                    <div class="item"><span class="icon "> <img class="animate__animated animate__headShake"
                                src="img/icon5.png" alt="icon1"></span>
                        <h6>Free Support</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ipsam! Porro, nisi.</p>
                    </div>
                </div>

                <div class=" col-md-3">
                    <div class="item"><span class="icon "> <img class="animate__animated animate__headShake"
                                src="img/icon6.png" alt="icon1"></span>
                        <h6>Fast Serve On Table</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ipsam! Porro, nisi.</p>
                    </div>
                </div>

                <div class=" col-md-3">
                    <div class="item"><span class="icon "> <img class="animate__animated animate__headShake"
                                src="img/icon7.png" alt="icon1"></span>
                        <h6>Fresh Healthy Food</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ipsam! Porro, nisi.</p>
                    </div>
                </div>


                <div class=" col-md-3">
                    <div class="item"><span class="icon "> <img class="animate__animated animate__headShake"
                                src="img/icon8.png" alt="icon1"></span>
                        <h6>Quick Delivery</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ipsam! Porro, nisi.</p>
                    </div>
                </div>

                <div class=" col-md-3">
                    <div class="item"><span class="icon "> <img class="animate__animated animate__headShake"
                                src="img/icon9.png" alt="icon1"></span>
                        <h6>Order Tokan</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ipsam! Porro, nisi.</p>
                    </div>
                </div>

                <div class=" col-md-3">
                    <div class="item"><span class="icon "> <img class="animate__animated animate__headShake"
                                src="img/icon10.png" alt="icon1"></span>
                        <h6>Table Service</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ipsam! Porro, nisi.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="item"><span class="icon "> <img class="animate__animated animate__headShake"
                                src="img/icon11.png" alt="icon1"></span>
                        <h6>Awesome Team</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ipsam! Porro, nisi.</p>
                    </div>
                </div>

                <div class=" col-md-3">
                    <div class="item"><span class="icon feature_box_col_12"> <img
                                class="animate__animated animate__headShake" src="img/icon12.png" alt="icon1"></span>
                        <h6>Discount Voucher</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ipsam! Porro, nisi.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

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

</body>

</html>