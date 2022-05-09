<?php
$mysqli = new mysqli("localhost", "root", "", "foodlife");


if ($mysqli->connect_errno) {
    echo "Problème de connexion à la base de données !";
    exit();
}

// Selectionner des données
$requete_sqldirect1 = "SELECT recette.etape1, recette.etapephoto, recette.`etape1.2`
FROM recette LIMIT 1 ";
$resultdirect1 = $mysqli->query($requete_sqldirect1);



//Stocker les données
while ($row = $resultdirect1->fetch_assoc()) {
    // my_var_dump($row, 'row');


    $tabpost8[] = [

        'etape1' => $row['etape1'],
        'etapephoto' => $row['etapephoto'],
        'etape1.2' => $row['etape1.2'],
      
     
    ];
}

?>

<?php

for ($i = 0; $i < count($tabpost8); $i++) {

?>

            <div class="etape1">
            <img class="checkstep" src="./img/stepuncheck.png" alt="">
                    <span class="titrestep">1. Lorem ipsum dolor sit amet</span>
                    <p class="textestep"><?php echo $tabpost8[$i]["etape1"];   ?></p>
                    <img src="./img/<?php echo $tabpost8[$i]["etapephoto"];   ?>" alt="photo" class="imgstep">
                    <p class="textestep2"><?php echo $tabpost8[$i]["etape1.2"];   ?></p>
                    <hr class="stepséparation">
                </div>
               

<?php } ?>