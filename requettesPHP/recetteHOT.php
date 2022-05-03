<?php
$mysqli = new mysqli("localhost", "root", "", "foodlife");


if ($mysqli->connect_errno) {
    echo "Problème de connexion à la base de données !";
    exit();
}

// Selectionner des données
$requete_sqlhot = "SELECT titreHOT, texteHOT, imgHOT,dureprepHOT,dateHOT,dateHOT, type,nom,avatar FROM recettehot, catégorie, utilisateur WHERE id_categHOT = catégorie.id";
$resulthot = $mysqli->query($requete_sqlhot);



//Stocker les données
while ($row = $resulthot->fetch_assoc()) {
    // my_var_dump($row, 'row');


    $tabpost3[] = [

        'titreHOT' => $row['titreHOT'],
        'imgHOT' => $row['imgHOT'],
        'dureprepHOT' => $row['dureprepHOT'],
        'texteHOT' => $row['texteHOT'],
        'dateHOT' => $row['dateHOT'],
        'type' => $row['type'],
        'nom' => $row['nom'],
        'avatar' => $row['avatar'],
    ];
}

?>

<?php

for ($i = 0; $i < count($tabpost3); $i++) {

?>


    <div class="recettedroite">
        <img src="./img/<?php echo $tabpost3[$i]["imgHOT"];   ?>" alt="photo" class="imgD">
    </div>

    <div class="recettegauche">
        <img class="imgG" src="./img/Rectangle.png" alt="">
        <div class="HOT">
            <img class="imgHOT" src="./img/image14.png" alt="">
            <span class="hotrecette"> Hot Recipes</span>
        </div>

        <p class="titreR"><?php echo $tabpost3[$i]["titreHOT"];   ?></p>
        <p class="texteR"><?php echo $tabpost3[$i]["texteHOT"];   ?></p>

        <div class="time">
            <img class="imgTime" src="./img/Vector.png" alt="">
            <p class="min"><?php echo $tabpost3[$i]["dureprepHOT"];   ?></p>
        </div>
        <div class="catég">
            <div class="imgCat">
                <img class="" src="./img/Vector (1).png" alt="">
                <img class="" src="./img/Vector (2).png" alt="">
            </div>

            <p class="cat"><?php echo $tabpost3[$i]["type"];   ?></p>
        </div>
        <div class="auteur">
            <img src="./img/<?php echo $tabpost3[$i]["avatar"];   ?>" alt="photo" class="imgAuteur">
            <div class="auteurNom">
                <p class=""><?php echo $tabpost3[$i]["nom"];   ?></p>
                <p class="timeAuteur"><?php echo $tabpost3[$i]["dateHOT"];   ?></p>
            </div>
        </div>

        <div class="bouttonRecipe">
        <img class="imgBoutton" src="./img/bouttonplay.png" alt="">
        <span class="view">View Recipes</span>
      </div>


    </div>

<?php } ?>