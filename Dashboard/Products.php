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
            <th>Product Image</th>
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

        while($row = mysqli_fetch_assoc($result)){ ?>
           
            <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['Stock_Quantity']?></td>
            <td><img style="width:60px;" src="./dashimages/<?php echo $row['image']; ?>" alt='Product Image' ></td>
            <td>
                <a class='btn btn-primary btn-sm' href='updateProducts.php?id=<?php echo $row['id']?> ' >Update</a>
                <a class='btn btn-danger btn-sm' href='deleteProducts.php?id=<?php echo $row['id']?>' >Delete</a>
            </td>
            </tr> 
           

       <?php } ?>
       
    
        
    </tbody>
    </table>
</body>
</html>