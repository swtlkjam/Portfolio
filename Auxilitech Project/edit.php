<?php include 'php/edit-check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Edit</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="./stylesLOGIN.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container" style="width: 450px; padding-top: 25px; padding-bottom: 15px; margin-top: 50px; margin-bottom: 50px;">
        <form class="form-group" id="createAccount" action="php/edit-check.php" method="post">
            <h4 class="form__title">Edit Info</h4>
            <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			<?php } ?>

            <?php if (isset($_GET['success'])) { ?>
               <div class="alert alert-success" role="alert">
				  <?=$_GET['success']?>
			  </div>
            <?php } ?>

            <div class="form__input-group">
               <input type="text" name="firstname" placeholder="Firstname" class="form-control" value="<?=$row['firstname'] ?>">
            </div>

            <div class="form__input-group">
               <input type="text" name="lastname" placeholder="Lastname" class="form-control" value="<?=$row['lastname'] ?>">
            </div>
           
            <div class="form__input-group">
               <input type="date" name="birthdate" placeholder="Birthdate (mm/dd/yyyy)" class="form-control" value="<?=$row['birthdate'] ?>">
            </div>
           
            <div class="form__input-group">
               <input type="text" name="contact" placeholder="Contact" class="form-control" value="<?=$row['contact'] ?>">
            </div>
           
            <div class="form__input-group">
               <input type="text" name="username" placeholder="Username or Email" class="form-control" value="<?=$row['username'] ?>">
            </div>
            
            <div class="form__input-group">
                <input type="text" class="form-control" placeholder="Password" name="password" value="<?=$row['password'] ?>">
            </div>
            <div class="form__input-group">
                <input type="text" class="form-control" placeholder="Confirm password" name="conpassword" value="<?=$row['password'] ?>">
            </div>
            <div class="mb-1">
                <label class="form-label">Select User Type:</label>
            </div>
            <select class="form-select mb-3" aria-label="Default select example" name="role">
                <option selected value="user">User</option>
                <option value="admin">Admin</option>
            </select>   
            <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden>
            <button class="btn btn-dark btn-block mb-2" type="submit" name="e">Edit</button>
            <a href="admin.php"><button class="btn btn-dark btn-block" type="button">Return</button></a>
        </form>
            
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>