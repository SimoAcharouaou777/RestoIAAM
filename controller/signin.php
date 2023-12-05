<?php
include "../include/cnx.php";
include "../model/signin.php";
session_start();

if (isset($_POST['submit_login'])) {

$username = $_POST['username_log'];
  $password_log = $_POST['password_log'];

  $result = login($username);
  
  
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
   
      if (password_verify($password_log  , $row['password'])) {
          $_SESSION["username"] = $username;
          $_SESSION["id"] = $row['id'];
          $_SESSION["role"] = $row['user_role'];
          $_SESSION["email"] = $row['email'];
          $_SESSION["password"] = $row['password'];
          header("location:../index.php" );
          exit;
      }else{
        $errorMessagelog="the password doesnt match!!!";
      }
  } else {
      $errorMessagelog = "Username or password are incorrect";
  }
}
?>