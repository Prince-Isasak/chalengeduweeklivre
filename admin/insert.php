
<?php


require('database.php');


  // récupérer les valeurs 
  $titre = $_POST['titre'];
  $description = $_POST['description'];
  $auteur = $_POST['auteur'];
    $date_de_parution = $_POST['date_de_parution'];
    $image = $_POST['image'];


  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `livres`(`titre`, `description`, `auteur`, `date_de_parution`, `image` ) VALUES (:titre,:description,:auteur,:date_de_parution,:image)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":titre"=>$titre,":description"=>$description,":auteur"=>$auteur,":date_de_parution"=>$date_de_parution,":image"=>$image));

  // vérifier si la requête d'insertion a réussi
  if($exec){
   // echo 'Données insérées';
  	header("Location: home.php");
  }else{
    echo "Échec de l'opération d'insertion";
  }




?>
