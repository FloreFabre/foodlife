<?php
$mysqli = new mysqli("localhost", "root", "", "foodlife");


if ($mysqli->connect_errno) {
    echo "Problème de connexion à la base de données !";
    exit();
}

// Selectionner des données
$requete_sqlsauce = "SELECT ingrédient.sauce1, ingrédient.sauce2, ingrédient.sauce3
FROM ingrédient ";
$resultsauce = $mysqli->query($requete_sqlsauce);



//Stocker les données
while ($row = $resultsauce->fetch_assoc()) {
    // my_var_dump($row, 'row');


    $tabpost7[] = [

        'sauce1' => $row['sauce1'],
        'sauce2' => $row['sauce2'],
        'sauce3' => $row['sauce3'],
      
     
    ];
}

?>

<?php

for ($i = 0; $i < count($tabpost7); $i++) {

?>
               
            
           
            <div class="checkSauce">
                <div class="checkSauce1">
                <img class="checksauce" src="./img/stepcheck.png" alt="">
                    <p class="textesauce"><?php echo $tabpost7[$i]["sauce1"];   ?></p>
                    <hr class="sauceséparation">
                </div>
                <div class="checkSauce1">
                <img class="checksauce" src="./img/stepcheck.png" alt="">
                    <p class="textesauce"><?php echo $tabpost7[$i]["sauce2"];   ?></p>
                    <hr class="sauceséparation">
                </div>
                <div class="checkSauce1">
                <img class="checksauce" src="./img/stepcheck.png" alt="">
                    <p class="textesauce"><?php echo $tabpost7[$i]["sauce3"];   ?></p>
                    <hr class="sauceséparation">
                </div>
            </div>


<?php } ?>