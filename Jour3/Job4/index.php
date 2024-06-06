<?php
include 'functions.php';

// Création de la liste des produits
$products = createProducts();

// Application des réductions sur les produits
foreach ($products as &$product) {
    applyDiscount($product);
}

// Affichage des produits
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Produits</title>
</head>
<body>
    <h1>Liste des Produits</h1>
    <?php displayProducts($products); ?>
</body>
</html>
