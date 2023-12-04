<?php
include("../include/cnx.php");

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql ="DELETE FROM users WHERE id= $id";
    $result=mysqli_query($connect,$sql);

}
header("location:../singIN/sing.php");
exit;

?>