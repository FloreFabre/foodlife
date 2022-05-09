<?php
$mysqli = new mysqli("localhost", "root", "", "foodlife");
include('./crud/bdd.php');


if ($mysqli->connect_errno) {
    echo "Problème de connexion à la base de données !";
    exit();
}

// Selectionner des données
$requete_sql = "SELECT titre, photo, dureeprep, type FROM recette, catégorie WHERE id_categorie = catégorie.id ORDER BY recette.id ASC LIMIT 9 ";
$result = $mysqli->query($requete_sql);



//Stocker les données
while ($row = $result->fetch_assoc()) {
    // my_var_dump($row, 'row');


    $tabpost[] = [

        'titre' => $row['titre'],
        'photo' => $row['photo'],
        'dureeprep' => $row['dureeprep'],
        'type' => $row['type'],
    ];
}

?>

<?php

for ($i = 0; $i < count($tabpost); $i++) {

?>

    <div class="recette1">
        <img src="./img/<?php echo $tabpost[$i]["photo"];   ?>" alt="photo" class="imgR">

        <div class="likeR">
        <div class="likeB">
          <i class="iB"></i>
          <span class="spanB">liked!</span>
        </div>
        <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="./script.js"></script>
      </div>

        <p class="recetteTexte"> <a href="indexRecette.php"><?php echo $tabpost[$i]["titre"];   ?></p> </a>
        <img class="imgTimeR" src="./img/Vector.png" alt="">
        <p class="minR"><?php echo $tabpost[$i]["dureeprep"];   ?></p>
        <div class="imgCatR">
        <img class="" src="./img/Vector (1).png" alt="">
        <img class="" src="./img/Vector (2).png" alt="">
      </div>
      
        <p class="catR"><?php echo $tabpost[$i]["type"];   ?></p>
      
    </div>
<?php } ?>