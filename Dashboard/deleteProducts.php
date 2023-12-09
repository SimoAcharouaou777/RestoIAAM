<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION["role"] == 'client'){
	header("location:../vue/eroor.php");
}
include("../include/cnx.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
   
    mysqli_query($connect,"DELETE FROM `products` where id = '$id'");
}

header("location:Products.php");
exit;

?>
