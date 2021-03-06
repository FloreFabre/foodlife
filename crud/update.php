<?php require 'database.php';
$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}
if (null == $id) {
    header("Location: crud.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) { // on initialise nos erreurs
    $titreError = null;
   

    $titre = $_POST['type'];
  

    $valid = true;
    if (empty($titre)) {
        $titreError = 'Entrer une catégorie';
        $valid = false;
    }
   

    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE catégorie SET type = ? WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($titre, $id));
        Database::disconnect();
        header("Location: crud.php");
    }
} else {

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM catégorie where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $titre = $data['type'];

    Database::disconnect();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Crud-Update</title>
    <link rel="stylesheet" href="../style.css">

</head>

<body>


<div>
            <h3 class="titre" >Modifier un Post</h3>
        </div>
    <div class="container">

        <form method="post" action="update.php?id=<?php echo $id; ?>">

            <div class="control-group <?php echo !empty($titreError) ? 'error' : ''; ?>">
                <label class="control-label">Name</label>

                <div class="controls">
                    <input name="type" type="text" placeholder="" value="<?php echo !empty($titre) ? $titre : ''; ?>">
                    <?php if (!empty($titreError)) : ?>
                        <span class="help-inline"><?php echo $titreError; ?></span>
                    <?php endif; ?>
                </div>
                <p>

            </div>



            <div class="form-actions">
                <input type="submit" class="btn btn-success" name="submit" value="submit">
                <a class="btn" href="crud.php">Retour</a>
            </div>
            <p>

        </form>
        <p>



    </div>
    <p>


</body>

</html>