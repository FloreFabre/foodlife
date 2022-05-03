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
  <div class="recette1">
  <img class="imgR" src="./img/burger.png" alt="">
      <div class="likeR">
        <div class="likeB">
          <i class="iB"></i>
          <span class="spanB">liked!</span>
        </div>
        <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="./script.js"></script>
      </div>
      <span class="recetteTexte"> Big and Juicy Wagyu Beef Cheeseburger</span>
      <img class="imgTimeR" src="./img/Vector.png" alt="">
      <span class="minR"> 30 Minutes</span>
      <div class="imgCatR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR">Snack</span>
  </div>
  <div class="recette1">
  <img class="imgR" src="./img/fish.png" alt="">
      <img class="likeR" src="./img/unlike.png" alt="">
      <span class="recetteTexte"> Fresh Lime Roasted Salmon with Ginger Sauce</span>
      <img class="imgTimeR" src="./img/Vector.png" alt="">
      <span class="minR"> 30 Minutes</span>
      <div class="imgCatR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR">Fish</span>
  </div>
  <div class="recette1">
  <img class="imgR" src="./img/pancake.png" alt="">
      <img class="likeR" src="./img/unlike.png" alt="">
      <span class="recetteTexte"> Strawberry Oatmeal Pancake with Honey Syrup</span>
      <img class="imgTimeR" src="./img/Vector.png" alt="">
      <span class="minR"> 30 Minutes</span>
      <div class="imgCatR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR">Breakfast</span>
  </div>
  <div class="recette1">
  <img class="imgR" src="./img/mixedmayo.png" alt="">
      <img class="likeR" src="./img/like.png" alt="">
      <span class="recetteTexte"> Fresh and Healthy Mixed Mayonnaise Salad</span>
      <img class="imgTimeR" src="./img/Vector.png" alt="">
      <span class="minR"> 30 Minutes</span>
      <div class="imgCatR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR">Healthy</span>
  </div>
  <div class="recette1">
  <img class="imgR" src="./img/meatballs.png" alt="">
      <img class="likeR" src="./img/unlike.png" alt="">
      <span class="recetteTexte"> Chicken Meatballs with Cream Cheese</span>
      <img class="imgTimeR" src="./img/Vector.png" alt="">
      <span class="minR"> 30 Minutes</span>
      <div class="imgCatR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR">Meat</span>
  </div>
  <div class="pub">
  <span class="textpub">Don’t forget to eat
  healthy food</span>
<img class="imgpub" src="./img/pubfood.png" alt="">
<img class="starpub" src="./img/pubstar.png" alt="">

<span class="lienpub">www.foodieland.com</span>

  </div>
  <div class="recette1">
  <img class="imgR" src="./img/orangepancake.png" alt="">
      <img class="likeR" src="./img/like.png" alt="">
      <span class="recetteTexte"> Fruity Pancake with Orange & Blueberry</span>
      <img class="imgTimeR" src="./img/Vector.png" alt="">
      <span class="minR"> 30 Minutes</span>
      <div class="imgCatR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR">Sweet</span>
  </div>
  <div class="recette1">
  <img class="imgR" src="./img/chickenrice.png" alt="">
      <img class="likeR" src="./img/unlike.png" alt="">
      <span class="recetteTexte">The Best Easy One Pot Chicken and Rice</span>
      <img class="imgTimeR" src="./img/Vector.png" alt="">
      <span class="minR"> 30 Minutes</span>
      <div class="imgCatR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR">Snack</span>
  </div>
  <div class="recette1">
  <img class="imgR" src="./img/creamychicken.png" alt="">
      <img class="likeR" src="./img/unlike.png" alt="">
      <span class="recetteTexte">The Creamiest Creamy Chicken and Bacon Pasta</span>
      <img class="imgTimeR" src="./img/Vector.png" alt="">
      <span class="minR"> 30 Minutes</span>
      <div class="imgCatR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catR">Noodles</span>
  </div>
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

<div class="deliciousRecipe1">
<img class="imgDR" src="./img/tropicalfruit.png" alt="">
      <img class="likeDR" src="./img/like.png" alt="">

      <span class="DRtexte">Mixed Tropical Fruit Salad with Superfood Boosts </span>

      <img class="imgTimeDR" src="./img/Vector.png" alt="">
      <span class="minDR"> 30 Minutes</span>
      <div class="imgCatDR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catDR">Healthy</span>
</div>
<div class="deliciousRecipe1">
<img class="imgDR" src="./img/wagyubeef.png" alt="">
      <img class="likeDR" src="./img/unlike.png" alt="">

      <span class="DRtexte">Big and Juicy Wagyu Beef Cheeseburger </span>

      <img class="imgTimeDR" src="./img/Vector.png" alt="">
      <span class="minDR"> 30 Minutes</span>
      <div class="imgCatDR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catDR">Western</span>
</div>
<div class="deliciousRecipe1">
<img class="imgDR" src="./img/friedriceasparagus.png" alt="">
      <img class="likeDR" src="./img/like.png" alt="">

      <span class="DRtexte">Healthy Japanese Fried Rice with Asparagus</span>

      <img class="imgTimeDR" src="./img/Vector.png" alt="">
      <span class="minDR"> 30 Minutes</span>
      <div class="imgCatDR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catDR">Healthy</span>
</div>
<div class="deliciousRecipe1">
<img class="imgDR" src="./img/tacomeat.png" alt="">
      <img class="likeDR" src="./img/unlike.png" alt="">

      <span class="DRtexte">Cauliflower Walnut Vegetarian Taco Meat</span>

      <img class="imgTimeDR" src="./img/Vector.png" alt="">
      <span class="minDR"> 30 Minutes</span>
      <div class="imgCatDR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catDR">Eastern</span>
</div>
<div class="deliciousRecipe1">
<img class="imgDR" src="./img/chikensalad.png" alt="">
      <img class="likeDR" src="./img/like.png" alt="">

      <span class="DRtexte">Rainbow Chicken Salad with Almond Honey Mustard Dressing</span>

      <img class="imgTimeDR" src="./img/Vector.png" alt="">
      <span class="minDR"> 30 Minutes</span>
      <div class="imgCatDR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catDR">Healthy</span>
</div>
<div class="deliciousRecipe1">
<img class="imgDR" src="./img/spicysandwiches.png" alt="">
      <img class="likeDR" src="./img/unlike.png" alt="">

      <span class="DRtexte">Barbeque Spicy Sandwiches with Chips </span>

      <img class="imgTimeDR" src="./img/Vector.png" alt="">
      <span class="minDR"> 30 Minutes</span>
      <div class="imgCatDR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catDR">Snack</span>
</div>
<div class="deliciousRecipe1">
<img class="imgDR" src="./img/lettucewrap.png" alt="">
      <img class="likeDR" src="./img/unlike.png" alt="">

      <span class="DRtexte">Firecracker Vegan Lettuce Wraps - Spicy!</span>

      <img class="imgTimeDR" src="./img/Vector.png" alt="">
      <span class="minDR"> 30 Minutes</span>
      <div class="imgCatDR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catDR">Seafood</span>
</div>
<div class="deliciousRecipe1">
<img class="imgDR" src="./img/chikenramen.png" alt="">
      <img class="likeDR" src="./img/like.png" alt="">

      <span class="DRtexte">Chicken Ramen Soup with Mushroom </span>

      <img class="imgTimeDR" src="./img/Vector.png" alt="">
      <span class="minDR"> 30 Minutes</span>
      <div class="imgCatDR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      <span class="catDR">Japanese</span>
</div>


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