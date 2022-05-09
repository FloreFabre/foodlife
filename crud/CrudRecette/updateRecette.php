<?php require 'databaseRecette.php';
$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}
if (null == $id) {
    header("Location: crudRecette.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) { // on initialise nos erreurs
    
    $titreError = null;
    $photoError = null;
    $dateError = null;
    $dureeprepError = null;
    $dureecuiError = null;
    $etape1Error = null;
    $etape2Error = null;
    $etape3Error = null;


   
    $titre = $_POST['titre'];
    $photo = $_POST['photo'];
    $date = $_POST['date'];
    $dureeprep = $_POST['dureeprep'];
    $dureepcui = $_POST['dureecui'];
    $etape1 = $_POST['etape1'];
    $etape2 = $_POST['etape2'];
    $etape3 = $_POST['etape3'];

    $valid = true;
    if (empty($titre)) {
        $titreError = 'Entrer un contenu';
        $valid = false;
    }
    if (empty($photo)) {
        $photoError = 'Entrer un contenu';
        $valid = false;
    }
    if (empty($date)) {
        $dateError = 'Entrer un contenu';
        $valid = false;
    }

    if (empty($dureeprep)) {
        $dureeprepError = 'Entrer un contenu';
        $valid = false;
    }
    if (empty($dureepcui)) {
        $dureecuiError = 'Entrer un contenu';
        $valid = false;
    }
    if (empty($etape1)) {
        $etape1Error = 'Entrer un contenu';
        $valid = false;
    }
    if (empty($etape2)) {
        $etape2Error = 'Entrer un contenu';
        $valid = false;
    }

    if (empty($etape3)) {
        $etape3Error = 'Entrer un contenu';
        $valid = false;
    }

    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE recette SET  titre = ?, photo = ? , date = ?, dureeprep = ?, dureecui = ?,etape1 = ?,etape2 = ?,etape3 = ? WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($titre, $photo, $date, $dureeprep, $dureepcui, $etape1, $etape2, $etape3, $id));
        Database::disconnect();
        header("Location: crudRecette.php");
    }
} else {

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM recette where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $titre = $data['titre'];
    $photo = $data['photo'];
    $date = $data['date'];
    $dureeprep = $data['dureeprep'];
    $dureepcui = $data['dureecui'];
    $etape1 = $data['etape1'];
    $etape2 = $data['etape2'];
    $etape3 = $data['etape3'];

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

    </div>
    <h3 class="titre">Modifier un Post</h3>
    </div>
    <div class="container">

        <form method="post" action="updateRecette.php?id=<?php echo $id; ?>">

            <div class="control-group <?php echo !empty($titreError) ? 'error' : ''; ?>">
                <label class="control-label">Titre</label>

                <div class="controls">
                    <input name="titre" type="text" placeholder="" value="<?php echo !empty($titre) ? $titre : ''; ?>">
                    <?php if (!empty($titreError)) : ?>
                        <span class="help-inline"><?php echo $titreError; ?></span>
                    <?php endif; ?>
                </div>
                <p>

            </div>
            <p>

            <div class="control-group <?php echo !empty($photoError) ? 'error' : ''; ?>">
                <label class="control-label">photo:</label>

                <div class="controls">
                    <input name="photo" type="file" placeholder="" value="<?php echo !empty($photo) ? $photo : ''; ?>">
                    <?php if (!empty($photoError)) : ?>
                        <span class="help-inline"><?php echo $photoError; ?></span>
                    <?php endif; ?>
                </div>
                <p>

            </div>
            <p>

            <div class="control-group <?php echo !empty($dateError) ? 'error' : ''; ?>">
                <label class="control-label">date de la mise a jour:</label>

                <div class="controls">
                    <input name="date" type="date" placeholder="" value="<?php echo !empty($date) ? $date : ''; ?>">
                    <?php if (!empty($dateError)) : ?>
                        <span class="help-inline"><?php echo $dateError; ?></span>
                    <?php endif; ?>
                </div>
                <p>

            </div>
            <p>


            <div class="control-group <?php echo !empty($dureeprepError) ? 'error' : ''; ?>">
                <label class="control-label">duree preparation:</label>


                <div class="controls">
                    <input name="dureeprep" type="text" placeholder="" value="<?php echo !empty($dureeprep) ? $dureeprep : ''; ?>">
                    <?php if (!empty($dureeprepError)) : ?>
                        <span class="help-inline"><?php echo $dureeprepError; ?></span>
                    <?php endif; ?>
                </div>
                <p>

            </div>
            <p>
            <div class="control-group <?php echo !empty($dureecuiError) ? 'error' : ''; ?>">
                <label class="control-label">Duree cuisson</label>

                <div class="controls">
                    <input name="dureecui" type="text" placeholder="" value="<?php echo !empty($dureepcui) ? $dureepcui : ''; ?>">
                    <?php if (!empty($dureecuiError)) : ?>
                        <span class="help-inline"><?php echo $dureecuiError; ?></span>
                    <?php endif; ?>
                </div>
                <p>

            </div>
            <p>

            <div class="control-group <?php echo !empty($etape1Error) ? 'error' : ''; ?>">
                <label class="control-label">etape 1:</label>

                <div class="controls">
                <textarea class="textcont" name="etape1" type="textarea" placeholder="" value="<?php echo !empty($etape1) ? $etape1 : ''; ?>"cols="40" rows="10"></textarea>
                    <?php if (!empty($etape1Error)) : ?>
                        <span class="help-inline"><?php echo $etape1Error; ?></span>
                    <?php endif; ?>
                </div>
                <p>

            </div>
            <p>

            <div class="control-group <?php echo !empty($etape2Error) ? 'error' : ''; ?>">
                <label class="control-label">etape 2:</label>

                <div class="controls">
                <textarea class="textcont" name="etape2" type="textarea" placeholder="" value="<?php echo !empty($etape2) ? $etape2 : ''; ?>"cols="40" rows="10"></textarea>
                    <?php if (!empty($etape2Error)) : ?>
                        <span class="help-inline"><?php echo $etape2Error; ?></span>
                    <?php endif; ?>
                </div>
                <p>

            </div>
            <p>


            <div class="control-group <?php echo !empty($etape3Error) ? 'error' : ''; ?>">
                <label class="control-label">etape 3:</label>


                <div class="controls">
                <textarea class="textcont" name="etape3" type="textarea" placeholder="" value="<?php echo !empty($etape3) ? $etape3 : ''; ?>"cols="40" rows="10"></textarea>
                    <?php if (!empty($etape3Error)) : ?>
                        <span class="help-inline"><?php echo $etape3Error; ?></span>
                    <?php endif; ?>
                </div>
                <p>

            </div>
            <p>



            <div class="form-actions">
                <input type="submit" class="btn btn-success" name="submit" value="submit">
                <a class="btn" href="crudRecette.php">Retour</a>
            </div>
            <p>

        </form>
        <p>



    </div>
    <p>


</body>

</html>