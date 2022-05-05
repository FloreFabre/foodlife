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
            <a href="../Crud/crud.php">Retour a la liste</a>

        </div>
    </header>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<p><span>Nouveau Post Publié</span></p>";
    ?>
       
        </div>
        <?php
       


        $requete = ("INSERT INTO `catégorie`(`type`) VALUES 
        ('" . $_POST['type'] . "')") ;
        $resultat = $bdd->query($requete);
        if ($resultat) {
            echo "<span>La catégorie a bien étè ajouter</span>";
        } else {
            echo "<span>La catégorie n'a pas étais ajouter</span>";
        }

        ?>
    <?php

    } else {

    ?>
        <div class="forms">
            <form class="myform" action="./creation.php" method="POST">

                <p><label for="nom"> Nom :</label> <br> <input type="text" name="type" id=""></p>
               

                <p><input type="submit" value="Ajouter cet catégorie"></p>

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