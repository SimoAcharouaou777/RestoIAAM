<?php

include("../include/cnx.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    echo $id;
    mysqli_query($connect,"DELETE FROM `products` where id = '$id'");
}

header("location:Products.php");
exit;

?>
