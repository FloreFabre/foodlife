<?php
$mysqli = new mysqli("localhost", "root", "", "foodlife");


if ($mysqli->connect_errno) {
    echo "Problème de connexion à la base de données !";
    exit();
}

// Selectionner des données
$requete_sqlingre = "SELECT 
ingrédient.ingre1,
ingrédient.ingre2,
ingrédient.ingre3,
ingrédient.ingre4,
ingrédient.ingre5
FROM
 ingrédient ";
$resultingre = $mysqli->query($requete_sqlingre);



//Stocker les données
while ($row = $resultingre->fetch_assoc()) {
    // my_var_dump($row, 'row');


    $tabpost6[] = [

        'ingre1' => $row['ingre1'],
        'ingre2' => $row['ingre2'],
        'ingre3' => $row['ingre3'],
        'ingre4' => $row['ingre4'],
        'ingre5' => $row['ingre5'],
        
     
    ];
}

?>

<?php

for ($i = 0; $i < count($tabpost6); $i++) {

?>
   
                
            <div class="ingrechek1">
                    <img class="checkingre" src="./img/stepcheck.png" alt="">
                    <p class="texteingre"><?php echo $tabpost6[$i]["ingre1"];   ?></p>
                    <hr class="ingreséparation">
                </div>
                <div class="ingrechek1">
                    <img class="checkingre" src="./img/stepuncheck.png" alt="">
                    <p class="texteingre"><?php echo $tabpost6[$i]["ingre2"];   ?></p>
                    <hr class="ingreséparation">
                </div>
                <div class="ingrechek1">
                    <img class="checkingre" src="./img/stepuncheck.png" alt="">
                    <p class="texteingre"><?php echo $tabpost6[$i]["ingre3"];   ?></p>
                    <hr class="ingreséparation">
                </div>
                <div class="ingrechek1">
                    <img class="checkingre" src="./img/stepuncheck.png" alt="">
                    <p class="texteingre"><?php echo $tabpost6[$i]["ingre4"];   ?></p>
                    <hr class="ingreséparation">
                </div>
                <div class="ingrechek1">
                    <img class="checkingre" src="./img/stepuncheck.png" alt="">
                    <p class="texteingre"><?php echo $tabpost6[$i]["ingre5"];   ?></p>
                    <hr class="ingreséparation">
                </div>

            </div>

<?php } ?>