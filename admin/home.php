
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Ma page d'Admin</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand myfont" href="#">Mylibrairie</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="content-panel">
        <div class="d-flex">
          <div>
          <h1>MES LIVRES</h1>
          </div>
          <div>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Ajouter
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un livre</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="insert.php">
         <div class="modal-body">
      
            <div class="mb-3">
              <label for="titre" class="form-label">Titre</label>
              <input type="text" class="form-control" id="titre" name="titre" required="#">
            </div>
            <div class="mb-3">
              <label for="text" class="form-label">Description</label>
              <input type="text" class="form-control" id="description" name="description" required="#">
            </div>
            <div class="mb-3">
              <label for="text" class="form-label">Auteur</label>
              <input type="text" class="form-control" id="auteur" name="auteur" required="#">
            </div>
             <div class="mb-3">
              <label for="date" class="form-label">Date_de_parution</label>
              <input type="date" class="form-control" id="date_de_parution" name="date_de_parution" required="#">
            </div>
             <div class="form-group">
                <label for="image">Sélectionner une image:</label>
                <input type="file" id="image" name="image">
             </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="return">Retour</button>
        <button type="submit" class="btn btn-primary" name="insert">Ajouter</button>
      </div>
    </form>
    </div>
  </div>
</div>
          </div>
        </div>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
          <th>ID</th>
        <th>TITRE</th>
        <th>DESCRIPTION</th>
        <th>AUTEUR</th>
        <th>DATE_DE_PARUTION</th>
        <th>IMAGES DU LIVRE</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      <?php
     require('database.php');


  $results = $pdo->query('SELECT * FROM livres');

   $i=1;
  while ($row = $results->fetch()) 
  {
    echo "<tr>";
      
        echo "<td>$i</td>";
        echo "<td>$row[titre]</td>";
        echo "<td>$row[description]</td>";
        echo "<td>$row[auteur]</td>";
        echo "<td>$row[date_de_parution]</td>";
        echo "<td>$row[image]</td>";
        echo "<td width=300>";
       echo ' ';
       echo '<a class="btn btn-primary"  href="update.php?id=' . $row['id'] . '">MODIFIER</a>';
       echo ' ';
       echo '<a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '">SUPPRIMER</a>';
       echo '</td>';
       echo '</tr>';
  }

?>
      
    </tbody>
  </table>
  

</div>
  


      <!--mon js-->
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>

