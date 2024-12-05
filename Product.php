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
        <div class="row" style="margin-top: 50px;">
          <div class="col-4">
            <h1>FOR ALL YOUR DIGITAL NEEDS</h1>
            <p>AuxiliTech Computer Peripherals</p>
            <div id="explore" onclick="scrolldiv()">
              <a href="#categories1" class="btn btn-dark">Explore Now &#8594;</a>
            </div>
          </div>
          <div class="col-8">
            <img
              src="Images/Comp9.png"
              width="700"
              height="394"
              alt="Computer9"
            />
          </div>
        </div>
      </div>
    </div>
    <section class="categories" id="categories1">
      <p class="categoriesh1"><a id="ProductsTop"><h1>PRODUCTS</h1></a></p>
      <p class="categoriesp">
        Welcome to our Products Page. Feel free to choose the category you prefer.
      </p>
      <br />
      <div class="row">
        <div class="categories-col">
          <img src="Images/mouse.jpg" alt="Mouse2" />
          <div class="layer" id="toggleButtonMouse" onclick="scrolldiv()">
            <a href="#mouse"><h3>MOUSE</h3></a>
          </div>
        </div>
        <div class="categories-col">
          <img src="Images/keyboard2.jpg" alt="Keyboard2" />
          <div class="layer" id="toggleButtonKeyboard" onclick="scrolldiv()">
            <a href="#keyboard"><h3>KEYBOARDS</h3></a>
          </div>
        </div>
        <div class="categories-col">
          <img src="Images/monitors.jpg" alt="Monitors2" />
          <div class="layer" id="toggleButtonMonitor" onclick="scrolldiv()">
            <a href="#monitor"><h3>MONITORS</h3></a>
          </div>
        </div>
      </div>
    </section>
    <!-- MOUSE PROD -->
    <div class="containertwo">
      <div id="mouse" style="display: none">
        <div class="text">
          <h3>AUXILITECH MICE</h3>
          <br />
        
          <p id="mouseInfo" class="ex">
            Welcome to our Mouse Products! Here in AuxiliTech, you will discover
            a variety of Mice such as Wired, Wireless, and Ergonomic ones, and
            also different kinds of DPI as well such as 800 dpi, 12,000 dpi, and
            24,000 dpi. Feel free to canvas your desired gaming mouse and share
            with us your experience with it as well!
          </p>
          <br />
        </div>
        <h3>Wired Mouse</h3>
        <br />
        <div class="card-deck">
          <div class="card">
            <form action="manage-cart.php" method="POST">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/cooler.jpg"
                alt="cooler"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">Wired mouse</span>
              <h4><a href="">Cooler Master MM830 Gaming Mouse</a></h4>
              <p>
                24,000 DPI Optical Sensor - Customizable 4-zone LED Lighting - 8
                Programmable Buttons - Palm/Claw Grip Type - Adjustable Cursor
                Speed - Wired - Gunmetal Black
              </p>
              <div class="product-bottom-details">
                <div class="product-price"><small>₱4,969</small>₱4,730</div>
                <div class="product-links">
                   <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Cooler Master MM830 Gaming Mouse">
                  <input type="hidden" name="Product_type" value="Wired Mouse">
                  <input type="hidden" name="Price" value="₱4,730.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img class="card-img-top a" src="./Images/rog.jpg" alt="rog" />
            </div>
            <div class="product-details">
              <span class="product-catagory">wired mouse</span>
              <h4><a href="">ROG Gladius II Optical Gaming Mouse</a></h4>
              <p>
                12,000 DPI Optical Sensor - Customizable Aura Sync RGB Lighting
                - 7 Programmable Buttons - For All Grip Type - Customizable
                Scroll Resistance - Wired/Ergonomic - Classic Black
              </p>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱5189</small>₱4,885
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="ROG Gladius II Optical Gaming Mouse">
                  <input type="hidden" name="Product_type" value="Wired Mouse">
                  <input type="hidden" name="Price" value="₱4,885.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/logitechb100.jfif"
                alt="logitechb100"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">wired mouse</span>
              <h4><a href="">LOGITECH B100 Optical Mouse</a></h4>
              <div class="descwm3">
              <p>
                800 DPI Optical Sensor - 3 Buttons - Zero Set-up - Wired -
                Classic Black
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price"><small>₱369</small>₱270</div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="LOGITECH B100 Optical Mouse">
                  <input type="hidden" name="Product_type" value="Wired Mouse">
                  <input type="hidden" name="Price" value="₱270.00">
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h3>Wireless Mouse</h3>
        <br />
        <div class="card-deck">
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/redragon.jpg"
                alt="reddragon"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">wireless mouse</span>
              <h4><a href="">Redragon M652 Optical Mouse</a></h4>
              <div class="descwm1">
              <p>
                24,000 DPI Optical Sensor - Wide Compatibility - 6 Buttons -
                Adjustable Cursor Speed - Wireless (USB) - Classic Black
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price"><small>₱1109</small>₱884</div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Redragon M652 Optical Mouse">
                  <input type="hidden" name="Product_type" value="Wireless Mouse">
                  <input type="hidden" name="Price" value="₱884.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/logitech.jpg"
                alt="logitech"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">wireless mouse</span>
              <h4>
                <a href="">Logitech G304 Lightspeed Wireless Gaming Mouse</a>
              </h4>
              <p>
                12,000 DPI Optical Sensor - 6 Programmable Buttons - Mechanical
                Switches - 1ms Report Rate - Wireless (USB) - White
              </p>
              <div class="product-bottom-details">
                <div class="product-price"><small>₱2269</small>₱2,050</div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Logitech G304 Lightspeed Wireless Gaming Mouse">
                  <input type="hidden" name="Product_type" value="Wireless Mouse">
                  <input type="hidden" name="Price" value="₱2,050.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img class="card-img-top a" src="./Images/hama.jpg" alt="hama" />
            </div>
            <div class="product-details">
              <span class="product-catagory">wireless mouse</span>
              <h4><a href="">Hama MW-800 V2 Mouse</a></h4>
              <div class="descwm">
              <p>
                800 DPI Optical Sensor - 4-way Scroll Wheel - 7 Buttons - Silent
                Clicking - Wireless (USB) - Gray
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price"><small>₱789</small>₱499</div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Hama MW-800 V2 Mouse">
                  <input type="hidden" name="Product_type" value="Wireless Mouse">
                  <input type="hidden" name="Price" value="₱499.00">
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h3>Ergonomic Mouse</h3>
        <br />
        <div class="card-deck">
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/razer.jpeg"
                alt="razer"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">ergonomic mouse</span>
              <h4><a href="">Razer Basilisk Gaming Mouse</a></h4>
              <div class="descem">
              <p>
                16,000 DPI Optical Sensor - Chroma RGB Lighting - 8 Programmable
                Buttons - Mechanical Switches - Customizable Scroll Resistance -
                Wired/Ergonomic - Classic Black
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price"><small>₱3,559</small>₱3,350</div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Razer Basilisk Gaming Mouse">
                  <input type="hidden" name="Product_type" value="Ergonomic Mouse">
                  <input type="hidden" name="Price" value="₱3,350.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/pictek.jpg"
                alt="pictek"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">ergonomic mouse</span>
              <h4><a href="">PICTEK PC257 Gaming Mouse</a></h4>
              <p>
                12,000 DPI Optical Sensor - Customizable Chroma RGB Backlight -
                10 Programmable Buttons - Mechanical Switches - Fire and Sniper
                Button - Wired/Ergonomic - Classic Black
              </p>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱1,440</small>₱1,239
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="PICTEK PC257 Gaming Mouse">
                  <input type="hidden" name="Product_type" value="Ergonomic Mouse">
                  <input type="hidden" name="Price" value="₱1,239.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/mw500.jpg"
                alt="mw500"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">ergonomic mouse</span>
              <h4><a href="">MW500-1E Vertical Optical Mouse</a></h4>
              <div class="descem1">
              <p>
                800 DPI Optical Sensor - Concave Thumb Rest - 6 Buttons -
                Adjustable Cursor Speed - Wireless (USB) - Classic Black
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price"><small>₱899</small>₱599</div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="MW500-1E Vertical Optical Mouse">
                  <input type="hidden" name="Product_type" value="Ergonomic Mouse">
                  <input type="hidden" name="Price" value="₱599.00">
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="categories">
          <a href="#ProductsTop"
            ><i class="fa-solid fa-arrow-up"></i><br />Back to Top</a
          >
        </div>
      </div>

      <!-- KEYBOARDS PROD -->
      <div id="keyboard" style="display: none">
        <div class="text">
          <h3>AUXILITECH KEYBOARDS</h3>
          <br />
          <p id="keybInfo" class="ex">
            Welcome to our Keyboard Products! Here in AuxiliTech, you will
            discover a variety of Keyboards such as Wired, Wireless, and
            Mechanical ones, and also different kinds of Sizes as well such as
            100%, 70%, and 60%. Feel free to canvas your desired gaming
            keyboards and share with us your experience with it as well!
          </p>
          <br />
        </div>
        <h3>Wired Keyboards</h3>
        <br />
        <div class="card-deck">
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/wired1.png"
                alt="wired1"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">Keyboard 100%</span>
              <h4><a href="">Logitech G213 PRODIGY</a></h4>
              <div class="descwk">
              <p>
                Connection Type: USB 2.0 - USB Protocol: USB 2.0 - Backlighting:
                RGB (5 Zone)
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱3,500</small>₱2,519
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Logitech G213 PRODIGY">
                  <input type="hidden" name="Product_type" value="Wired Keyboard">
                  <input type="hidden" name="Price" value="₱2,519.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/wired2.jpg"
                alt="wired2"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">Keyboard 70%</span>
              <h4><a href="">Glorious GMMK Pro</a></h4>
              <div class="descwk">
              <p>
                Pre-lubed Glorious Fox - Linear Switches - Black White GPBT
                Keycaps - Black Coiled Cable
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱25,000</small>₱20,615
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Glorious GMMK Pro">
                  <input type="hidden" name="Product_type" value="Wired Keyboard">
                  <input type="hidden" name="Price" value="₱20,615.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/wired3.PNG"
                alt="wired3"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">Keyboard 60%</span>
              <h4><a href="">Corsair K65 RGB Mini Gaming Keyboard</a></h4>  
              <p>
                CHERRY MX SPEED mechanical keyswitches, and - exceptional
                customizability in a compact design.
              </p>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱7,499</small>₱6,476
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Corsair K65 RGB Mini Gaming Keyboard">
                  <input type="hidden" name="Product_type" value="Wired Keyboard">
                  <input type="hidden" name="Price" value="₱6,476.00">
                </div>
              </div>
            </div>
          </div>
        </div>
        <h3>Wireless Keyboards</h3>
        <br />
        <div class="card-deck">
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/wireless1.jpg"
                alt="wireless1"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">Keyboard 100%</span>
              <h4><a href="">Razer BlackWidow V3 Pro</a></h4>
              <p>
                Razer™ Green Mechanical Switch - 2.4 Ghz Wireless -
                Bluetooth - Razer™ HyperSpeed Wireless Technology
              </p>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small> ₱15,599</small> ₱13,543
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Razer BlackWidow V3 Pro">
                  <input type="hidden" name="Product_type" value="Wireless Keyboard">
                  <input type="hidden" name="Price" value="₱13,543.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/wireless2.PNG"
                alt="wireless2"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">Keyboard 70%</span>
              <h4><a href="">Redragon Zed Pro K627P</a></h4>
              <div class="descmk">
              <p>
                RGB backlighting - Built-in battery - Type C to USB charging
                cable
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱2,995</small>₱2,195
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Redragon Zed Pro K627P">
                  <input type="hidden" name="Product_type" value="Wireless Keyboard">
                  <input type="hidden" name="Price" value="₱2,195.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/wireless3.PNG"
                alt="wireless3"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">Keyboard 60%</span>
              <h4><a href="">Corsair K70 PRO Mini Wireless RGB</a></h4>
              <p>
                Equipped with hyper-fast - sub-1ms SLIPSTREAM WIRELESS and
                swappable CHERRY MX keyswitches in a portable profile
              </p>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱12,599</small>₱10,599
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Corsair K70 PRO Mini Wireless RGB">
                  <input type="hidden" name="Product_type" value="Wireless Keyboard">
                  <input type="hidden" name="Price" value="₱10,599.00">
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h3>Mechanical Keyboards</h3>
        <br />
        <div class="card-deck">
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/mech1.PNG"
                alt="mech1"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">Keyboard 100%</span>
              <h4>
                <a href="">Logitech G413 Se Mechanical Gaming Keyboard</a>
              </h4>
              <p>
                PBT Keycaps - Aluminum top case - White backlighting -
                Connection Type: USB 2.0
              </p>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱5,710</small>₱4,710
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Logitech G413 Se Mechanical Gaming Keyboard">
                  <input type="hidden" name="Product_type" value="Mechanical Keyboard">
                  <input type="hidden" name="Price" value="₱4,710.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/mech2.PNG"
                alt="mech2"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">Keyboard 70%</span>
              <h4><a href="">Royal Kludge RK84</a></h4>
              <div class="descmk">
              <p>
                3750mAh Big Mac - 2x USB 2.0 passthrough - Diverse RGB Backlit -
                Hot-swappable Switch
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small> ₱4,999</small> ₱4,750
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Royal Kludge RK84">
                  <input type="hidden" name="Product_type" value="Mechanical Keyboard">
                  <input type="hidden" name="Price" value="₱4,750.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/mech3.PNG"
                alt="mech3"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">Keyboard 60%</span>
              <h4><a href="">Razer Huntsman Mini Analog</a></h4>
              <p>
                Razer™ Analog Optical Switch - Wired - Detachable USB-C
                braided fiber cable - 1000 Hz Ultrapolling
              </p>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱9,499</small>₱8,832
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Razer Huntsman Mini Analog">
                  <input type="hidden" name="Product_type" value="Mechanical Keyboard">
                  <input type="hidden" name="Price" value="₱8,832.00">
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="categories">
          <a href="#ProductsTop"
            ><i class="fa-solid fa-arrow-up"></i><br />Back to Top</a
          >
        </div>
      </div>

      <!-- MONITORS PROD -->
      <div id="monitor" style="display: none">
        <div class="text">
          <h3>AUXILITECH MONITORS</h3>
          <br />
          <p id="monitInfo" class="ex">
            Welcome to our Monitor Products! Here in AuxiliTech, you will
            discover a variety of Panels such as IPS, TN, and OLED ones, and
            also different kinds of Refresh Rates as well such as 60 Hz, 75 Hz,
            144 Hz, and 240 Hz. Feel free to canvas your desired gaming monitor
            screens and share with us your experience with it as well!
          </p>
          <br />
        </div>
        <h3>IPS Panel</h3>
        <br />
        <div class="card-deck">
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/IPSmon60.png"
                alt="IPSmon60"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">IPS Monitor 60Hz</span>
              <h4><a href="">ViewSonic VP2771</a></h4>
              <div class="descps1">
              <p>
                VP2771 supports laptops, PCs, and Apple/Mac operating systems
                with USB 3. 1 Type C, HDMI 1. 4, DisplayPort (Daisy chain
                enabled), and Mini DisplayPort inputs
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱18,542</small>₱7,659
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="ViewSonic VP2771">
                  <input type="hidden" name="Product_type" value="IPS Panel Monitor">
                  <input type="hidden" name="Price" value="₱7,659.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/IPSmon75.png"
                alt="IPSmon75"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">IPS Monitor 75Hz</span>
              <h4><a href="">Bezel-less FHD</a></h4>
              <div class="descps">
              <p>
                Screen Size (Class) 24" Flat - Active Display Size (HxV) (mm)-
                527.04mm x 296.46mm - Aspect Ratio - 16:9 - Panel Type - IPS -
                Resolution (1,920 x 1,080) - Viewing Angle (H/V) 178°/178°
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱19,999</small>₱8,999
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Bezel-less FHD">
                  <input type="hidden" name="Product_type" value="IPS Panel Monitor">
                  <input type="hidden" name="Price" value="₱8,999.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/IPSmon144.png"
                alt="IPSmon144"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">IPS Monitor 144Hz</span>
              <h4><a href="">MSI OPTIX G271</a></h4>
              <div class="descps">
              <p>
                Refresh Rate (144 Hz) - Response Time (1 ms) - Display Size
                (27") - Resolution (1920 x 1080) - Mounting Type (Wall Mount) -
                2x HDMI (1.4b) 1x Display Port (1.2a) 1x Earphone Out
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱23,499</small>₱13,999
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="MSI OPTIX G271">
                  <input type="hidden" name="Product_type" value="IPS Panel Monitor">
                  <input type="hidden" name="Price" value="₱13,999.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/IPSmon240.png"
                alt="IPSmon240"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">IPS Monitor 240Hz</span>
              <h4><a href="">ViewSonic XG2431</a></h4>
              <p>
                XG2431 (24” IPS Gaming Monitor) - Blur Busters 2.0 Certified -
                Refresh Rate (240Hz) - Fast-IPS Display with VESA DisplayHDR 400
                - 0.5ms (MPRT) Response Time - AMD FreeSync™ Premium - Full HD
                Resolution
              </p>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱27,499</small>₱19,599
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="ViewSonic XG2431">
                  <input type="hidden" name="Product_type" value="IPS Panel Monitor">
                  <input type="hidden" name="Price" value="₱19,599.00">
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h3>TN Panel</h3>
        <br />
        <div class="card-deck">
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/TNmon60.png"
                alt="TNmon60"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">TN Monitor 60Hz</span>
              <h4><a href="">Acer VA240H</a></h4>
              <div class="desctn">
              <p>
                Its 24" FHD TN Film LED backlight display and 16:9 aspect ratio
                gives an ideal gaming platform with 1920x1080 FHD resolution.
                The 16.7 million colors along with 100,000,000:1 dynamic
                contrast ratio ensure to deliver true to life color shade on the
                screen.
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱6,999</small>₱4,999
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Acer VA240H">
                  <input type="hidden" name="Product_type" value="TN Panel Monitor">
                  <input type="hidden" name="Price" value="₱4,999.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/TNmon75.png"
                alt="TNmon75"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">TN Monitor 75Hz</span>
              <h4><a href="">AOC G2590VXQ</a></h4>
              <div class="desctn1">
              <p>
                75 Hz refresh rate, 1 ms response time and FreeSync support
                ensure smooth responsiveness. Improve your gameplay with 24.5"
                fast TN panel in Full HD resolution.
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱8,999</small>₱6,999
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="AOC G2590VXQ">
                  <input type="hidden" name="Product_type" value="TN Panel Monitor">
                  <input type="hidden" name="Price" value="₱6,999.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/TNmon144.png"
                alt="TNmon144"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">TN Monitor 144Hz</span>
              <h4><a href="">Lenovo G25-10</a></h4>
              <div class="desctn">
              <p>
                With a high frame rate and vibrant colors, the 24.5-inch Full-HD
                monitor is perfect for E-Sports enthusiasts. A faster refresh
                rate of 144 Hz and a quick response time of 1ms will allow you
                to enjoy seamless gameplay.
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱10,999</small>₱8,999
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="Lenovo G25-10">
                  <input type="hidden" name="Product_type" value="TN Panel Monitor">
                  <input type="hidden" name="Price" value="₱8,999.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/TNmon240.png"
                alt="TNmon240"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">TN Monitor 240Hz</span>
              <h4><a href="">AOC Agon AG251FZ2</a></h4>
              <div class="desctn">
              <p>
                Incredibly fast 240Hz refresh rate and rapid 0.5ms response time
                with AMD Free Sync for the smoothest competitive game play.
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱19,999</small>₱15,999
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="AOC Agon AG251FZ2">
                  <input type="hidden" name="Product_type" value="TN Panel Monitor">
                  <input type="hidden" name="Price" value="₱15,999.00">
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h3>OLED Panel</h3>
        <br />
        <div class="card-deck">
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/OLEDmon60.png"
                alt="OLEDmon60"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">OLED Monitor 60Hz</span>
              <h4><a href="">ASUS ProArt PQ22UC</a></h4>
              <div class="desc">
              <p>
                World’s first 21.6-inch Pure RGB Stripe OLED panel delivers
                beautifully saturated, accurate color reproduction with 99%
                DCI-P3 color gamut.
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱69,999</small>₱56,999
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="ASUS ProArt PQ22UC">
                  <input type="hidden" name="Product_type" value="OLED Panel Monitor">
                  <input type="hidden" name="Price" value="₱56,999.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/OLEDmon75.png"
                alt="OLEDmon75"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">OLED Monitor 75Hz</span>
              <h4><a href="">LG UltraFine 27EP950</a></h4>
              <p>
                Featuring a thin-bezel 3840 x 2160 resolution OLED screen, this
                monitor is factory calibrated to support 99% of the DCI-P3 and
                Adobe RGB color spectrums with high-dynamic range, delivering
                lifelike photos and videos with bright highlights and deep
                shadows.
              </p>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱89,999</small>₱74,999
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="LG UltraFine 27EP950">
                  <input type="hidden" name="Product_type" value="OLED Panel Monitor">
                  <input type="hidden" name="Price" value="₱74,999.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/OLEDmon144.png"
                alt="OLEDmon144"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">OLED Monitor 144 Hz</span>
              <h4><a href="">LG OLED48C1XTZ</a></h4>
              <div class="desc">
              <p>
                Screen size - (48"in") - Resolution (3840x2160p) - RF antena
                (Yes) - LAN port (Yes) - USB in (Yes) - HDMI 2.1 (Yes) - Optical
                Digital Audio out (Yes) - Power Requirement AC (100-240V)
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱96,499</small>₱89,499
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="LG OLED48C1XTZ">
                  <input type="hidden" name="Product_type" value="OLED Panel Monitor">
                  <input type="hidden" name="Price" value="₱89,499.00">
                </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="product-tumb">
              <img
                class="card-img-top a"
                src="./Images/OLEDmon(2)240.png"
                alt="OLEDmon240"
              />
            </div>
            <div class="product-details">
              <span class="product-catagory">OLED Monitor 240 Hz</span>
              <h4><a href="">LG 55LA9700</a></h4>
              <div class="desc">
              <p>
                Screen Size Class (diagonal) 55" Class (54.5" diagonal) -
                Resolution (3840x2160) - Local Dimming (Yes) - Ultra HD (Yes) -
                BLU Type (Backlight) NANO Full LED - Refresh Rate TruMotion
                (240hz) - MCI (1200)
              </p>
                </div>
              <div class="product-bottom-details">
                <div class="product-price">
                  <small>₱169,000</small>₱139,000
                </div>
                <div class="product-links">
                  <form action="manage-cart.php" method="POST">
                  <button type="#" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                  <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 
                                  47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 
                                  55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                </button>
                  <button type="submit" class="btn btn-outline-warning px-2.5 rounded-pill py-1 mt-3" name="Add_To_Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 576 512">
                                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 
                                50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 
                                0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 
                                48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                                </button>
                  <input type="hidden" name="Product_name" value="LG 55LA9700">
                  <input type="hidden" name="Product_type" value="OLED Panel Monitor">
                  <input type="hidden" name="Price" value="₱139,000.00">
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="categories">
          <a href="#ProductsTop"
            ><i class="fa-solid fa-arrow-up"></i><br />Back to Top</a
          >
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
