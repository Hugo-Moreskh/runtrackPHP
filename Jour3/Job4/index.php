<!-- Créer un script qui créer un tableau
 et ajouter une liste de produits.
 En fonction du prix de celui-ci, une réduction est appliquée.
 Si un produit a un prix supérieur à 100 € alors une réduction de 10 % est appliquée.
Chaque produit doit avoir un nom, un prix et une quantité.
L’ensemble des produits doivent être affiché sur une page HTML. -->


<?php

session_start();

if(!isset($_SESSION['listeProduit']) ){
  $_SESSION['listeProduit']= [];
}
array_push($_SESSION['listeProduit'], $_POST);




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    Nom: <input type="text" name="nom"><br>
    Prix: <input type="number" name="prix"><br>
    Quantité: <input type="number" name="quantité"><br>
    <input type="submit" value="Envoyer">
  </form>
  <h2>Tableau liste de produits</h2>
  <table>
    <tr>
      <th>Nom:</th>
      <th>Prix:</th>
      <th>Quantité:</th>
      <th>Total:</th>
    </tr>
<?php
 foreach ($_SESSION['listeProduit'] as $value) {
  $total= $value['prix'] * $value['quantité'];
  if ($total>100){
    $total= $total * 0.9;
  }
  echo "<tr>";
  echo "<td>" . htmlspecialchars($value['nom']) . "</td>";
  echo "<td>" . htmlspecialchars($value['prix']) . "</td>";
  echo "<td>" . htmlspecialchars($value['quantité']) . "</td>";
  echo "<td>" . htmlspecialchars($total) . "</td>";
  echo "</tr>";
}
?>
</body>
</html>