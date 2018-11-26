<!DOCTYPE html>
<html>
<head>
  <title>Cart - PhotoArt</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/shoppingCart.css">
  <!-- will add stylesheets, js and php header and footers
   (STYLE THEM AND THEN WE CAN COPY AND PASTE THEM INTO A HEADER AND FOOOTER PHP PAGES LATER ON) -->
</head>
<body>
  <?php require('../server_side/header.php'); ?>
  <div id="mainBG">
    <h2>Shopping Cart</h2>
    <img src="shoppingCartPic.jpg" alt="Cart" title="Cart"> <!-- find picture of shopping cart -->
    <div id ="cartPriceWrapper">
    <div id="cartItems" class ="shadow">
      <img src="images/Abstract/breakfast.jpg" alt="Side Pic1" title="Side Pic1">
      <img src="images/Abstract/breakfast.jpg" alt="Side Pic1" title="Side Pic1">
      <img src="images/Abstract/breakfast.jpg" alt="Side Pic1" title="Side Pic1">
      </div>
    <div id="rightDiv">
      <div id="content" class= "shadow">
        <div class="Price">
          <p>Picture of tasty food</p>
          <p>$50.00 </p>
        </div>
        <div class="Price">
          <p>Picture of tasty food</p>
          <p>$50.00 </p>
        </div>
        <div class="Price">
          <p>Picture of tasty food</p>
          <p>$50.00 </p>
        </div>
        <div id="total">
          <p id="grandTotal">Grand total</p>
          <p id="totalPrice">$150.00</p>
        </div>


    </div>
  <a href="PhotoArtcheckout.html"><button class="shadow" type="button" name="checkOut">Proceed</button></a>
      </div>
    </div>
  </div>
  <footer>
    <p>&copy; 2018 PhotoArt All Rights Reserved | Website created for COSC 360/304</p>
  </footer>
</body>
</html>