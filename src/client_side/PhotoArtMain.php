<!DOCTYPE html>
<html>
<head>
  <title>Home - PhotoArt</title>
  <!-- will add stylesheets, js and php header and footers
   (STYLE THEM AND THEN WE CAN COPY AND PASTE THEM INTO A HEADER AND FOOOTER PHP PAGES LATER ON) -->
   <link rel="stylesheet" type="text/css" href="css/reset.css"/>
   <link rel="stylesheet" type="text/css" href="css/general.css"/>
   <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
  <?php require('../server_side/header.php'); ?>
  <div class="search-container">
    <form action="something.php"> <!-- this can be added later, also the following pages may be useful
      https://www.w3schools.com/howto/howto_css_searchbar.asp
      https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_searchbar3 -->
    <input type="text" name="searchBar" placeholder="Search.." class="shadow"/>
    <button type="submit"><!-- image of magnifying glass similar to the link above!--></button>
    </form>
  </div>
  <div class ="columnWrapper"> <!-- this will be the background of the 3 columns -->
    <div class="column shadow" id="left">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod cursus dapibus. Morbi massa nunc,lacinia a iaculis non, sollicitudin quis ipsum. Morbi euismod sapien aliquet neque auctor luctus. Cras venenatis orci et turpis tristique sollicitudin quis sit amet arcu. Mauris eu elit quis leo aliquam tristique et at elit. Duis non mi commodo, tincidunt tellus id, consectetur est. In non vehicula diam, a posuere urna. Curabitur bibendum magna vitae tortor imperdiet, sed sodales augue gravida. Morbi ac nisl sit amet odio malesuada tincidunt.
      </p>
    </div>
    <div class="column shadow" id="middle">
      <h2>Photo of the Week</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod cursus dapibus.
        <span> <!-- image of the week goes here? --> </span>
        Morbi massa nunc, lacinia a iaculis non, sollicitudin quis ipsum. Morbi euismod sapien aliquet neque auctor luctus. Cras venenatis orci et turpis tristique sollicitudin quis sit amet arcu. Mauris eu elit quis leo aliquam tristique et at elit. Duis non mi commodo, tincidunt tellus id, consectetur est. In non vehicula diam, a posuere urna. Curabitur bibendum magna vitae tortor imperdiet, sed sodales augue gravida. Morbi ac nisl sit amet odio malesuada tincidunt.
      </p>
    </div>
    <div class="column shadow" id = "right">
      <h2>Join Our Team</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod cursus dapibus. Morbi massa nunc, lacinia a iaculis non, sollicitudin quis ipsum. Morbi euismod sapien aliquet neque auctor luctus. Cras venenatis orci et turpis tristique sollicitudin quis sit amet arcu. Mauris eu elit quis leo aliquam tristique et at elit. Duis non mi commodo, tincidunt tellus id, consectetur est. In non vehicula diam, a posuere urna. Curabitur bibendum magna vitae tortor imperdiet, sed sodales augue gravida. Morbi ac nisl sit amet odio malesuada tincidunt.
      </p>
    </div>
  </div>
    <footer>
      <p>&copy; 2018 PhotoArt All Rights Reserved | Website created for COSC 360/304</p>
    </footer>
</body>
</html>