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
$sql = "SELECT SUM(superficie) AS superficie_totale FROM etage";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Récupération des résultats
$result = $stmt->fetch(PDO::FETCH_ASSOC);


echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>superficie_totale</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td>" . htmlspecialchars($result['superficie_totale']) . "</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";

?>
