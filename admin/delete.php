<?php
require('database.php');

if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }

    if(!empty($_POST)) 
    {
        $id = checkInput($_POST['submit']);
        $statement = $db->prepare("DELETE FROM livres WHERE id = ?");
        $statement->execute(array($id));
        header("Location: home.php"); 
    }

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>page de suppression</title>
</head>
<body>
        <div class="container admin">
            <div class="row">
                <h1><strong>Supprimer ce livre</strong></h1>
                <br>
                <form class="form" action="delete.php" role="form" method="post">
                    <input type="hidden" name="id" value="<?php echo $reference;?>"/>
                    <p class="alert alert-warning">Etes vous sur de vouloir supprimer ?</p>
                    <div class="form-actions">
                      <button type="submit" name="submit" class="btn btn-warning">Oui</button>
                      <a class="btn btn-default" href="home.php">Non</a>
                    </div>
                </form>
            </div>
        </div>   






              <!--mon js-->
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
