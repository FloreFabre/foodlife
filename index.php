<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <title>FoodLife</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/recetteAccueil.css" />
  <link rel="stylesheet" href="./css/recetteAccueil2.css" />
  <link rel="stylesheet" href="./css/settings.css" />
  <script src="https://kit.fontawesome.com/59ecaaffaa.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <header>
    <!-- NAV BAR -->
    <nav class="navbar">
      <!-- LOGO -->
      <div class="logo"><img src="./img/Foodieland.png" alt="" width="110px"></div>
      <!-- NAVIGATION MENU -->
      <ul class="nav-links">
        <!-- USING CHECKBOX HACK -->
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        <!-- NAVIGATION MENUS -->
        <div class="menu">
          <li><a href="/">Home</a></li>
          <li><a href="/">Blog</a></li>
          <li class="services">
            <a href="/">Recipes</a>
            <!-- DROPDOWN MENU -->
            <ul class="dropdown">
              <li><a href="/">Dropdown 1</a></li>
              <li><a href="/">Dropdown 2</a></li>
              <li><a href="/">Dropdown 2</a></li>
              <li><a href="/">Dropdown 3</a></li>
              <li><a href="/">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="/">Contact</a></li>
          <li><a href="/">About us</a></li>

          <?PHP if (isset($_SESSION['id'])) {

           
            echo "<li><a href='./login/logout.php'>logout</a></li>";
            echo "<li><a href='./crud/CrudRecette/crudRecette.php'>Crud</a></li>";
          } else {
            echo "<li><a href='./login/login.php'>login</a></li>";
          }
          ?>
          <!-- <li><a href="./login/login.php">login</a></li> -->
        </div>
      </ul>
      <div class="headerlogo">
        <div class="lg2"><a href="https://fr-fr.facebook.com/"><i class="fa-brands fa-facebook-f fa-2x"></i></div></a>
        <div class="lg2"><a href="https://twitter.com/?lang=fr"><i class="fa-brands fa-twitter fa-2x"></i></div></a>
        <div class="lg2"><a href="https://www.instagram.com/?hl=fr"><i class="fa-brands fa-instagram fa-2x"></i></div></a>
      </div>
    </nav>
    <hr class="un">

  </header>

  <div class="grid">
    <?php include_once './requettesPHP/recetteHOT.php'; ?>

  </div>
  <img class="imgDapproved" src="./img/Badge.png" alt="">
  </div>

  <!-- CATEGORIES -->
  <div class="categories">

    <div class="categorieTexte">
      <span>Categories</span>
      <div class="viewAllCat">
        <span class="viewAllCatTexte">View All Categories</span>
      </div>
    </div>


    <div class="breakfast">
      <img class="imgbreakfast" src="./img/criz.png" alt="">
      <span class="breakfastTexte">Breakfast</span>
    </div>


    <div class="vegan">
      <img class="imgvegan" src="./img/cvegan.png" alt="">
      <span class="veganTexte">Vegan</span>
    </div>

    <div class="meat">
      <img class="imgmeat" src="./img/cviande.png" alt="">
      <span class="meatTexte">Meat</span>
    </div>

    <div class="dessert">
      <img class="imgdessert" src="./img/cdessert.png" alt="">
      <span class="dessertTexte">Dessert</span>
    </div>

    <div class="lunch">
      <img class="imglunch" src="./img/clunch.png" alt="">
      <span class="lunchTexte">Lunch</span>
    </div>

    <div class="chocolate">
      <img class="imgchocolate" src="./img/cchoco.png" alt="">
      <span class="chocolateTexte">Chocolate</span>
    </div>

    <!-- RECETTES -->
  </div>



  <span class="simplyrecipes">Simple and tasty recipes</span>
  <span class="simplyTexte">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim </span>
  <div class="griid">
    <?php include_once './requettesPHP/recette.php'; ?>

  </div>


  <div class="chef">

    <span class="titrechef">Everyone can be a
      chef in their own kitchen</span>

    <span class="textechef">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim </span>
    <div class="bouttonchef">
      <span class="bouttoncheftexte">Learn More</span>

    </div>

    <div class="chefdroite">
      <img class="imgchef" src="./img/portrait-happy-chef.png" alt="">

      <img class="imgchefT" src="./img/tomate.png" alt="">
      <img class="imgchefV" src="./img/cviande.png" alt="">
      <img class="imgchefO" src="./img/oignion.png" alt="">
      <img class="imgchefL" src="./img/cvegan.png" alt="">


    </div>

  </div>

  <!-- Section Recette délicieuse -->



  <div class="deliciousRecipe">


    <span class="deliciousRecipeTitre">Try this delicious recipe
      to make your day</span>

    <span class="deliciousRecipeTexte">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim </span>

  </div>


  <div class="griiid">

    <?php include './requettesPHP/recetteD.php' ?>

  </div>

  <div class="subscribe">

    <span class="subscribetitre">Deliciousness to your inbox</span>

    <span class="subscribetexte">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim </span>

    <img class="imgemail1" src="./img/Photo-plate.png" alt="">
    <img class="imgemail2" src="./img/kisspng-salad.png" alt="">
    <img class="imgemail3" src="./img/rucola-png.png" alt="">
    <div class="input-comment"> <input type="text" name="texte" id="id" placeholder="Your email address…">
      <div class="boutonsubscribe">
        <span class="boutonsubscribeT">Subscribe</span>
      </div>
    </div>



  </div>

  <!--<div class="likeB">
    <i class="iB"></i>
    <span class="spanB">liked!</span>
  </div>
  <!-- partial -->
  <!--
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="./script.js"></script>-->





  <footer>
    <div class="footer">
      <div class="logo">
        <img src="./img/Foodieland.png" alt="" width="110px">
        <p>Lorem ipsum dolor sit amet, consectetuipisicing elit, </p>
      </div>
      <div class="menuf">
        <div class="recipes"> <a href="index.php">Recipes</a></div>
        <div class="blog"><a href="listeArticles.php">Blog </a></div>
        <div class="contact"> <a href="login_index.php">Contact</a></div>
        <div class="aboutus"> <a href="login_index.php">About us</a></div>
      </div>
    </div>
    <hr class="footerhr">
    <div class="footer2">
      <p>© 2020 Flowbase. Powered by <a href="">Webflow</a></p>
      <div class="resouxf">
        <div class="lg2"><a href="https://fr-fr.facebook.com/"><i class="fa-brands fa-facebook-f fa-2x"></i></div></a>
        <div class="lg2"><a href="https://twitter.com/?lang=fr"><i class="fa-brands fa-twitter fa-2x"></i></div></a>
        <div class="lg2"><a href="https://www.instagram.com/?hl=fr"><i class="fa-brands fa-instagram fa-2x"></i></div></a>
      </div>
    </div>
  </footer>

</body>

</html>