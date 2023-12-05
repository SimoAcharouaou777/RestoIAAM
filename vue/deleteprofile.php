<?php
include("../include/cnx.php");

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql ="DELETE FROM users WHERE id= ?";
    $stmt = mysqli_prepare($connect,$sql);
    if($stmt){
     mysqli_stmt_bind_param($stmt , "i" , $id);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);
    }else{
        echo"error".mysqli_error($connect);
    }

}
header("location:../singIN/sing.php");
exit;

?>