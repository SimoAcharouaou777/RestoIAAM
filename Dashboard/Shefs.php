<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>

<body>
<div class="container my-5">
    <h2>LIST OF Shefs</h2>
    <div class="d-flex justify-content-between">
    <a class="btn btn-danger"   href="dashboard.php" role="button">Go Back</a>
    </div>
   
</div>
<table class="table">
    <thead>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>email</th>
			<th>password</th>
			<th>action</th>
		</tr>
	</thead>
    <tbody>
        <?php
        include("../include/cnx.php");

        $sql ="select * from shefs" ;
        $result = mysqli_query($connect,$sql);
        if(!$result){
            die("error : ".mysqli_error($connect));
        }
        while($row = mysqli_fetch_assoc($result)){
            echo"
            <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[PASSWORD]</td>
            <td>
                <a class='btn btn-primary btn-sm' href='updateuser.php?id=$row[id]'>Update</a>
                <a class='btn btn-danger btn-sm' href='deleteuser.php?id=$row[id]'>Delete</a>
            </td>
        </tr>
            ";
            
            
        }







        ?>
        
    </tbody>
    </table>
</body>

</html>