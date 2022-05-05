<?php
function connect() {
    $mysqli = new mysqli("localhost", "root", "", "foodlife");
    if ($mysqli->connect_errno) {
        echo "Problème de connexion à la base de données !";
        return false;
    }
    return $mysqli;
};
//connection base de donnée

$mysqli = connect();
session_start();
$errorLoginPass = '';
$errorLogin = '';
$errorMotDePasse = '';

// vérifcation de la methode
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // test si pseudo vide
    if (isset($_POST['pseudo']) && $_POST['pseudo'] == '') {
        $errorLogin = 'Le champs pseudo est vide.<br/>';
    }

    // test si mot de passe vide
    if (isset($_POST['password']) && $_POST['password'] == '') {
        $errorMotDePasse = 'Le champs mot de passe est vide.<br/>';
    }


    if ($errorLogin == '' && $errorMotDePasse == '') { //si je n'ai pas d'erreur je test le login et le mdp

        $passwordHash = hash("sha512", $_POST['password']); // hash le mot de passe
        $pseudo = $_POST['pseudo'];
        //requete qui recupere le user avec le login et mot de passe
        $sql = "SELECT * from utilisateur where pseudo = '$pseudo' and password='$passwordHash';";

        $result = $mysqli->query($sql); // execution de la requete

        if ($mysqli->errno) { // si erreur dans la requete
            var_dump($sql);
            printf("<p class='error'>Un problème est survenue  %s </p><br/>", $mysqli->error);
            $mysqli->close();
            return false;
        }

        $user = $result->fetch_assoc(); // je récupère le resultat
        //si le login et mdp incorrect

        // $res = mysqli_num_rows( $result ); // renvoi le nombre de resultat

        if ($user == null) { // verifie si login ou mdp incorrect
            $errorLoginPass = " pseudo et/ou mot de passe incorrect !";
        } else {
            $_SESSION['id'] =  $user['id'];
            header("Location: ../index.php");
            die();
        }
    }
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="./stylel.css">
</head>

<body>
    <div class="login-container">
        <form action="./login.php" method="post">

            <div class="box-login">
                <div class="row-logo">
                    <img class="logo" src="../img/Foodieland.png" alt="logo" srcset="">
                </div>
                <?php if ($errorLoginPass != '') { ?>
                    <div class="row-error">
                        <?php
                        echo $errorLoginPass;
                        ?>
                    </div>
                <?php } ?>
                <div class="row-login">
                    <label class="label" for="login"> Login :</label>
                    <input type="text" name="pseudo" class="input-text <?php if ($errorLogin != '') echo 'input-error' ?>" value="<?php if (isset($_POST['pseudo'])) echo $_POST['pseudo']; ?>">
                    <?php if ($errorLogin != '') { ?>
                        <div class="row-error">
                            <?php
                            echo $errorLogin;
                            ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="row-login">
                    <label class="label" for="login"> Mot de passe :</label>
                    <input type="password" name="password" class="input-text  ">
                    <?php if ($errorMotDePasse != '') { ?>
                        <div class="row-error">
                            <?php
                            echo $errorMotDePasse;
                            ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="row-submit">
                    <input type="submit" class="" value="Valider">
                </div>
            </div>
        </form>
    </div>
</body>

</html>