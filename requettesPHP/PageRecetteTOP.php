<?php
$mysqli = new mysqli("localhost", "root", "", "foodlife");


if ($mysqli->connect_errno) {
    echo "Problème de connexion à la base de données !";
    exit();
}

// Selectionner des données
$requete_sqlTOP = "SELECT utilisateur.avatar, utilisateur.nom, dateD, recetted.dureeprepD, recetted.dureecuiD,
catégorie.type, recetted.imgD, recetted.texteD,
recetted.titreD
FROM 
catégorie INNER JOIN
recetted ON recetted.id_categ = catégorie.id INNER JOIN
utilisateur ON recetted.id_user = utilisateur.id
WHERE
recetted.id = 3";
$resultTOP = $mysqli->query($requete_sqlTOP);



//Stocker les données
while ($row = $resultTOP->fetch_assoc()) {
    // my_var_dump($row, 'row');


    $tabpost4[] = [

        'nom' => $row['nom'],
        'dureeprepD' => $row['dureeprepD'],
        'dureecuiD' => $row['dureecuiD'],
        'titreD' => $row['titreD'],
        'imgD' => $row['imgD'],
        'dateD' => $row['dateD'],
        'type' => $row['type'],
        'texteD' => $row['texteD'],
        'avatar' => $row['avatar'],
    ];
}

?>

<?php

for ($i = 0; $i < count($tabpost4); $i++) {

?>


    <div class="headerRT">

           
             <p class="RecetteTopTitre"><?php echo $tabpost4[$i]["titreD"];   ?></p>

             <div class="auteur2">
            <img src="./img/<?php echo $tabpost4[$i]["avatar"];   ?>" alt="photo" class="imgAuteur">
            <div class="auteurNom2">
             <p class=""><?php echo $tabpost4[$i]["nom"];   ?></p>
             <p class="timeAuteur2"><?php echo $tabpost4[$i]["dateD"];   ?></p>
             </div>
            </div>
        <hr class="séparation1">
           
        
                <img class="imgTimeR" src="./img/Vector.png" alt="">
                <span class="preptime">PREP TIME</span>
                <p class="minR"><?php echo $tabpost4[$i]["dureeprepD"];   ?></p>
                <hr class="séparation2">
           
                <img class="imgTimeR2" src="./img/Vector.png" alt="">
                <span class="cooktime">COOK TIME</span>
                <p class="minR2"><?php echo $tabpost4[$i]["dureecuiD"];   ?></p>
                <hr class="séparation3">

           
                <div class="imgCatR">
                    <img class="" src="./img/Vector (1).png" alt="">
                    <img class="" src="./img/Vector (2).png" alt="">
                </div>

                <p class="catR"><?php echo $tabpost4[$i]["type"];   ?></p>

                <img src="./img/<?php echo $tabpost4[$i]["imgD"];   ?>" alt="photo" class="vidéorecette">
            
             
                    <p class="texteBotTop"><?php echo $tabpost4[$i]["texteD"];   ?></p>
                 
             
    </div>

<?php } ?>