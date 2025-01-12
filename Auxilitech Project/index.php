<?php 
   session_start();
   include "conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>   
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>AuxiliTech | Computer Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">  


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
    <section class="header">
        <nav>
            
            <div class="nav-links" id="navLinks">

               <i class="fa fa-times" onClick="hideMenu()"></i>
                <ul>
                    <img src="Images/logo1.png" width="180" height="160" alt="Logo">
                    <li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li>
                    <li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li>
                    <li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li><li><a href=""></a></li>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="Product.php">PRODUCTS</a></li>
                    <li><a href="AboutUs.php">ABOUT US</a></li>
                    <li><a href="logout.php">LOG OUT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onClick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>WELCOME TO AUXILITECH</h1>
            <p>Revolutionizing Your Digital Experience</p>  
        </div>    
    </section>
    
<!--PARTS-->
    
<section class="AUXILITECH">
    <h1>AUXILITECH</h1>
    <p>Step into the Future with Auxilitech: Your One-Stop Haven for Cutting-Edge Computer Peripherals
    – Unleash Power, Precision, and Performance!</p>
    
    <div class="row">
        <div class="AUXILITECH-col">
            <h4>Recommendations</h4>
            <p></p>
        </div>
         <div class="AUXILITECH-col">
            <h4>Services We Offer</h4>
            <p></p>
        </div>
         <div class="AUXILITECH-col">
            <h4>Customizations</h4>
            <p></p>
        </div>    
    </div>
</section>
    
<!--AUXILITECH-->
    
<section class="None">
    <h1>How can we help you?</h1>
    <p></p>
        
    <div class="row">
        <div class="None-col">
            <p><img src="Images/products.jpg" width="300" height="600" alt="Computer2"></p>
            <div class="layer">
                <a href="./Product.php"><h3>PRODUCTS</h3></a>
            </div>
        </div>
         <div class="None-col" >
            <p><img src="Images/aboutus.jpg" width="300" height="600" alt="Computer3"></p>
            <div class="layer">
                <a href="./AboutUs.php"><h3>ABOUT US</h3></a>
            </div>
        </div>
         <div class="None-col">
            <p><img src="Images/contactus.jpg" width="300" height="600" alt="Computer4"></p>
            <div class="layer">
                <a href="./contactUs.php"><h3>CONTACT US</h3></a>
            </div>
        </div>
    </div>
</section>    
    
<!--TESTIMONIALS-->

<section class="testimonials">
    <h1>What Our Costumers Says</h1>
    <p>Revolutionizing Your Digital Experience</p>
    
    <div class="row">
        <div class="testimonial-col">
            <img src="Images/Costumer1.jpg" alt="Costumer1">
            <div>
            <p> The products here is so good and legit, the delivery was fast also. I recommend this shop.</p>
            <h4>Christina Rodriguez</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="testimonial-col">
            <img src="Images/Costumer3.jpg" alt="Costumer3">
            <div>
                <p>Nice products and the website is easy to use. The delivery and the staff of this website is good also so I'll give it a 5 star.</p>
                <h4>Ryan Reyez</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
        </div>
    </div>
     
</section>

<!--NEED HELP-->
    
<section class="NeedHelp">
    <h1>Need Help? Contact Us</h1>
    <a href="./contactUs.php" class="btn btn-outline-danger">CONTACT US</a>
</section>
    
<!--FOOTER -->
    
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
    
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
    
</script>
<script src="https://kit.fontawesome.com/e0a1f9fc63.js" crossorigin="anonymous"></script>
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
</body>    
</html>
<?php }else{
	header("Location: login.php");
} ?>