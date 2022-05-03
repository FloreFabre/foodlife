<?php
$mysqli = new mysqli("localhost", "root", "", "foodlife");


if ($mysqli->connect_errno) {
    echo "Problème de connexion à la base de données !";
    exit();
}

// Selectionner des données
$requete_sqlD = "SELECT titreD, photoD, dureeprepD, type FROM recetted, catégorie WHERE id_categ = catégorie.id LIMIT 8";
$resultD = $mysqli->query($requete_sqlD);



//Stocker les données
while ($row = $resultD->fetch_assoc()) {
    // my_var_dump($row, 'row');


    $tabpost2[] = [

        'titreD' => $row['titreD'],
        'photoD' => $row['photoD'],
        'dureeprepD' => $row['dureeprepD'],
        'type' => $row['type'],
    ];
}

?>

<?php

for ($i = 0; $i < count($tabpost2); $i++) {

?>
 
    <div class="deliciousRecipe1">
        <img src="./img/<?php echo $tabpost2[$i]["photoD"];   ?>" alt="photo" class="imgDR">

        <div class="likeDR">
        <div class="likeB">
          <i class="iB"></i>
          <span class="spanB">liked!</span>
        </div>
        <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="./script.js"></script>
      </div>

        <p class="DRtexte"><?php echo $tabpost2[$i]["titreD"];   ?></p>
        <img class="imgTimeDR" src="./img/Vector.png" alt="">
        <p class="minDR"><?php echo $tabpost2[$i]["dureeprepD"];   ?></p>
        <div class="imgCatDR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      
        <p class="catDR"><?php echo $tabpost2[$i]["type"];   ?></p>
      
    </div>
<?php } ?>