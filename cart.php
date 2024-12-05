<?php 
   session_start();
   include "conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <title>AuxiliTech | Computer Shop</title>
    <link rel="stylesheet" href="stylesPRODUCT.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
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
    <div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo" style="padding-top: 0;">
            <img src="Images/logo2.png" width="180" height="160" alt="Logo"/>
          </div>
          <nav>
            <div class="nav-links" id="navLinks">
              <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="Product.php">PRODUCTS</a></li>
                <li><a href="AboutUs.php">ABOUT US</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
                <?php
                $count=0;
                if(isset($_SESSION['cart']))
                  {
                    $count=count($_SESSION['cart']);
                  }
                ?>
                <li style="padding-right: 2px;"><a href="cart.php"><img src="Images/Cart1.png" width="25" height="25" alt="Cart1" />
                </li></a><span class="badge rounded-pill bg-danger text-light"><?php echo $count; ?></span>
              </ul>
            </div>
          </nav>
        </div>
        
        <div class="middle-cont">
        <h1>My Cart</h1>
        <p class="desc">Oversee the products you added to your cart.</p>
        <hr>
    </div>


    <table class="table table-striped table-light table-hover middle-cont table-bordered mb-5">
        <thead>
            <tr class="table-light">
                <th>Serial No.</th>
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Price</th>
                <th>Date Added</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_SESSION['cart']))
                {
                    foreach($_SESSION['cart'] as $key => $value)
                    {
                    $sr=$key+1;
                    echo"
                    <tr>
                     <td>$sr</td>
                     <td>$value[Product_name]</td>
                     <td>$value[Product_type]</td>
                     <td>$value[Price]</td>
                     <td>" . date("m/d/Y") . "</td>
                     <td>
                     <form action='manage-cart.php' method='POST'>
                     <button name='Remove' class='btn btn-danger' style='margin: 0; margin-left: 40px;'>Remove</button>
                     <input type='hidden' name='Product_name' value='$value[Product_name]'>
                     </form>
                     
                     </td>
                     
                     </tr>";
                    }
                }
                ?>
        </tbody>



    </table>
    </div>
    
      </div>
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
                    <p>AuxiliTech is a startup company founded on January 2024.</p>
                    <p>The online shop provides an access for numerous computer peripherals <br> that is high-quality yet sold at affordable prices.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <p>B4 L10 Alberto Subdivion Burgos, Rodriguez, Rizal
                        <br />jamaicaann.sanchez@tup.ph.edu
                        <br />+ 0949 486 4451
                        <br />+ 01 234 567 89
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center">© 2024 Copyright: AuxiliTech.com</div>
    </footer>

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
    <script src="main.js"></script>
    <script
      src="https://kit.fontawesome.com/e0a1f9fc63.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<?php }else{
	header("Location: login.php");
} ?>
