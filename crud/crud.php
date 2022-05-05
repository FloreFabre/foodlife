<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Liste des Catégorie</title>
    <link rel="stylesheet" href="../css/crud.css">

</head>

<body>
    <div class="background">

        <div class="container">
            <h2>Liste des Catégorie</h2>
            <a class="bnt btn-new" href="creation.php">Ajouter un Catégorie</a>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <th>ID</th>
                            <p>
                            <th>Titre</th>
                            <p>
                        
                        </thead>

                        <tbody>
                            <?php include 'database.php';
                            $pdo = Database::connect();
                            $sql = 'SELECT * FROM catégorie ORDER BY id ';
                            foreach ($pdo->query($sql) as $row) {
                                echo '<tr>';
                                echo '<td>' . $row['id'] . '</td><p>';
                                echo '<td>' . $row['type'] . '</td><p>';
                               
                                
                                echo '<td>';
                                echo '<a class="btn" href="edit.php?id=' . $row['id'] . '">Lire</a>'; // un autre td pour le bouton d'edition
                                echo '</td><p>';
                                echo '<td>';
                                echo '<a class="btn btn-success" href="update.php?id=' . $row['id'] . '">Editer</a>'; // un autre td pour le bouton d'update
                                echo '</td><p>';
                                echo '<td>';
                                echo '<a class="btn btn-danger" href="delete.php?id=' . $row['id'] . ' ">Supprimer</a>'; // un autre td pour le bouton de suppression
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