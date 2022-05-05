<?php

function addRecette($mysqli, $post, )
{
    $requete_sql = ( "INSERT INTO `recette` (`id`, `titre`, `photo`, `date`, `dureeprep`, `dureecui`, `id_user`, `id_categorie`, `etape1`, `etape2`, `etape3`)
     VALUES ( 
        NOW(), 
        " . $post['id'] . ", 
         " . $post['titre'] . ", 
         './images/" . $post['image'] . "',
         " . $post['dureeprep'] . ", 
        " . $post['dureecui'] . ", 
        " . $post['id_user'] . ",
        " . $post['id_categorie'] . ", 
        " . $post['etape1'] . ", 
        " . $post['etape2'] . ", 
        " . $post['etape3'] . ",  
;");

    if ($mysqli->query($requete_sql)) {
        printf("<p class='success'>Ajout de la recette effectué avec succès.</p><br />");
        $mysqli->close();
        return true;
    }
    if ($mysqli->errno) {
        var_dump($requete_sql);
        printf("<p class='error'>Un problème est survenue lors de l'ajout de la recette</p><br/>", $mysqli->error);
        $mysqli->close();
        return false;
    }
}


function connect() {
    $mysqli = new mysqli("localhost", "root", "", "foodlife");
    if ($mysqli->connect_errno) {
        echo "Problème de connexion à la base de données !";
        return false;
    }
    return $mysqli;
}

//vérification si l'utilisateur a le role 
function is_granted($id_user, $role, $mysqli)
{
    $sql = "SELECT label FROM role , role_user WHERE id = id_role  AND id_user = $id_user;";
    $res = $mysqli->query($sql);

    while ($row = $res->fetch_assoc()) {
        if ($row['label'] == $role)
            return true;
    }
    return false;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de post & suggestion</title>
    
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>

    <div class="container">
        <div class="box">
            <h2>Formulaire d'ajout de Post

            </h2>
            <?php

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['textPost'])) {
                $mysqli = connect();
                addRecette($mysqli, $_POST, );
            }
            ?>
            <form action="./creationrecette.php" method="POST">
            <div class="element">
                    <label for="pseudo">Titre :</label>
                    <textarea name="titre" id="titre" cols="30" rows="10" required></textarea>
                </div>
                <div class="element">
                    <label for="pseudo">Image :</label>
                    <input type="file" name="photo" id="photo" accept="image/png, image/jpeg" required>
                </div>
                <div class="element">
                    <label for="pseudo">date</label>
                    <textarea name="" id="" cols="30" rows="10" required></textarea>
                </div>
                <div class="element">
                    <label for="pseudo">Durée de la préparation:</label>
                    <textarea name="textPost" id="dureeprep" cols="30" rows="10" required></textarea>
                </div>
                <div class="element">
                    <label for="pseudo">Temps de cuisson:</label>
                    <textarea name="textPost" id="" cols="30" rows="10" required></textarea>
                </div>
                <div class="element">
                    <label for="pseudo">Etape 1 :</label>
                    <textarea name="textPost" id="" cols="30" rows="10" required></textarea>
                </div>
                <div class="element">
                    <label for="pseudo">Etape 2 :</label>
                    <textarea name="textPost" id="" cols="30" rows="10" required></textarea>
                </div>


                <div class="element">
                    <label for="pseudo">Etape 3 :</label>
                    <textarea name="textPost" id="" cols="30" rows="10" required></textarea>
                </div>

                
                <div class="element">
                    <label for="pseudo">Entrer texte :</label>
                    <textarea name="textPost" id="" cols="30" rows="10" required></textarea>
                </div>

                <div class="submit_form">
                    <input type="submit" value="Valider">
                </div>
            </form>

            <form action="http://localhost/foodlife/">
                <input class="home" type="submit" value="Accueil" />
            </form>

        </div>
    </div>
</body>

</html>