<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <title>FoodLife</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/recetteAccueil.css" />
  <link rel="stylesheet" href="./css/settings.css" />
  <script src="https://kit.fontawesome.com/59ecaaffaa.js" crossorigin="anonymous"></script>
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
    <div class="recettedroite">
      <img class="imgD" src="./img/chickenwings.png" alt="">
    </div>




    <div class="recettegauche">

      <img class="imgG" src="./img/Rectangle.png" alt="">
      <div class="HOT">
        <img class="imgHOT" src="./img/image14.png" alt="">
        <span class="hotrecette"> Hot Recipes</span>
      </div>

      <span class="titreR"> Spicy delicious chicken wings</span>
      <span class="texteR">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim </span>

      <div class="time">
        <img class="imgTime" src="./img/Vector.png" alt="">
        <span class="min"> 30 Minutes</span>
      </div>
      <div class="catég">

        <div class="imgCat">
          <img class="" src="./img/Vector (1).png" alt="">
          <img class="" src="./img/Vector (2).png" alt="">
        </div>
        <span class="cat">Chicken</span>
      </div>

      <div class="auteur">
        <img class="imgAuteur" src="./img/jhonsmith.png" alt="">

        <div class="auteurNom">
          <span>John Smith</span>
          <span class="timeAuteur"> 15 March 2022</span>
        </div>
      </div>

      <div class="bouttonRecipe">
        <img class="imgBoutton" src="./img/bouttonplay.png" alt="">
        <span class="view">View Recipes</span>
      </div>

    </div>

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

  <div class="recette">


    <div class="recette1">
      <img class="imgR1" src="./img/burger.png" alt="">
      <img class="likeR1" src="./img/like.png" alt="">
      <span class="recette1Texte"> Big and Juicy Wagyu Beef Cheeseburger</span>
      <img class="imgTimeR1" src="./img/Vector.png" alt="">
      <span class="minR1"> 30 Minutes</span>
      <div class="imgCatR1">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR1">Snack</span>

    </div>


    <div class="recette2">
      <img class="imgR2" src="./img/fish.png" alt="">
      <img class="likeR2" src="./img/unlike.png" alt="">
      <span class="recette2Texte"> Fresh Lime Roasted Salmon with Ginger Sauce</span>
      <img class="imgTimeR2" src="./img/Vector.png" alt="">
      <span class="minR2"> 30 Minutes</span>
      <div class="imgCatR2">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR2">Fish</span>

    </div>

    <div class="recette3">
      <img class="imgR3" src="./img/pancake.png" alt="">
      <img class="likeR3" src="./img/unlike.png" alt="">
      <span class="recette3Texte"> Strawberry Oatmeal Pancake with Honey Syrup</span>
      <img class="imgTimeR3" src="./img/Vector.png" alt="">
      <span class="minR3"> 30 Minutes</span>
      <div class="imgCatR3">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR3">Breakfast</span>

    </div>

    <div class="recette4">
      <img class="imgR4" src="./img/mixedmayo.png" alt="">
      <img class="likeR4" src="./img/like.png" alt="">
      <span class="recette4Texte"> Fresh and Healthy Mixed Mayonnaise Salad</span>
      <img class="imgTimeR4" src="./img/Vector.png" alt="">
      <span class="minR4"> 30 Minutes</span>
      <div class="imgCatR4">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR4">Healthy</span>

    </div>

    <div class="recette5">

      <img class="imgR5" src="./img/meatballs.png" alt="">
      <img class="likeR5" src="./img/unlike.png" alt="">
      <span class="recette5Texte"> Chicken Meatballs with Cream Cheese</span>
      <img class="imgTimeR5" src="./img/Vector.png" alt="">
      <span class="minR5"> 30 Minutes</span>
      <div class="imgCatR5">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR5">Meat</span>

    </div>

    <div class="pub">

      <span class="textpub">Don’t forget to eat
        healthy food</span>
      <img class="imgpub" src="./img/pubfood.png" alt="">
      <img class="starpub" src="./img/pubstar.png" alt="">

      <span class="lienpub">www.foodieland.com</span>


    </div>

    <div class="recette6">
      <img class="imgR6" src="./img/orangepancake.png" alt="">
      <img class="likeR6" src="./img/like.png" alt="">
      <span class="recette6Texte"> Fruity Pancake with Orange & Blueberry</span>
      <img class="imgTimeR6" src="./img/Vector.png" alt="">
      <span class="minR6"> 30 Minutes</span>
      <div class="imgCatR6">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR6">Sweet</span>

    </div>

    <div class="recette7">
      <img class="imgR7" src="./img/chickenrice.png" alt="">
      <img class="likeR7" src="./img/unlike.png" alt="">
      <span class="recette7Texte">The Best Easy One Pot Chicken and Rice</span>
      <img class="imgTimeR7" src="./img/Vector.png" alt="">
      <span class="minR7"> 30 Minutes</span>
      <div class="imgCatR7">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR7">Snack</span>

    </div>


    <div class="recette8">
      <img class="imgR8" src="./img/creamychicken.png" alt="">
      <img class="likeR8" src="./img/unlike.png" alt="">
      <span class="recette8Texte">The Creamiest Creamy Chicken and Bacon Pasta</span>
      <img class="imgTimeR8" src="./img/Vector.png" alt="">
      <span class="minR8"> 30 Minutes</span>
      <div class="imgCatR8">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR8">Noodles</span>

    </div>

  </div>




  <div class="chef">

<span class="titrechef">Everyone can be a
chef in their own kitchen</span>

<span class="textechef">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim </span>


<div class="chefdroite">
<img class="imgchef" src="./img/portrait-happy-chef.png" alt="">

<img class="imgchefT" src="./img/tomate.png" alt="">
<img class="imgchefV" src="./img/cviande.png" alt="">
<img class="imgchefO" src="./img/oignion.png" alt="">
<img class="imgchefL" src="./img/cvegan.png" alt="">


</div>

  </div>








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