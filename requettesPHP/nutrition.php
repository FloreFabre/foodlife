<?php
$mysqli = new mysqli("localhost", "root", "", "foodlife");


if ($mysqli->connect_errno) {
    echo "Problème de connexion à la base de données !";
    exit();
}

// Selectionner des données
$requete_sqlnutri = "SELECT 
nutrition_info.calorie,
nutrition_info.totalfat,
nutrition_info.protein, 
nutrition_info.carboh, 
nutrition_info.choleste,
nutrition_info.textenutri
FROM nutrition_info
WHERE id = 1";
$resultnutri = $mysqli->query($requete_sqlnutri);



//Stocker les données
while ($row = $resultnutri->fetch_assoc()) {
    // my_var_dump($row, 'row');


    $tabpost5[] = [

        'calorie' => $row['calorie'],
        'totalfat' => $row['totalfat'],
        'protein' => $row['protein'],
        'carboh' => $row['carboh'],
        'choleste' => $row['choleste'],
        'textenutri' => $row['textenutri'],
     
    ];
}

?>

<?php

for ($i = 0; $i < count($tabpost5); $i++) {

?>

     
       <span class="titreNutrition">Nutrition Information</span>
            <span class="calorie">Calories</span>  <p class="Cavaleur"><?php echo $tabpost5[$i]["calorie"];   ?></p>
            <hr class="Nséparation1">
            <span class="totalfat">Total Fat</span>  <p class="tvaleur"><?php echo $tabpost5[$i]["totalfat"];   ?></p>
            <hr class="Nséparation2">
            <span class="protein">Protein</span> <p class="pvaleur"><?php echo $tabpost5[$i]["protein"];   ?></p>
            <hr class="Nséparation3">
            <span class="carboh"> Carbohydrate</span>  <p class="carvaleur"><?php echo $tabpost5[$i]["carboh"];   ?></p>
            <hr class="Nséparation4">
            <span class="choleste">Cholesterol</span> <p class="chovaleur"><?php echo $tabpost5[$i]["choleste"];   ?></p>
            <hr class="Nséparation5">

            <p class="texteNutri"><?php echo $tabpost5[$i]["textenutri"];   ?></p>


<?php } ?>