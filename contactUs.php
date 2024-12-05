<?php 
   session_start();
   include "conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0" />
    <title>AuxiliTech | Computer Shop</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
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
  <style>
footer{
    padding: 50px;
    background-color: black;
    color: white;
}

footer p{
    color: white;
}
</style>
  <body>
    <section class="sub-header">
      <nav>
        <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onClick="hideMenu()"></i>
          <ul>
            <img src="Images/logo1.png" width="180" height="160" alt="Logo"/>
            <li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li>
            <li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li>
            <li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li>
            <li><a href="index.php">HOME</a></li>
            <li><a href="Product.php">PRODUCTS</a></li>
            <li><a href="AboutUs.php">ABOUT US</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
          </ul>
        </div>
        <i class="fa fa-bars" onClick="showMenu()"></i>
      </nav>
      <h1>CONTACT US</h1>
    </section>

    <!--CONTACT US-->
  
    <section id="contact" class="container my-5 py-5">
            <div class="container text-center mt-5">
              <hr class="mx-auto">
              <p class="w-50 mx-auto">
                Phone Number: <span>0949 486 4451</span>
              </p>
              <p class="w-50 mx-auto">
                Email Address: <span>jamaicaann.sanchez@tup.ph.edu</span>
              </p>
              <p class="w-50 mx-auto">
                We would love to answer your questions 24/7.
              </p>
              <p class="w-50 mx-auto">
                    <a href="https://www.facebook.com/swtlkjam"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/jamaicasannchez/?fbclid=IwAR3BssO-6Rf72njEPGt2R6Ga36CEABEzvMrEeGBIwKs7nFCCPTdiAjQs16c"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/jamaicasannchez?fbclid=IwAR1ULj8hk2iR0IsishUpYRpLImeCDBJnxOovbhjQY0cYnERLr8QLWnv79Ks"><i class="fab fa-twitter"></i></a>
              </p>
              
            </div>
          </section>


    <!--FOOTER-->

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

    <!--JAVASCRIPT FOR TOGGLE MENU-->
    <script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
        navLinks.style.right = "0";
      }
      function hideMenu() {
        navLinks.style.right = "-200px";
      }
    </script>
    <script
      src="https://kit.fontawesome.com/e0a1f9fc63.js"
      crossorigin="anonymous"
    ></script>
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
<?php }else{
	header("Location: login.php");
} ?>