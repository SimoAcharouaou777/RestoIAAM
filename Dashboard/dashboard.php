<?php
include("../include/cnx.php");
$sql = "select count(*) as userscount from users";
$user = mysqli_query($connect,$sql);
$sql = "select count(*) as ordercount from orders";
$order = mysqli_query($connect,$sql);
$sql ="select count(*) as totalproduct from products";
$product = mysqli_query($connect,$sql);
$sql ="select count(*) as shefscount from shefs";
$shef = mysqli_query($connect,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=B612:ital,wght@0,400;0,700;1,400;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,200;1,9..40,300;1,9..40,400&family=Roboto+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href=" https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
		<link rel="stylesheet" href="Dashboard.css">
	<title>Dashboard</title>
</head>

<body style="background-color: var(--secondColor);">
	<!-- start first section  -->
	<header class="container-fluid first-section">
		<nav class="container d-flex justify-content-between flex-nowrap ">
			<span class="d-flex justify-content-center">
				<a class="navbar-brand " href="#"><img src="../images/logo3.png" alt="" srcset=""></a>
				<a href="#" class="nav-link"><i class="fa-solid fa-user"></i></a>
				<a href="#" class="nav-link"><i class="fa-solid fa-bell"></i></a>
				<a href="#" class="nav-linkfloat-end "><i class="fa-sharp fa-solid fa-sun"></i></a>
			</span>
			<span>
				<i data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
					aria-controls="offcanvasWithBothOptions" class="fa-solid fa-bars"></i>
			</span>
		</nav>
	</header>
	<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
		aria-labelledby="offcanvasWithBothOptionsLabel">
		<div class="offcanvas-header">
			<img src="../images/logo3.png" alt="logo">
			<i class="fa-solid fa-xmark " data-bs-dismiss="offcanvas" aria-label="Close"></i>
		</div>
		<div class="offcanvas-body mt-5">
			<ul>
				<li><i class="fa fa-dashboard me-3" ></i> Dashboard</li>
				<li><a href="Users.php" style="text-decoration : none"><i class="fa fa-store me-3"></i> Users</li></a>
				<li><a href="Shefs.php" style="text-decoration : none"><i class="fa fa-message me-3"></i> Shefs</li></a>
				<li><a href="Products.php" style="text-decoration : none"><i class="fa-solid fa-check me-3"></i> Product </li></a>
				<li><i class="fa fa-phone me-3"></i> Help</li>
				<li><i class="fa-solid fa-gear me-3"></i> Setting</li>
			</ul>
		</div>
	</div>
	<!-- end first section  -->
	<!-- start second section  -->
	<div class="container second-section ">
		<div class=" row px-4">
			<div class="col-lg-5 col-md-6 col-sm-12">
				<h1>Good Morning, Mohamed !</h1>
				<p>Here's what's happening with your store today.</p>
			</div>
			
		</div>
	</div>
	<!-- end second section  -->
	<!-- start third section  -->
	<div class="container third-section">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-3 col-md-6 col-sm-12 mt-5 card">
				<span class="title">TOTAL PRODUCTS</span>
				<small>+16.24 %</small>
				<p><?= mysqli_fetch_assoc($product)['totalproduct']?></p>
				<span class="bottom">View More</span>
				<i class="fa-solid fa-dollar-sign"></i>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mt-5 card">
				<span class="title">ORDERS</span>
				<small> -3.34 % </small>
				<p><?=mysqli_fetch_assoc($order)['ordercount']?></p>
				<span class="bottom">View More</span>
				<i class="fa-solid fa-yin-yang"></i>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mt-5 card">
				<span class="title">CUSTOMERS</span>
				<small>+12.75 % </small>
				<p><?= mysqli_fetch_assoc($user)['userscount']?></p>
				<span class="bottom">View More</span>
				<i class="fa-solid fa-person-rifle"></i>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mt-5 card">
				<span class="title">Shefs </span>
				<small>+1.64 %</small>
				<p><?= mysqli_fetch_assoc($shef)['shefscount']?></p>
				<span class="bottom">View More</span>
				<i class="fa-solid fa-wallet"></i>
			</div>
		</div>
	</div>
	<!-- end third section  -->

	
   
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
	<script>new DataTable('#example');</script>
	<script src="Dashboard.js"></script>
</body>

</html>