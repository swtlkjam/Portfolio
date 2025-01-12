<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Sign Up</title>
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
    <div class="container" style="width: 450px; padding-top: 0; padding-bottom: 15px; margin-top: 50px; margin-bottom: 50px;">
        <form class="form-group" id="createAccount" action="signup-check.php" method="post">
            <div class="text-center">
            <img src="Images/logo2.png" width="140" height="120">
            </div>
            <h4 class="form__title">Sign up now to enjoy our services!</h4>
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

            <?php if (isset($_GET['firstname'])) { ?>
            <div class="form__input-group">
                <input type="text" class="form-control" placeholder="Firstname" name="firstname" value="<?php echo $_GET['firstname']; ?>">
            </div>
            <?php }else{ ?>
            <div class="form__input-group">
               <input type="text" name="firstname" placeholder="Firstname" class="form-control">
            </div>
            <?php }?>

            <?php if (isset($_GET['lastname'])) { ?>
            <div class="form__input-group">
                <input type="text" class="form-control" placeholder="Lastname" name="lastname" value="<?php echo $_GET['lastname']; ?>">
            </div>
            <?php }else{ ?>
            <div class="form__input-group">
               <input type="text" name="lastname" placeholder="Lastname" class="form-control">
            </div>
            <?php }?>

            <?php if (isset($_GET['birthdate'])) { ?>
            <div class="form__input-group">
                <input type="date" class="form-control" placeholder="Birthdate (mm/dd/yyyy)" name="birthdate" value="<?php echo $_GET['birthdate']; ?>">
            </div>
            <?php }else{ ?>
            <div class="form__input-group">
               <input type="date" name="birthdate" placeholder="Birthdate (mm/dd/yyyy)" class="form-control">
            </div>
            <?php }?>

            <?php if (isset($_GET['contact'])) { ?>
            <div class="form__input-group">
                <input type="text" class="form-control" placeholder="Contact" name="contact" value="<?php echo $_GET['contact']; ?>">
            </div>
            <?php }else{ ?>
            <div class="form__input-group">
               <input type="text" name="contact" placeholder="Contact" class="form-control">
            </div>
            <?php }?>

            <?php if (isset($_GET['uname'])) { ?>
            <div class="form__input-group">
                <input type="text" class="form-control" placeholder="Username or Email" name="uname" value="<?php echo $_GET['uname']; ?>">
            </div>
            <?php }else{ ?>
            <div class="form__input-group">
               <input type="text" name="uname" placeholder="Username or Email" class="form-control">
            </div>
            <?php }?>
            
            <div class="form__input-group">
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <div class="form__input-group">
                <input type="password" class="form-control" placeholder="Confirm password" name="conpassword">
            </div>
            <button class="btn btn-dark btn-block" type="submit">Sign Up</button>
            <br>
            <p class="form__text">
                Already have an account? <a href="login.php" id="linkLogin">Sign in</a>
            </p>
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