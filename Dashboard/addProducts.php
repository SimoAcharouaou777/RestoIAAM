<?php
include("../include/cnx.php");

//Variables that will stock our data
$Product_Name ="";
$Stock_Quantity="";
$product_image="";
$errorMessage="";
$successeMessage="";

if(isset($_POST["submit"])){
    $Product_Name = $_POST["Product_Name"];
    $Stock_Quantity = $_POST["Stock_Quantity"];
    $product_image=$_FILES['product_image']['name'];
    $product_image_tmp_name =$_FILES['product_image']['tmp_name'];
    $product_image_folder = __DIR__.'/dashimages/'.$product_image;
    
    do{
       if(empty($Product_Name) || empty($Stock_Quantity) || empty($product_image)){
        $errorMessage = "all the fieds are required";
       }

       // add Products to the database
       $sql = "INSERT INTO products (name, Stock_Quantity, image) " .
       "VALUES ('$Product_Name', '$Stock_Quantity', '$product_image')";

       
       $result = mysqli_query($connect,$sql);
       if(!$result){
        $errorMessage = "invalid query : " .mysqli_error($connect);
        break;
       };

       move_uploaded_file($product_image_tmp_name , $product_image_folder);



       // go back to the Products page
       header("location:Products.php");
       exit;


    }while(false);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add a Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>New Product</h2>

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

        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
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
         <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Product image</label>
            <div class="col-sm-6">
                <input type="file" class="form-control" name="product_image" accept=" image/png, image/jpeg, image/jpg ">
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