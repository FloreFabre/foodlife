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
            <a class="bnt btn-new" href="creationUser.php">Ajouter un Utilisateur</a>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <th>ID</th>
                            <p>
                            <th>avatar</th>
                            <p>
                                <th>nom</th>
                            <p>
                                <th>pseudo</th>
                            <p>
                                <th>password</th>
                            <p>
                        </thead>

                        <tbody>
                            <?php include 'databaseUser.php';
                            $pdo = Database::connect();
                            $sql = 'SELECT * FROM utilisateur ORDER BY id ';
                            foreach ($pdo->query($sql) as $row) {
                                echo '<tr>';
                                echo '<td>' . $row['id'] . '</td><p>'; 
                                echo '<td><img src="../../img/'  . $row['avatar'] .'" > </td><p>';
                                echo '<td>' . $row['nom'] . '</td><p>';
                                echo '<td>' . $row['pseudo'] . '</td><p>';
                                echo '<td>' . $row['password'] . '</td><p>';
                              
                                                             
                                echo '<td>';
                                echo '<a class="btn" href="editUser.php?id=' . $row['id'] . '">Lire</a>'; // un autre td pour le bouton d'edition
                                echo '</td><p>';
                                echo '<td>';
                                echo '<a class="btn btn-success" href="updateUser.php?id=' . $row['id'] . '">Editer</a>'; // un autre td pour le bouton d'update
                                echo '</td><p>';
                                echo '<td>';
                                echo '<a class="btn btn-danger" href="deleteUser.php?id=' . $row['id'] . ' ">Supprimer</a>'; // un autre td pour le bouton de suppression
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