<?php
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Add Products</title>
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
    <div class="container" style="width: 450px; padding-top: 35px; padding-bottom: 15px; margin-top: 50px; margin-bottom: 50px;">
        <form class="form-group" id="createAccount" action="" method="post" enctype="multipart/form-data">
            <h4 class="form__title">Add Product</h4>

            <div class="form__input-group">
               <input type="text" name="prodname" placeholder="Product Name" class="form-control">
            </div>
        
            <div class="mb-1">
                <label class="form-label">Select Product Type:</label>
            </div>
            <select class="form-select mb-3" aria-label="Default select example" name="prodtype">
                <option selected value="Mouse">Mouse</option>
                <option value="Keyboard">Keyboard</option>
                <option value="Monitor">Monitor</option>
            </select>   
           
            <div class="form__input-group">
               <input type="text" name="price" placeholder="Product Price" class="form-control">
            </div>
           
            <div class="form-group"> 
              <label class="form-label" for="image">Upload Image:</label>
              <input type="file" class="form-control" name="f1"> 
            </div> 
            <button class="btn btn-dark btn-block mb-2" type="submit" name="add">Insert</button>
            <a href="prod-maintenance.php"><button class="btn btn-dark btn-block" type="button">Return</button></a>
        </form>
    </div>
    <?php
    if(isset($_POST["add"]))
    {
        $tm=md5(time()); 
        $fnm=$_FILES["f1"]["name"]; 
        $dst="./Images/".$tm.$fnm; 
        $dst1="Images/".$tm.$fnm; 
        move_uploaded_file($_FILES["f1"]["tmp_name"],$dst); 

        mysqli_query($conn, "insert into products values(NULL, '$_POST[prodname]', '$_POST[prodtype]', '$_POST[price]', '$dst1')");
        header("Location: prod-maintenance.php");
        ?>
        <?php
    }
    ?>
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