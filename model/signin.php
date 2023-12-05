<?php
include "../include/cnx.php";
      function login($username){
        global $connect;
        $stmt = $connect->prepare("SELECT * FROM users WHERE name = ?");
        $sql="SELECT * FROM users WHERE name= ?";
        $stmt = mysqli_prepare($connect,$sql);
  
        if($stmt){
          mysqli_stmt_bind_param ($stmt, "s", $username );
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_fetch_assoc($result);
          mysqli_stmt_close($stmt);
        }
        return $result;
      }

?>