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
        <div class="headerRT">
            <span class="RecetteTopTitre">Health Japanese Fried Rice</span>
            <div class="auteur2">
                <img class="imgAuteur" src="./img/jhonsmith.png" alt="">

                <div class="auteurNom2">
                    <span>John Smith</span>
                    <span class="timeAuteur2"> 15 March 2022</span>
                </div>
            </div>
            <hr class="séparation1">
            <img class="imgTimeR" src="./img/Vector.png" alt="">
            <span class="preptime">PREP TIME</span>
            <span class="minR"> 15 Minutes</span>
            <hr class="séparation2">
            <img class="imgTimeR2" src="./img/Vector.png" alt="">
            <span class="cooktime">COOK TIME</span>
            <span class="minR2"> 15 Minutes</span>
            <hr class="séparation3">
            <div class="imgCatR">
                <img class="" src="./img/Vector (1).png" alt="">
                <img class="" src="./img/Vector (2).png" alt="">
            </div>
            <span class="catR">Chicken</span>
        </div>

        <img class="vidéorecette" src="./img/videorecette.png" alt="">

        <div class="nutritioninfo">
            <span class="titreNutrition">Nutrition Information</span>
            <span class="calorie">Calories</span> <span class="Cavaleur">219.9 kcal</span>
            <hr class="Nséparation1">
            <span class="totalfat">Total Fat</span> <span class="tvaleur">10.7 g</span>
            <hr class="Nséparation2">
            <span class="protein">Protein</span> <span class="pvaleur">7.9 g</span>
            <hr class="Nséparation3">
            <span class="carboh"> Carbohydrate</span> <span class="carvaleur">22.3 g</span>
            <hr class="Nséparation4">
            <span class="choleste">Cholesterol</span> <span class="chovaleur">37.4 mg</span>
            <hr class="Nséparation5">

            <span class="texteNutri">adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>


        </div>


        <span class="texteBotTop">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>



    </div>


    <div class="RecetteMid">

        <div class="ingredient">
            <span class="ingredientTitre">Ingredients</span>
            <span class="maindish">For main dish</span>
            <div class="ingredienCheck">
                <img class="checkingre1" src="./img/stepcheck.png" alt="">
                <span class="texteingre1">Lorem ipsum dolor sit amet</span>
                <hr class="ingreséparation1">
                <img class="checkingre2" src="./img/stepuncheck.png" alt="">
                <span class="texteingre2">Lorem ipsum dolor sit amet</span>
                <hr class="ingreséparation2">
                <img class="checkingre3" src="./img/stepuncheck.png" alt="">
                <span class="texteingre3">Lorem ipsum dolor sit amet</span>
                <hr class="ingreséparation3">
                <img class="checkingre4" src="./img/stepuncheck.png" alt="">
                <span class="texteingre4">Lorem ipsum dolor sit amet</span>
                <hr class="ingreséparation4">
                <img class="checkingre5" src="./img/stepuncheck.png" alt="">
                <span class="texteingre5">Lorem ipsum dolor sit amet</span>
                <hr class="ingreséparation5">

            </div>
        </div>
        <div class="OtherRecipe">
            <span class="TireOR">Other Recipe</span>

            <img class="imgORrecette1" src="./img/ORchiken.png" alt="">
            <span class="ORtitre1">Chicken Meatball with Creamy Chees...</span>
            <span class="ORauteur1">By Andreas Paula</span>

            <img class="imgORrecette2" src="./img/ORcreamy.png" alt="">
            <span class="ORtitre2">The Creamiest Creamy Chicken an...</span>
            <span class="ORauteur2">By Andreas Paula</span>

            <img class="imgORrecette3" src="./img/ORricechicken.png" alt="">
            <span class="ORtitre3">The Best Easy One Pot Chicken and Rice</span>
            <span class="ORauteur3">By Andreas Paula</span>

            <div class="pub2">

                <span class="textpub">Don’t forget to eat
                    healthy food</span>
                <img class="imgpub" src="./img/pubfood.png" alt="">
                <img class="starpub" src="./img/pubstar.png" alt="">

                <span class="lienpub">www.foodieland.com</span>


            </div>

        </div>

        <div class="Sauce">
            <span class="titreSauce">For the sauce</span>
            <img class="checksauce1" src="./img/stepuncheck.png" alt="">
            <span class="textesauce1">Lorem ipsum dolor sit amet</span>
            <hr class="sauceséparation1">
            <img class="checksauce2" src="./img/stepuncheck.png" alt="">
            <span class="textesauce2">Lorem ipsum dolor sit amet</span>
            <hr class="sauceséparation2">
            <img class="checksauce3" src="./img/stepuncheck.png" alt="">
            <span class="textesauce3">Lorem ipsum dolor sit amet</span>
            <hr class="sauceséparation3">

        </div>

    </div>

    <div class="RecetteBot">
        <div class="direction">
            <span class="titrestep">Directions</span>

            <img class="checkstep1" src="./img/stepuncheck.png" alt="">
            <span class="titrestep1">1. Lorem ipsum dolor sit amet</span>
            <span class="textestep1">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span>

            <img class="imgstep1" src="./img/imgDirection.png" alt="">

            <span class="textestep2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span>

            <hr class="stepséparation1">


            <img class="checkstep2" src="./img/stepuncheck.png" alt="">
            <span class="titrestep2">2. Lorem ipsum dolor sit amet </span>
            <span class="textestep3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span>

            <hr class="stepséparation2">


            <img class="checkstep3" src="./img/stepuncheck.png" alt="">
            <span class="titrestep3">3. Lorem ipsum dolor sit amet </span>
            <span class="textestep4">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span>

            <hr class="stepséparation3">


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


    <div class="Recipelike">


        <span class="RecipelikeTitre">You may like these recipe too</span>



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

        <div class="Recipelike2">

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

        <div class="Recipelike3">

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

        <div class="Recipelike4">

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