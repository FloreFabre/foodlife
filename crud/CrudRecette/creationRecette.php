<?php
$bdd = new mysqli("localhost", "root", "", "foodlife");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../css/creation.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="topnav">
            <a href="crudUser.php">Retour a la liste</a>

        </div>
    </header>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<p><span>Nouveau Post Publié</span></p>";
    ?>
       
        </div>
        <?php
       


        $requete = ("INSERT INTO `utilisateur` ( `avatar`, `nom`, `pseudo`, `password`) VALUES 
        ('" . $_POST['avatar'] . "','" . $_POST['nom'] . "','" . $_POST['pseudo'] . "','" . $_POST['password'] . "')") ;
        $resultat = $bdd->query($requete);
        if ($resultat) {
            echo "<span>L'article a bien étè ajouter</span>";
        } else {
            echo "<span>L'article n'a pas étais ajouter</span>";
        }
   //récupère le dernière utilisateur ajouter
              //requete
              $sql_id_user = "SELECT id FROM `utilisateur` WHERE 1 ORDER BY id DESC LIMIT 1;";
              //execute la requete
              $res = $mysqli->query($sql_id_user);
              //test si erreur
              if ($mysqli->errno) {
                  var_dump($sql_id_user);
                  printf("<p class='error'>Un problème est survenue  %s </p><br />", $mysqli->error);
                  $mysqli->close();
                  exit;
              }
              //recupère id user
              $user = $res->fetch_assoc();
              $idUser = $user['id'];
      
              for ($i = 0; $i < count($tabRoles); $i++) {
                  if (isset($_POST['role-' . $i])) {
                      //requete d'ajout de role
                      $idRole = $_POST['role-' . $i];
                      $insert_role_sql = "INSERT INTO `role_user` (`id_role`, `id_user`, `date`) 
                                          VALUES ('$idRole', '$idUser', NOW());";
                      //execute la requete
                      $res = $mysqli->query($insert_role_sql);
                      //test si j'ai une erreur 
                      if ($mysqli->errno) {
                          var_dump($insert_role_sql);
                          printf("<p class='error'>Un problème est survenue  %s </p><br />", $mysqli->error);
                          $mysqli->close();
                          exit;
                      }
                  }
              }
        ?>
    <?php

    } else {

    ?>
        <div class="forms">
            <form class="myform" action="./creationUser.php" method="POST">

                <p><label for="nom"> Avatar :</label> <br> <input type="file" name="avatar" id=""></p>
                <p><label for="nom"> Nom :</label> <br> <input type="text" name="nom" id=""></p>
                <p><label for="nom"> Pseudo :</label> <br> <input type="text" name="pseudo" id=""></p>
                <p><label for="nom"> Password :</label> <br> <input type="text" name="password" id=""></p>
                
            
               

                <p><input type="submit" value="Ajouter cet article"></p>

        </div>
        </form>


        </div>
        <?php

        ?>
    <?php
    }

    ?>

    <footer>
        <div class="footer">
            
        </div>
    </footer>

</body>

</html>






<div>