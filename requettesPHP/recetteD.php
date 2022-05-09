<?php
$mysqli = new mysqli("localhost", "root", "", "foodlife");


if ($mysqli->connect_errno) {
    echo "Problème de connexion à la base de données !";
    exit();
}

// Selectionner des données
$requete_sqlD = "SELECT titre, photo, dureeprep, type FROM recette, catégorie WHERE id_categorie = catégorie.id  ORDER BY recette.id  DESC   LIMIT 8";
$resultD = $mysqli->query($requete_sqlD);



//Stocker les données
while ($row = $resultD->fetch_assoc()) {
    // my_var_dump($row, 'row');


    $tabpost2[] = [

        'titre' => $row['titre'],
        'photo' => $row['photo'],
        'dureeprep' => $row['dureeprep'],
        'type' => $row['type'],
    ];
}

?>

<?php

for ($i = 0; $i < count($tabpost2); $i++) {

?>
 
    <div class="deliciousRecipe1">
        <img src="./img/<?php echo $tabpost2[$i]["photo"];   ?>" alt="photo" class="imgDR">

        <div class="likeDR">
        <div class="likeB">
          <i class="iB"></i>
          <span class="spanB">liked!</span>
        </div>
        <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="./script.js"></script>
      </div>

        <p class="DRtexte"><a href="indexRecette.php"><?php echo $tabpost2[$i]["titre"];   ?></p></a>
        <img class="imgTimeDR" src="./img/Vector.png" alt="">
        <p class="minDR"><?php echo $tabpost2[$i]["dureeprep"];   ?></p>
        <div class="imgCatDR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      
        <p class="catDR"><?php echo $tabpost2[$i]["type"];   ?></p>
      
    </div>
<?php } ?>