<?php
include '../include/cnx.php';

// Initialize variables
$id = "";
$name = "";
$email = "";
// $password = "";
$errorMessage = "";

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    // $password = $_POST['password'];

    //validate input
    
       if(empty($name) || empty($email) /*|| empty($password)*/ ){
        $errorMessage="are the fields are required";
       }
        // Update the user information in the database
    $sql = "UPDATE users SET name='$name', email='$email'/* password='$password'*/ WHERE id=$id";
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

// Fetch existing data from the database if the form is not submitted
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch existing data from the database
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($connect,$sql);
    $row =mysqli_fetch_assoc($result);

    $name = $row["name"];
    $email = $row["email"];
 
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
        <!-- <label class="col-sm-3 col-form-label">password</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" name="password" value="">
        </div> -->
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