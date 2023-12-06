
 
 
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
			<th>first name</th>
			<th>last name</th>
			<th>location</th>
			<th>phone number</th>
			<th>birthday</th>
			<th>image</th>
			<th>image</th>




		</tr>
	</thead>
    <tbody>
    <?php
include("../include/cnx.php");

// read all rows in the table
$sql = "SELECT * FROM users WHERE user_role = 'client'";

// check the connection
$result = mysqli_query($connect, $sql);

if (!$result) {
    die("Invalid query " . mysqli_error($connect));
}

// read data of each row 
while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['location']; ?></td>
        <td><?php echo $row['phone_number']; ?></td>
        <td><?php echo $row['birthday']; ?></td>
        <td><img style="width:50px;" src="../vue/profile_images/<?php echo $row['image']; ?>" alt='Product Image'></td>
        <td>
            <a class='btn btn-primary btn-sm' href='updateuser.php?id=<?php echo $row['id']; ?>'>Update</a>
            <a class='btn btn-danger btn-sm' href='deleteuser.php?id=<?php echo $row['id']; ?>'>Delete</a>
        </td>
    </tr>
<?php } ?>

</tbody>
</table>

	<!-- end of data table -->
    
 </body>
 </html>
 
 
 