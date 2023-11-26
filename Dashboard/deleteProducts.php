<?php

include("../include/cnx.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE  FROM products WHERE id = $id";
    mysqli_connect($connect,$sql);
}

header("location:Products.php");
exit;



?>