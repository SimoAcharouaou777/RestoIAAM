
 
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
 </head>
 <body >

<div class="container my-5">
    <h2>LIST OF USERS</h2>
    <div class="d-flex justify-content-between">
    <a class="btn btn-primary" href="adduser.php" role="button" >New Client</a>
    <a class="btn btn-danger"   href="dashboard.php" role="button">Go Back</a>
    </div>
   
</div>
 <!-- start of data table -->
   

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

        //read all rows in the table

        $sql = "SELECT * FROM users";

        //check the connection
        $result = mysqli_query($connect,$sql); 

        if(!$result){
            die("invalid query ".mysqli_error($connect));
        }
        
        // read data of each row 
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[password]</td>
            <td>
                <a class='btn btn-primary btn-sm' href='updateuser.php?id=$row[id]'>Update</a>
                <a class='btn btn-danger btn-sm' href='deleteuser.php?id=$row[id]'>Delete</a>
            </td>
        </tr> ";
        }







        ?>
        
    </tbody>
    </table>
	<!-- end of data table -->
    
 </body>
 </html>
 
 
 