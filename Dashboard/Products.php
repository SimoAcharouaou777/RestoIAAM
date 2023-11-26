<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
    <h2>LIST OF Products</h2>
    <div class="d-flex justify-content-between">
    <a class="btn btn-primary" href="addProducts.php" role="button" >New Product</a>
    <a class="btn btn-danger"   href="dashboard.php" role="button">Go Back</a>
    </div>
   
</div>

<table class="table">
    <thead>
		<tr>
			<th>ID</th>
			<th>Product name</th>
			<th>Stock_Quantity</th>
			<th>action</th>
		</tr>
	</thead>
    <tbody>
        <?php
        include("../include/cnx.php");
    
        $sql ="SELECT * FROM products";
        $result = mysqli_query($connect,$sql);
        //check the connection
        if(!$result){
         echo "invalid query : " .mysqli_error($connect);
        }

        while($row = mysqli_fetch_assoc($result)){
            echo "
            <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[Stock_Quantity]</td>
            <td>
                <a class='btn btn-primary btn-sm' href='updateProducts.php?id=$row[id]' >Update</a>
                <a class='btn btn-danger btn-sm' href='deleteProducts.php?id=$row[id]' >Delete</a>
            </td>
        </tr> 
            ";

        }
        ?>
       
    
        
    </tbody>
    </table>
</body>
</html>