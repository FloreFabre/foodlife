<?php require('databaseUser.php');
 //on appelle notre fichier de config
  $id = null;
 if (!empty($_GET['id'])) { $id = $_REQUEST['id'];
 } if (null == $id) { header("location:crud.php");
 } else { 
    //on lance la connection et la requete
    $pdo = Database ::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) .
    $sql = "SELECT * FROM utilisateur where id =?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
}



/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        	<link rel="stylesheet" href="style.css">
    </head>

    <body>

<br />
<div class="container">


<br />
<div class="span10 offset1">

<br />
<div class="row">

<br />
<h3>Edition</h3>
<p>

</div>
<p>



<br />
<div class="form-horizontal" >

<br />
<div class="control-group">
                        <label class="control-label">nom</label>

<br />

<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['nom']; ?>
                            </label>
</div>
<p>

</div>
<p>


<br />
<div class="control-group">
                        <label class="control-label">pseudo</label>

<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['pseudo']; ?>
                            </label>
</div>
<p>

</div>
<p>


<br />
<div class="control-group">
                        <label class="control-label">Avatar</label>

<br />
<div class="controls">
                            <label class="checkbox">
                                <img src="../../img/<?php echo $data['avatar']; ?>" alt="image" />
                            </label>
                            
</div>
<p>

</div>
<p>


<br />
<div class="post">
                        <label class="control-label">password</label>

<br />
<div class="post-img">
                           <label class="checkbox">
                                <?php echo $data['password']; ?>
                            </label>
</div>
<p>

</div>
<p>



<br />
<div class="form-actions">
                        <a class="btn" href="crudUser.php">Back</a>
</div>
<p>


</div>
<p>


</div>
<p>
<!-- /container -->
    </body>
</html>