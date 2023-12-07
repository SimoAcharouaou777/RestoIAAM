<?php
include "../include/cnx.php";
      function login($username){
        global $connect;
        $sql="SELECT * FROM users WHERE name= ?";
        $stmt = mysqli_prepare($connect,$sql);
  
        if($stmt){
          mysqli_stmt_bind_param($stmt, "s", $username );
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          mysqli_stmt_close($stmt);
        }
        return $result;
      }

?>