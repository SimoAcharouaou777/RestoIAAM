<?php
include("../include/cnx.php");

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql ="DELETE FROM users WHERE id= $id";
    mysqli_connect($connect,$sql);

}
header("location: Users.php");
exit;

?>