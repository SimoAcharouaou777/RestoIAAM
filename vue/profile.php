<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" >
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="" target="__blank">Profile</a>
        <a class="nav-link" href="../index.php" target="__blank">Go back</a>
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">

                  <?php  
                  include("../include/cnx.php");
                        if(isset($_POST['submit'])){
                            $name = $_SESSION['username'] ;
                            $email = $_SESSION['email'];
                            $first_name = $_POST['first_name'];
                            $last_name = $_POST['last_name'];
                            $location = $_POST['location'];
                            $phone_number = $_POST['phone_number'];
                            $birthday = $_POST['birthday'];
                            if(empty($name) || empty($email) || empty($first_name) || empty($last_name) || empty($location) || empty($phone_number) || empty($birthday)){
                                $sql = "INSERT INTO users (name , email , first_name , last_name , location , phone_number , birthday )" .
                                "VALUES('$name','$email','$first_name','$last_name','$location','$phone_number','$birthday')";

                            }else{
                                $sql = "UPDATE users SET name='$name', email='$email', first_name ='$first_name' , last_name ='$last_name' , location ='$location' , phone_number = '$phone_number' , birthday = '$birthday' WHERE username=$name";
                                $result = mysqli_query($connect,$sql);
                                if(!$result){
                                    echo" error : " .mysqli_error($connect);
                                } else{
                                    $sql="SELECT * FROM users WHERE username=$name";
                                    $result=mysqli_query($connect,$sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $name = $row['name'];
                                    $email = $row['email'];
                                    $first_name = $row['first_name'];
                                    $last_name = $row['last_name'];
                                    $location = $row['location'];
                                    $phone_number = $row['phone_number'];
                                    $birthday = $row['birthday'];
                                }
                            }
                        }
                        
                        ?>
                    <form method="post" action="">
                       
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">username</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" name="username" value="<?php echo $name ;?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="first_name" value="<?php echo $first_name ; ?>">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="last_name" value="<?php echo $last_name ; ?>">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Location</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" name="location" value="<?php echo $location ; ?>">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" name="email" value="<?php echo $_SESSION['email']; ?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" name="phone_number" value="<?php echo $phone_number ; ?>">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" name="birthday" value="<?php echo $birthday ; ?>">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit" name="submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>