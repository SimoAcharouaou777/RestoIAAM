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
        $sql = "SELECT * FROM users WHERE name = '$username' ";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) != 0) {
            $errorMessage = "this email , username is already in use";
            echo $errorMessage;
        } else {
            $sql = "INSERT INTO users (name , email , password , user_role ) VALUES('$username','$email','$hashedpassword','$user_role')";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                $successMessage = "the account have been created succusfully";
                echo $successMessage;
            } else {
                echo "error" . mysqli_error($connect);
            }
        }
    }

