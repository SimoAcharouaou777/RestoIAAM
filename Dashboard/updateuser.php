<?php
session_start();
if($_SESSION["role"] == 'client' || $_SESSION["role"] == 'shef'){
    header("location:../vue/eroor.php");
}
include '../include/cnx.php';

$id = "";

$errorMessage = "";


if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $user_role = $_POST['user_role'];
    
    
       if( empty($user_role)){
        $errorMessage="are the fields are required";
       }
    $sql = "UPDATE users SET user_role = '$user_role' WHERE id=$id";
    $result = mysqli_query($connect,$sql);

    if ($result) {
        // Redirect after successful update
        header('Location: Users.php');
        exit;
    } else {
        // Display error message
        echo "Error: " .mysqli_error($connect);
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
         if(!empty($errorMessage)){
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
                <label class="col-sm-3 col-form-label">role</label>
                <div class="col-sm-6">
                    <select name="user_role" class="form-control">
                        <option value="client" >client</option>
                        <option value="Shef">Shef</option>
                        <option value ="admin">admin</option>
                    </select>
                </div>
            </div>
        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" name="submit" class="btn btn-primary">submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="Users.php" role="button">Cancel</a>
            </div>
         </div>

   
    </div>
    <!-- Rest of your form -->
</form>

    </div>
    <script  src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>