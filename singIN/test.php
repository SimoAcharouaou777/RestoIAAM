<?php 
include("../include/cnx.php");
session_start();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
    $user_role = $_POST['usertype'];

    if (empty($username) || empty($email) || empty($password) || empty($user_role)) {
        $errorMessage = "all the fields are requierd";
        echo $errorMessage;
    } else {
        $sql = "SELECT * FROM users WHERE name = ? ";
        $stmt= mysqli_prepare($connect,$sql);
        if($stmt){
         mysqli_stmt_bind_param($stmt , "s" , $username);
         mysqli_stmt_execute($stmt);
         $result= mysqli_stmt_get_result($stmt);
         $row = mysqli_fetch_assoc($result);
         mysqli_stmt_close($stmt);
        }
        
        if (mysqli_num_rows($result) != 0) {
            $errorMessage = "this email , username is already in use";
            echo $errorMessage;
        } else {
            $sql = "INSERT INTO users (name , email , password , user_role ) VALUES(?,?,?,?)";
            $stmt = mysqli_prepare($connect,$sql);
            if($stmt){
                mysqli_stmt_bind_param($stmt , "ssss" , $username,$email,$hashedpassword,$user_role);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
                
                $successMessage = "the account have been created succusfully";
                echo $successMessage;
            } else {
                echo "error" . mysqli_error($connect);
            }
        }
    }

