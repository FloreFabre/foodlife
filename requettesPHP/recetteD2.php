<?php
$mysqli = new mysqli("localhost", "root", "", "foodlife");


if ($mysqli->connect_errno) {
    echo "Problème de connexion à la base de données !";
    exit();
}

// Selectionner des données
$requete_sqlD2 = "SELECT titreD, photoD, dureeprepD, type FROM recetted, catégorie WHERE id_categ = catégorie.id ORDER BY RAND() LIMIT 4";
$resultD2 = $mysqli->query($requete_sqlD2);



//Stocker les données
while ($row = $resultD2->fetch_assoc()) {
    // my_var_dump($row, 'row');


    $tabpost10[] = [

        'titreD' => $row['titreD'],
        'photoD' => $row['photoD'],
        'dureeprepD' => $row['dureeprepD'],
        'type' => $row['type'],
    ];
}

?>

<?php

for ($i = 0; $i < count($tabpost10); $i++) {

?>
 
    <div class="Recipelike1">
        <img src="./img/<?php echo $tabpost10[$i]["photoD"];   ?>" alt="photo" class="imgRL">

        <div class="likeRL">
        <div class="likeB">
          <i class="iB"></i>
          <span class="spanB">liked!</span>
        </div>
        <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="./script.js"></script>
      </div>

        <p class="RLtexte"><a href="indexRecette.php"><?php echo $tabpost10[$i]["titreD"];   ?></p></a>
        <img class="imgTimeRL" src="./img/Vector.png" alt="">
        <p class="minRL"><?php echo $tabpost10[$i]["dureeprepD"];   ?></p>
        <div class="imgCatRL">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      
        <p class="catRL"><?php echo $tabpost10[$i]["type"];   ?></p>
      
    </div>
<?php } ?>