
<?php
require('database.php');




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>page de Modification</title>
</head>
<body>
<div class="container admin">
            <div class="row">
            <h1><strong>Modifier un Livre</strong></h1>
                    <br>
               <div class="col-sm-6">
               <form class="form" action="<?php echo 'update.php?id='.$id;?>" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="titre" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="titre" name="titre" required="#">
                        </div>
                        <div class="form-group">
                            <label for="text" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description" required="#">
                        </div>    
                        <div class="form-group">
                            <label for="text" class="form-label">Auteur</label>
                            <input type="text" class="form-control" id="auteur" name="auteur" required="#">
                        </div>  
                    <div class="form-group">
                            <label for="date" class="form-label">Date_de_parution</label>
                            <input type="date" class="form-control" id="date_de_parution" name="date_de_parution" required="#">
                        </div>   
                    <div class="form-group">
                        <label for="image">Sélectionner une image:</label>
                        <input type="file" id="image" name="image">
                    </div>
                        <br>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Modifier</button>
                            <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                       </div>
                    </form>
                </div>
            </div>
        </div>   



              <!--mon js-->
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
