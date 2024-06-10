<?php
// Configuration de la connexion à la base de données
$host = 'localhost';
$dbname = 'jour05';
$username = 'root';
$password = '';

// Connexion à la base de données avec PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Préparation de la requête SQL pour récupérer les données
$sql = "SELECT * FROM salle ORDER BY salle . capacite ASC";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Récupération des résultats
$salles = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Affichage des résultats dans un tableau HTML
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";

// Affichage des noms des colonnes
if (!empty($salles)) {
    foreach ($salles[0] as $colonne => $valeur) {
        echo "<th>$colonne</th>";
    }
}

echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Affichage des données
foreach ($salles as $salle) {
    echo "<tr>";
    foreach ($salle as $valeur) {
        echo "<td>$valeur</td>";
    }
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>
