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
  <div class="card bg-dark text-white"" style="width: 18rem; margin-top: 12px">
			  <img src="images/admin.jpg" 
			       class="card-img-top" 
			       alt="admin image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['firstname']?>
			    </h5>
			  </div>
			</div>
			<div class="p-3 mb-5">
        <div class="p-3 mb-2 bg-dark text-light">
				<h4 class="display-7 fs-3" style="text-align: center; font-weight: bold;">Product Maintenance</h4>
      </div>
				<table class="table table-striped table-light" 
				       style="width: 70rem;">
				  <thead>
				    <tr>
				      <th scope="col">Product name</th>
					  <th scope="col">Product type</th>
					  <th scope="col">Product price</th>
					  <th scope="col">Image</th> 
					  <th scope="col">Edit</th>
					  <th scope="col">Delete</th>
				    </tr>
				  </thead>
				  <tbody>
             <?php
            $res=mysqli_query($conn, "select * from products");
            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>".$row['prodname']."</td>";
                echo "<td>".$row['prodtype']."</td>";
                echo "<td>".$row['price']."</td>";
                echo "<td>"; ?> <img src="<?php echo $row["image"]; ?>" height="100" width="100"> <?php echo "</td>"; 
                echo "<td>"; ?> <a href="editprod.php?id=<?php echo $row['id']; ?>"><button type="button"
                class="btn btn-dark">Edit</button></a> <?php echo "</td>";
                echo "<td>"; ?> <a href="deleteprod.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">Delete</button>
                </a> <?php echo "</td>";
                echo "</tr>";
            }
            ?>
				  </tbody>
				</table>
				<a href="addprod.php"><button class="btn btn-light" type="button">Add Products</button></a>
				<a href="admin.php"><button class="btn btn-light" type="button">User Maintenance</button></a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
			</div>
</body>
</html>
<?php }else{
	header("Location: login.php");
} ?>