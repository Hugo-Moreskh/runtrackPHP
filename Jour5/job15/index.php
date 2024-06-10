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
$sql = "SELECT nom, id_etage FROM salle";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Récupération des résultats
$salles = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Affichage du résultat dans un tableau HTML
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>nom</th>";
echo "<th>numero etage</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Parcourir les résultats et afficher chaque ligne dans le tableau
foreach ($salles as $salle) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($salle['nom']) . "</td>";
    echo "<td>" . htmlspecialchars($salle['id_etage']) . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>
