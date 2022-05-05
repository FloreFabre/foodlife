<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>FoodLife</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/recetteAccueil.css" />
    <link rel="stylesheet" href="./css/recetteAccueil2.css" />
    <link rel="stylesheet" href="./css/pageRecette.css" />
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

    <div class="RecetteTop">
    <?php include './requettesPHP/PageRecetteTOP.php'; ?>
    

        <div class="nutritioninfo">

        <?php include './requettesPHP/nutrition.php'; ?>
     

    </div>


    <div class="RecetteMid">

        <div class="ingredient">
            <span class="ingredientTitre">Ingredients</span>
            <span class="maindish">For main dish</span>
            <div class="ingredienCheck">
            <?php include './requettesPHP/ingredient.php'; ?>
             
        </div>

        <span class="TireOR">Other Recipe</span>
        <div class="OtherRecipe">
            
        <?php include './requettesPHP/otherRecipe.php'; ?>
          
        </div>

        <div class="Sauce">
            <span class="titreSauce">For the sauce</span>
            <div class="checkSauce">
                <div class="checkSauce1">
                    <img class="checksauce" src="./img/stepuncheck.png" alt="">
                    <span class="textesauce">Lorem ipsum dolor sit amet</span>
                    <hr class="sauceséparation">
                </div>
                <div class="checkSauce1">
                    <img class="checksauce" src="./img/stepuncheck.png" alt="">
                    <span class="textesauce">Lorem ipsum dolor sit amet</span>
                    <hr class="sauceséparation">
                </div>
                <div class="checkSauce1">
                    <img class="checksauce" src="./img/stepuncheck.png" alt="">
                    <span class="textesauce">Lorem ipsum dolor sit amet</span>
                    <hr class="sauceséparation">
                </div>
            </div>
        </div>

    </div>

    <div class="RecetteBot">
        <div class="direction">
            <span class="titrestep1">Directions</span>
            <div class="directiongrid">
                
                <div class="etape1">

                    <img class="checkstep" src="./img/stepuncheck.png" alt="">
                    <span class="titrestep">1. Lorem ipsum dolor sit amet</span>
                    <span class="textestep">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span>
                    <img class="imgstep" src="./img/imgDirection.png" alt="">
                    <span class="textestep2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span>
                    <hr class="stepséparation">
                </div>
            </div>
                <div class="directiongrid2">
                <div class="etape1">
                    <img class="checkstep" src="./img/stepuncheck.png" alt="">
                    <span class="titrestep">2. Lorem ipsum dolor sit amet </span>
                    <span class="textestep">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span>
                    <hr class="stepséparation2">
                </div>
                <div class="etape1">
                    <img class="checkstep" src="./img/stepuncheck.png" alt="">
                    <span class="titrestep">3. Lorem ipsum dolor sit amet </span>
                    <span class="textestep">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span>
                    <hr class="stepséparation3">
                </div>
            </div>
        </div>


    </div>

    <div class="subscribe2">

        <span class="subscribetitre">Deliciousness to your inbox</span>

        <span class="subscribetexte">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim </span>

        <img class="imgemail1v2" src="./img/Photo-plate.png" alt="">
        <img class="imgemail2" src="./img/kisspng-salad.png" alt="">
        <img class="imgemail3v2" src="./img/rucola-png.png" alt="">
        <div class="input-comment"> <input type="text" name="texte" id="id" placeholder="Your email address…">
            <div class="boutonsubscribe">
                <span class="boutonsubscribeT">Subscribe</span>
            </div>
        </div>

    </div>





    <span class="RecipelikeTitre">You may like these recipe too</span>
    <div class="Recipelike">


        <div class="Recipelike1">

            <img class="imgRL" src="./img/tropicalfruit.png" alt="">
            <img class="likeRL" src="./img/like.png" alt="">

            <span class="RLtexte">Mixed Tropical Fruit Salad with Superfood Boosts </span>

            <img class="imgTimeRL" src="./img/Vector.png" alt="">
            <span class="minRL"> 30 Minutes</span>
            <div class="imgCatRL">
                <img class="" src="./img/Vector (1).png" alt="">
                <img class="" src="./img/Vector (2).png" alt="">
            </div>
            <span class="catRL">Healthy</span>


        </div>

        <div class="Recipelike1">

            <img class="imgRL" src="./img/wagyubeef.png" alt="">
            <img class="likeRL" src="./img/unlike.png" alt="">

            <span class="RLtexte">Big and Juicy Wagyu Beef Cheeseburger</span>

            <img class="imgTimeRL" src="./img/Vector.png" alt="">
            <span class="minRL"> 30 Minutes</span>
            <div class="imgCatRL">
                <img class="" src="./img/Vector (1).png" alt="">
                <img class="" src="./img/Vector (2).png" alt="">
            </div>
            <span class="catRL">Western</span>


        </div>

        <div class="Recipelike1">

            <img class="imgRL" src="./img/friedriceasparagus.png" alt="">
            <img class="likeRL" src="./img/like.png" alt="">

            <span class="RLtexte">Healthy Japanese Fried Rice with Asparagus</span>

            <img class="imgTimeRL" src="./img/Vector.png" alt="">
            <span class="minRL"> 30 Minutes</span>
            <div class="imgCatRL">
                <img class="" src="./img/Vector (1).png" alt="">
                <img class="" src="./img/Vector (2).png" alt="">
            </div>
            <span class="catRL">Healthy</span>


        </div>

        <div class="Recipelike1">

            <img class="imgRL" src="./img/tacomeat.png" alt="">
            <img class="likeRL" src="./img/unlike.png" alt="">

            <span class="RLtexte">Cauliflower Walnut Vegetarian Taco Meat</span>

            <img class="imgTimeRL" src="./img/Vector.png" alt="">
            <span class="minRL"> 30 Minutes</span>
            <div class="imgCatRL">
                <img class="" src="./img/Vector (1).png" alt="">
                <img class="" src="./img/Vector (2).png" alt="">
            </div>
            <span class="catRL">Eastern</span>


        </div>




    </div>



    <footer>
        <div class="footerPR">
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