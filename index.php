<?php
include "./include/cnx.Php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=B612:ital,wght@0,400;0,700;1,400;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,200;1,9..40,300;1,9..40,400&family=Roboto+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Home</title>
</head>

<body>
	<!-- start first section  -->
	<header class="container-fluid first-section">
		<nav class="navbar navbar-expand-lg   ">
			<div class="container">
				<a class="navbar-brand " href="#"><img src="images/logo3.png" alt="" srcset=""></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse " id="navbarNavDropdown">
					<ul class="navbar-nav me-5">
						<li class="nav-item me-5">
							<a class="nav-link hoverAfter " aria-current="page" href="index.php">Home</a>
						</li>
						<li class="nav-item me-5 ">
							<a class="nav-link hoverAfter " aria-current="page" href="Service/Service.php">Services
							</a>
						</li>
						<li class="nav-item me-5">
							<a class="nav-link hoverAfter " aria-current="page" href="Contact/Contact.php">Contact</a>
						</li>
						<li class="nav-item me-5">
							<a class="nav-link hoverAfter " aria-current="page" href="AboutUs/About.php">About</a>
						</li>
						<li class="nav-item  me-5">
							<!-- here is  the chearching input   fosjfosdjfsdjfjsfjhfjfoijfidjjj -->
							<nav class="navbar bg-body-tertiary">
							<div class="container-fluid">
								<form class="d-flex">
									<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search_input" oninput="livesearch(); displaysearch();">
									<button class="btn btn-outline-success" type="submit" id="search_submit">Search</button>
								</form>
							</div>
							<div class="live-search-result" id="live-search" style="position: absolute; display: none ; top: 100%; left: 0; width: 70%; background-color: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
								<ul class="search-result" id="searchResult" style="list-style: none; padding: 10px; margin: 0;">
								</ul>
							</div>
								</nav>

						</li>
						<?php if (isset($_SESSION['username'])) {?>
							<li class="nav-item me-5 ">
							<a class="nav-link loginBtn" aria-current="page" href="singIN/logout.php">Logout</a>
                        <?php if ($_SESSION['role'] == "client") {?>
							<li class="nav-item me-5 ">
							<a class="nav-link loginBtn" aria-current="page" href="vue/profile.php?id=<?=$_SESSION['id']?>">profile</a>
						</li>
						<?php }?>
						<?php if ($_SESSION['role'] == "admin" || $_SESSION['role'] == "shef") {?>
							<li class="nav-item me-5 ">
							<a class="nav-link loginBtn" aria-current="page" href="Dashboard/dashboard.php?id=<?=$_SESSION['id']?>">Dashboard</a>
							<?php }?>
		   				<?php } else {?>
						<li class="nav-item me-5 ">
							<a class="nav-link loginBtn" aria-current="page" href="singIN/sing.php">Login</a>
						</li>
						<?php }?>
					</ul>
				</div>
			</div>
		</nav>
		<img src="images/smoke.png" class="smoke smoke1" alt="smoke">
		<img src="images/smoke.png" class="smoke smoke2" alt="smoke">
		<img src="images/smoke.png" class="smoke smoke3" alt="smoke">
		<img src="images/smoke.png" class="smoke smoke4" alt="smoke">
		<img src="images/smoke.png" class="smoke smoke5" alt="smoke">
		<img src="images/smoke.png" class="smoke smoke6" alt="smoke">
		<img src="images/smoke.png" class="smoke smoke1" alt="smoke">
		<img src="images/smoke.png" class="smoke smoke2" alt="smoke">
		<img src="images/smoke.png" class="smoke smoke3" alt="smoke">
		<img src="images/smoke.png" class="smoke smoke4" alt="smoke">
		<img src="images/smoke.png" class="smoke smoke5" alt="smoke">
		<img src="images/smoke.png" class="smoke smoke6" alt="smoke">

	</header>
	<!-- end first section  -->
	<!-- start second section  -->
	<div class="container second-section mt-5">
		<div class="row ms-5 d-flex justify-content-center">
			<div class=" col-lg-4 col-md-6 col-sm-12 row ps-5 my-5">
				<i class="fa-solid fa-cart-shopping col-4"></i>
				<div class="col-8  pt-3">
					<h1>Discount Voucher</h1>
					<p>often simply referred to as <br> a voucher or coupon</p>
				</div>
			</div>
			<div class=" col-lg-4 col-md-6 col-sm-12 row ps-5 my-5">
				<i class="fa-solid fa-bowl-food col-4"></i>
				<div class="col-8  pt-3">
					<h1>Healthy Fresh Food</h1>
					<p>to attract customers, boost <br> and promote customer loyalty</p>
				</div>
			</div>
			<div class=" col-lg-4 col-md-6 col-sm-12 row ps-5 my-5">
				<i class="fa-solid fa-bell-concierge col-4"></i>
				<div class="col-8  pt-3">
					<h1>Fast Service On Table</h1>
					<p>service approach in the <br> or food service industry</p>
				</div>
			</div>

		</div>
	</div>
	<!-- end second section  -->
	<!-- start third section  -->
	<div class="third-section container ">
		<h1 class="menuTitle m-5">Browse Our Menu</h1>
           <?php
$sql = "SELECT * FROM products";
$stmt = mysqli_prepare($connect, $sql);
if ($stmt) {
    mysqli_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
						<div class='row mx-auto d-flex justify-content-center'>
							<div class='col-lg-3 col-md-6 col-sm-12 my-5'>
							<img style='width:50px;' src='./Dashboard/dashimages/{$row['image']}' alt='Product Image'>
								<h1>$row[name]</h1>
								<span>$15.00</span>
								<small><a href='Product/Product.php'>+</a></small>
							</div>
						</div>
						";
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($connect);
}

?>
	</div>
	<!-- end third section  -->
	<!-- start forth section  -->
	<div class="container-fluid forth-section mt-5 ">
		<h1 class="mt-5">Why We Are The Best</h1>
		<div class="container pb-lg-5">
			<div class="row py-4 d-flex justify-content-center pb-lg-5">
				<div class="col-lg-4 col-md-6 col-ms-12  m-3">
					<i class="fa-solid fa-plate-wheat"></i>
					<h1>Prickly Pear Tonic</h1>
					<p>Lorem Ipsum is simply dummy text of <br> the printing and typesetting industry. <br> Lorem Ipsum
						dummy text</p>
					<span>Read More</span>
				</div>
				<div class="col-lg-4 col-md-6 col-ms-12 m-3">
					<i class="fa-solid fa-plate-wheat"></i>
					<h1>Prickly Pear Tonic</h1>
					<p>Lorem Ipsum is simply dummy text of <br> the printing and typesetting industry. <br> Lorem Ipsum
						dummy text</p>
					<span>Read More</span>
				</div>
				<div class="col-lg-4 col-md-6 col-ms-12  m-3">
					<i class="fa-solid fa-plate-wheat"></i>
					<h1>Prickly Pear Tonic</h1>
					<p>Lorem Ipsum is simply dummy text of <br> the printing and typesetting industry. <br> Lorem Ipsum
						dummy text</p>
					<span>Read More</span>
				</div>
			</div>
		</div>


	</div>
	<!-- end forth section  -->
	<!-- strat five  section  -->
	<div class="five-section container mt-5 text-center">
		<h1 class="fst-italic">Our Delicious Offer</h1>
		<div class="row mt-5 p-5 ">
			<div class=" offset-lg-2 col-lg-1 col-md-3 col-sm-6"><i class="fa-solid fa-plate-wheat"></i></div>
			<div class="col-lg-1 col-md-3 col-sm-6"><i class="fa-solid fa-plate-wheat"></i></div>
			<div class="col-lg-1 col-md-3 col-sm-6"><i class="fa-solid fa-plate-wheat"></i></div>
			<div class="col-lg-1 col-md-3 col-sm-6"><i class="fa-solid fa-plate-wheat"></i></div>
			<div class="col-lg-1 col-md-3 col-sm-6"><i class="fa-solid fa-plate-wheat"></i></div>
			<div class="col-lg-1 col-md-3 col-sm-6"><i class="fa-solid fa-plate-wheat"></i></div>
			<div class="col-lg-1 col-md-3 col-sm-6"><i class="fa-solid fa-plate-wheat"></i></div>
			<div class="col-lg-1 col-md-3 col-sm-6"><i class="fa-solid fa-plate-wheat"></i></div>
		</div>
		<div class="row cards text-start d-flex justify-content-center">
			<div class="col-lg-6 col-md-12 ">
				<img src="images/menu11.png" alt="menu11 ">
				<h1>Purple Corn Tostada</h1>
				<p>Lorem Ipsum as their default model text, and a <br> search for sites still in their infancy</p>
				<span>$ 3.30</span>
			</div>
			<div class="col-lg-6 col-md-12">
				<img src="images/menu11.png" alt="menu11">
				<h1>Purple Corn Tostada</h1>
				<p>Lorem Ipsum as their default model text, and a <br> search for sites still in their infancy</p>
				<span>$ 3.30</span>
			</div>
			<div class="col-lg-6 col-md-12 ">
				<img src="images/menu11.png" alt="menu11 ">
				<h1>Purple Corn Tostada</h1>
				<p>Lorem Ipsum as their default model text, and a <br> search for sites still in their infancy</p>
				<span>$ 3.30</span>
			</div>
			<div class="col-lg-6 col-md-12">
				<img src="images/menu11.png" alt="menu11">
				<h1>Purple Corn Tostada</h1>
				<p>Lorem Ipsum as their default model text, and a <br> search for sites still in their infancy</p>
				<span>$ 3.30</span>
			</div>
			<div class="col-lg-6 col-md-12 ">
				<img src="images/menu11.png" alt="menu11 ">
				<h1>Purple Corn Tostada</h1>
				<p>Lorem Ipsum as their default model text, and a <br> search for sites still in their infancy</p>
				<span>$ 3.30</span>
			</div>
			<div class="col-lg-6 col-md-12">
				<img src="images/menu11.png" alt="menu11">
				<h1>Purple Corn Tostada</h1>
				<p>Lorem Ipsum as their default model text, and a <br> search for sites still in their infancy</p>
				<span>$ 3.30</span>
			</div>
			<div class="col-lg-6 col-md-12 ">
				<img src="images/menu11.png" alt="menu11 ">
				<h1>Purple Corn Tostada</h1>
				<p>Lorem Ipsum as their default model text, and a <br> search for sites still in their infancy</p>
				<span>$ 3.30</span>
			</div>
			<div class="col-lg-6 col-md-12">
				<img src="images/menu11.png" alt="menu11">
				<h1>Purple Corn Tostada</h1>
				<p>Lorem Ipsum as their default model text, and a <br> search for sites still in their infancy</p>
				<span>$ 3.30</span>
			</div>
		</div>
	</div>
	<!-- end five  section  -->
	<!-- start sixth  section  -->
	<div class="sixth-section container-fluid mt-5 px-5 ">
		<div class="container">
			<div class="row d-flex align-items-center py-lg-1 py-4">
				<div class="col-lg-2 col-md-6 col-sm-12 my-4">
					<span>10</span>
					<p>Award Won</p>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-12  my-4">
					<span>100</span>
					<p>Daily Orders</p>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-12 my-4">
					<span>99</span>
					<p>Members</p>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-12 my-4">
					<span>99</span>
					<p>Menu</p>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-12 my-4">
					<span>100</span>
					<p>Specialities</p>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-12 my-4">
					<span>10</span>
					<p>Award</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end sixth  section  -->
	<!-- start seven  section  -->
	<div class="seven-section container mt-5">
		<h1 class="my-5">What Our Client Say</h1>
		<div class="row">
			<div class="col-md-6 col-sm-12 me-md-4">
				<img src="/images/comment.png" alt="">
				<p>I recently had the pleasure of dining at RestIAM, and I
					can't say enough about how wonderful the experience was.
					From the moment I walked in, I felt welcomed and well taken
					care of.</p>
				<span>Culinary Delight!</span>
			</div>
			<div class="col-md-6 col-sm-12">
				<img src="/images/comment.png" alt="">
				<p>I recently had the pleasure of dining at RestIAM, and I
					can't say enough about how wonderful the experience was.
					From the moment I walked in, I felt welcomed and well taken
					care of.</p>
				<span>Culinary Delight!</span>
			</div>
			<span class="sin "><img src="images/sin.png" alt="sin"></span>
		</div>

	</div>
	<!-- end seven  section  -->
	<!-- start last  section  -->
	<div class="last-section container-fluid ">
		<div class="container">
			<div class="row ">
				<div class="col-lg-2 col-md-6 col-sm-12 my-5"><img src="images/award1.png" alt="award1"></div>
				<div class="col-lg-2 col-md-6 col-sm-12 my-5"><img src="images/award2.png" alt="award2JG"></div>
				<div class="col-lg-2 col-md-6 col-sm-12 my-5"><img src="images/award3.png" alt="award6t"></div>
				<div class="col-lg-2 col-md-6 col-sm-12 my-5"><img src="images/award4.png" alt="awardizydf"></div>
				<div class="col-lg-2 col-md-6 col-sm-12 my-5"><img src="images/award5.png" alt="awarddiyf"></div>
				<div class="col-lg-2 col-md-6 col-sm-12 my-5"><img src="images/award1.png" alt="award1sj"></div>
			</div>
		</div>
	</div>
	<!-- end last  section  -->
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
	<div class="spiner">
		<img src="images/logo3.png" alt="logo">
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>
	<script src="index.js"></script>

    <script>
           function livesearch(){
           var searchInput = document.getElementById('search_input').value;
		   if(searchInput !== ''){
			 request = new XMLHttpRequest();
			request.onreadystatechange = function(){
				if(request.readyState == 4 && request.status == 200){
					document.getElementById('searchResult').innerHTML = request.responseText;
				}else{
					document.getElementById('searchResult').innerHTML = '<li>No results</li>';
				}
			}
               request.open("GET","search.php?q=" +searchInput,true);
			   request.send();
		   }
		   }


	</script>

    <script>
			function displaysearch() {
			var searchInput = document.getElementById('search_input').value;
			var livesearch = document.getElementById('live-search');
			if (searchInput.trim() !== '') {
				livesearch.style.display = 'block';
			} else {
				livesearch.style.display = 'none';
			}
			}
	</script>
</body>

</html>

