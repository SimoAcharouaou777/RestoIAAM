<?php
 include("../include/cnx.php");

$id ="";
$Product_Name="";
$Stock_Quantity="";
$errorMessage="";
$successeMessag="";

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $Product_Name =$_POST['Product_Name'];
    $Stock_Quantity =$_POST['Stock_Quantity'];

   do{
    if(empty($Product_Name) || empty($Stock_Quantity)){
        $errorMessage="all the input fields are required";
    }

    $sql ="UPDATE products  SET name = '$Product_Name', Stock_Quantity ='$Stock_Quantity' WHERE id=$id";
    $result = mysqli_query($connect,$sql);

    if($result){
        header("location:Products.php");
        exit;
    }else{
        $errorMessage= "error ".mysqli_error($connect);
    }

   }while(false);

}
   if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql ="SELECT * FROM products WHERE id=$id";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);

    $Product_Name = $row["name"];
    $Stock_Quantity = $row["Stock_Quantity"];


   }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Your Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Update Product</h2>

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
            <label class="col-sm-3 col-form-label">Product Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Product_Name" value="<?php echo $Product_Name; ?>">
            </div>
         </div>
         <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Stock_Quantity</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" name="Stock_Quantity" value="<?php echo $Stock_Quantity; ?>">
            </div>
         </div>
         <?php
         if(!empty($successeMessage)){
            echo"
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
                <a class="btn btn-outline-primary" href="Products.php" role="button">Cancel</a>
            </div>
         </div>
       
        </form>
    </div>
    <script  src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




