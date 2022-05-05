<?php
$mysqli = new mysqli("localhost", "root", "", "foodlife");


if ($mysqli->connect_errno) {
  echo "Problème de connexion à la base de données !";
  exit();
}

// Selectionner des données
$requete_sql = "SELECT recette.titre, utilisateur.nom, recette.photo FROM recette INNER JOIN utilisateur ON recette.id_user = utilisateur.id ORDER BY RAND() LIMIT 3  ";
$result = $mysqli->query($requete_sql);



//Stocker les données
while ($row = $result->fetch_assoc()) {
  // my_var_dump($row, 'row');


  $tabpost[] = [

    'titre' => $row['titre'],
    'photo' => $row['photo'],
    'nom' => $row['nom'],
  ];
}

?>

<?php

for ($i = 0; $i < count($tabpost); $i++) {

?>

  <div class="OtherRecipe1">
    <img src="./img/<?php echo $tabpost[$i]["photo"];   ?>" alt="photo" class="imgORrecette">
    <p class="ORtitre"><?php echo $tabpost[$i]["titre"];   ?></p>
    <p class="ORauteur"><?php echo $tabpost[$i]["nom"];   ?></p>
  </div>

  <div class="pub2">

    <span class="textpub">Don’t forget to eat
      healthy food</span>
    <img class="imgpub" src="./img/pubfood.png" alt="">
    <img class="starpub" src="./img/pubstar.png" alt="">

    <span class="lienpub">www.foodieland.com</span>


  </div>

<?php } ?>