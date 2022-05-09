<?php
$mysqli = new mysqli("localhost", "root", "", "foodlife");


if ($mysqli->connect_errno) {
    echo "Problème de connexion à la base de données !";
    exit();
}

// Selectionner des données
$requete_sqldirect2 = "SELECT recette.etape2,  recette.etape3
FROM recette LIMIT 1 ";
$resultdirect2 = $mysqli->query($requete_sqldirect2);



//Stocker les données
while ($row = $resultdirect2->fetch_assoc()) {
    // my_var_dump($row, 'row');


    $tabpost9[] = [

        'etape2' => $row['etape2'],
        'etape3' => $row['etape3'],
      
     
    ];
}

?>

<?php

for ($i = 0; $i < count($tabpost9); $i++) {

?>

                <div class="etape1">
                    <img class="checkstep" src="./img/stepuncheck.png" alt="">
                    <span class="titrestep">2. Lorem ipsum dolor sit amet </span>
                    <p class="textestep"><?php echo $tabpost9[$i]["etape2"];   ?></p>
                    <hr class="stepséparation2">
                </div>
                <div class="etape1">
                    <img class="checkstep" src="./img/stepuncheck.png" alt="">
                    <span class="titrestep">3. Lorem ipsum dolor sit amet </span>
                    <p class="textestep"><?php echo $tabpost9[$i]["etape3"];   ?></p>
                    <hr class="stepséparation3">
                </div>

<?php } ?>