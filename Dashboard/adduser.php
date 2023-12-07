<?php
session_start();
if($_SESSION["role"] == 'client'){
    header("location:../index.php");
}
include("../include/cnx.php");

//variables that will stock our data 
$name = "";
$email = "";
$password = "";
$user_role="";
$errorMessage = "";
$successeMessage = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_role = $_POST['user_role'];

    
        if (empty($name) || empty($email) || empty($password) || empty($user_role)) {
            $errorMessage = "all the fiels are required";
        }else{
            $sql="INSERT INTO users (name , email , password , user_role) VALUES ('$name','$email','$password','$user_role')";
            $result = mysqli_query($connect,$sql);
            if (!$result) {
                $errorMessage = "invalid query : " . mysqli_error($connect);
            }
            $successeMessage = "Clients added successfully";
            header("location:Users.php");
            exit;
        }
  
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add a Client</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>New Client</h2>

        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            </div>
            ";
        }

        ?>

        <form action="" method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">role</label>
                <div class="col-sm-6">
                    <select name="user_role" class="form-control">
                        <option value="client" >client</option>
                        <option value="Shef">Shef</option>
                        <option value ="admin">admin</option>
                    </select>
                </div>
            </div>

            <?php
            if (!empty($successeMessage)) {
                echo "
            <div class='row mb-3'>
             <div class='offset-sm-3 col-sm-6'>
             <div class='alert alert-success alert-dismissible fade show' role='alert'>
             <strong>$successeMessage</strong>
             <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
             </div>
             </div>
             </div>
            ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" name="submit" class="btn btn-primary">submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="dashboard.php" role="button">Cancel</a>
                </div>
            </div>

        </form>
    </div>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>