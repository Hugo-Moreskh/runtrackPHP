<?php

// Fonction pour créer une liste de produits
function createProducts() {
    return [
        ["name" => "Raquette padel Babolat", "price" => 120, "quantity" => 2],
        ["name" => "Chaussure de padel", "price" => 80, "quantity" => 5],
        ["name" => "Raquette padel BullPadel", "price" => 150, "quantity" => 1],
        ["name" => "Sac BullPadel", "price" => 60, "quantity" => 10],
    ];
}

// Fonction pour appliquer une réduction de 10% sur les produits dont le prix est supérieur à 100€
function applyDiscount(&$product) {
    if ($product["price"] > 100) {
        $product["original_price"] = $product["price"];
        $product["price"] *= 0.90; // Réduction de 10%
        $product["discount"] = 10; // Stocker le pourcentage de réduction
    } else {
        $product["original_price"] = $product["price"];
        $product["discount"] = 0; // Pas de réduction
    }
}

// Fonction pour afficher les produits en HTML
function displayProducts($products) {
    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Prix Original</th><th>Prix Réduit</th><th>Réduction</th><th>Quantité</th></tr>";
    foreach ($products as $product) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($product["name"]) . "</td>";
        echo "<td>" . htmlspecialchars(number_format($product["original_price"], 2)) . " €</td>";
        echo "<td>" . htmlspecialchars(number_format($product["price"], 2)) . " €</td>";
        echo "<td>" . ($product["discount"] > 0 ? htmlspecialchars($product["discount"] . '%') : '-') . "</td>";
        echo "<td>" . htmlspecialchars($product["quantity"]) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
