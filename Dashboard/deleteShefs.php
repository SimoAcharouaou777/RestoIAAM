<?php
session_start();
if($_SESSION["role"] == 'client' || $_SESSION["role"] == 'shef'){
	header("location:../vue/eroor.php");
}
include("../include/cnx.php");
$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM shefs WHERE id=$id";
    $result = mysqli_query($connect, $sql);

    header("location: Shefs.php");
}

?>