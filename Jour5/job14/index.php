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
$sql = "SELECT prenom, nom, naisance FROM etudiant WHERE naisance BETWEEN '1998-01-01' AND '2018-12-31'";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Récupération des résultats
$etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Affichage des résultats dans un tableau HTML
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>prenom</th>";
echo "<th>nom</th>";
echo "<th>naissance</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";


// Affichage des données
foreach ($etudiants as $etudiant) {
  echo "<tr>";
  echo "<td>" . htmlspecialchars($etudiant['prenom']) . "</td>";
  echo "<td>" . htmlspecialchars($etudiant['nom']) . "</td>";
  echo "<td>" . htmlspecialchars($etudiant['naisance']) . "</td>";
  echo "</tr>";
}



echo "</tbody>";
echo "</table>";
?>