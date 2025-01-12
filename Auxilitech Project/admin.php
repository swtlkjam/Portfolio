<?php 
   session_start();
   include "conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>User Maintenance</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="./stylesMaintenance.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
	<?php if ($_SESSION['role'] == 'admin') {?>
		<!-- For Admin -->
      		<div class="card bg-dark text-white" style="width: 18rem; margin-bottom: 150px">
			  <img src="images/admin.jpg" 
			       class="card-img-top" 
			       alt="admin image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['firstname']?>
			    </h5>
					
			  </div>
			</div>
			<div class="p-3">
				<?php include 'php/users.php';
                if (mysqli_num_rows($res) > 0) {?>
				<div class="p-3 mb-2 bg-dark text-light">
				<h4 class="display-7 fs-3" style="text-align: center; font-weight: bold;">User Maintenance</h4>
				</div>
				
				<table class="table table-striped table-light" 
				       style="width: 70rem;">
				  <thead>
				    <tr>
				      <th scope="col">First name</th>
					  <th scope="col">Last name</th>
					  <th scope="col">Birthdate</th>
					  <th scope="col">Contact</th> 
				      <th scope="col">Username</th>
					  <th scope="col">Password</th>
				      <th scope="col">Role</th>
					  <th scope="col">Edit</th>
					  <th scope="col">Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	$i =1;
				  	while ($rows = mysqli_fetch_assoc($res)) {?>
				    <tr>
				      <td><?=$rows['firstname']?></td>
					  <td><?=$rows['lastname']?></td>
					  <td><?=$rows['birthdate']?></td>
					  <td><?=$rows['contact']?></td>
				      <td><?=$rows['username']?></td>
					  <td><?=$rows['password']?></td>
				      <td><?=$rows['role']?></td>
					  <td><a href="edit.php?id=<?=$rows['id']?>"><button type="button"
                      class="btn btn-dark">Edit</button></a></td>
					  <td><a href="delete.php?id=<?php echo $rows['id']; ?>"><button type="button"
                      class="btn btn-danger">Delete</button></a></td>
				    </tr>
				    <?php $i++; }?>
				  </tbody>
				</table>
				<?php }?>
				<a href="add.php"><button class="btn btn-light" type="button">Add Users/Admins</button></a>
				<a href="prod-maintenance.php"><button class="btn btn-light" type="button">Product Maintenance</button></a>
				<a href="logout.php" class="btn btn-danger">Logout</a>
			</div>
	<!-- For Users -->
	<?php }else{
	header("Location: index.php");
	} ?>
</body>
</html>
<?php }else{
	header("Location: login.php");
} ?>