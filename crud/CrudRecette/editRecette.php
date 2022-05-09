<?php require('databaseRecette.php');
 //on appelle notre fichier de config
  $id = null;
 if (!empty($_GET['id'])) { $id = $_REQUEST['id'];
 } if (null == $id) { header("location:crud.php");
 } else { 
    //on lance la connection et la requete
    $pdo = Database ::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) .
    $sql = "SELECT * FROM recette where id =?";
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
                        <label class="control-label">titre</label>

<br />

<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['titre']; ?>
                            </label>
</div>
<p>

</div>
<br />
<div class="control-group">
                        <label class="control-label">photo</label>

<br />
<div class="controls">
                            <label class="checkbox">
                                <img src="../../img/<?php echo $data['photo']; ?>" alt="image" />
                            </label>
                            
</div>
<p>

<p>


<br />
<div class="control-group">
                        <label class="control-label">date</label>

<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['date']; ?>
                            </label>
</div>
<p>

</div>
<p>



</div>
<p>


<br />
<div class="post">
                        <label class="control-label">dureeprep</label>

<br />
<div class="post-img">
                           <label class="checkbox">
                                <?php echo $data['dureeprep']; ?>
                            </label>
</div>
<p>

</div>
<p>
<div class="control-group">
                        <label class="control-label">dureecui</label>

<br />

<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['dureecui']; ?>
                            </label>
</div>
<p>

</div>
<p>


<br />
<div class="control-group">
                        <label class="control-label">id_user</label>

<br />
<div class="controls">
                            <label class="checkbox">
                                <?php echo $data['id_user']; ?>
                            </label>
</div>
<p>

</div>
<p>


<br />
<div class="control-group">
                        <label class="control-label">id_categorie</label>

<br />
<div class="controls">
<label class="checkbox">
                                <?php echo $data['id_categorie']; ?>
                            </label>
                            
</div>
<p>

</div>
<p>


<br />
<div class="post">
                        <label class="control-label">etape1</label>

<br />
<div class="post-img">
                           <label class="checkbox">
                                <?php echo $data['etape1']; ?>
                            </label>
</div>
<p>

</div>
<p>
<br />
<div class="post">
                        <label class="control-label">etape2</label>

<br />
<div class="post-img">
                           <label class="checkbox">
                                <?php echo $data['etape2']; ?>
                            </label>
</div>
<p>

</div>
<p>
<br />
<div class="post">
                        <label class="control-label">etape3</label>

<br />
<div class="post-img">
                           <label class="checkbox">
                                <?php echo $data['etape3']; ?>
                            </label>
</div>
<p>

</div>
<p>




<br />
<div class="form-actions">
                        <a class="btn" href="crudRecette.php">Back</a>
</div>
<p>


</div>
<p>


</div>
<p>
<!-- /container -->
    </body>
</html>