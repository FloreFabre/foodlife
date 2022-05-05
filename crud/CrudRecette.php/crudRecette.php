<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Liste des Utilisateur</title>
    <link rel="stylesheet" href="../../css/crud.css">

</head>

<body>
    <div class="background">

        <div class="container">
            <h2>Liste des Utilisateur</h2>
            <a class="bnt btn-new" href="creationRecette.php">Ajouter une Recette</a>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <th>ID</th>
                            <p>
                            <th>titre</th>
                            <p>
                                <th>photo</th>
                            <p>
                                <th>date</th>
                            <p>
                                <th>dureeprep</th>
                            <p>
                                <th>dureecui</th>
                            <p>
                                <th>id_user</th>
                            <p>
                                <th>id_categorie</th>
                            <p>
                                <th>etape1</th>
                            <p>
                                <th>etape2</th>
                            <p>
                                <th>etape3</th>
                            <p>
                        </thead>

                        <tbody>
                            <?php include 'databaseRecette.php';
                            $pdo = Database::connect();
                            $sql = 'SELECT * FROM recette ORDER BY id ';
                            foreach ($pdo->query($sql) as $row) {
                                echo '<tr>';
                                echo '<td>' . $row['id'] . '</td><p>'; 
                                echo '<td>' . $row['titre'] . '</td><p>';
                                echo '<td><img src="../../img/'  . $row['photo'] .'" > </td><p>';
                                echo '<td>' . $row['date'] . '</td><p>';
                                echo '<td>' . $row['dureeprep'] . '</td><p>';
                                echo '<td>' . $row['dureecui'] . '</td><p>';
                                echo '<td>' . $row['id_user'] . '</td><p>';
                                echo '<td>' . $row['id_categorie'] . '</td><p>';
                                echo '<td>' . $row['etape1'] . '</td><p>';
                                echo '<td>' . $row['etape2'] . '</td><p>';
                                echo '<td>' . $row['etape3'] . '</td><p>';
                              
                                                             
                                echo '<td>';
                                echo '<a class="btn" href="editRecette.php?id=' . $row['id'] . '">Lire</a>'; // un autre td pour le bouton d'edition
                                echo '</td><p>';
                                echo '<td>';
                                echo '<a class="btn btn-success" href="updateRecette.php?id=' . $row['id'] . '">Editer</a>'; // un autre td pour le bouton d'update
                                echo '</td><p>';
                                echo '<td>';
                                echo '<a class="btn btn-danger" href="deleteRecette.php?id=' . $row['id'] . ' ">Supprimer</a>'; // un autre td pour le bouton de suppression
                                echo '</td><p>';
                                
                                echo '</tr><p>';
                            }
                            Database::disconnect(); //on se deconnecte de la base

                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
  
</body>

</html>