<?php
session_start();

// Initialisation du cookie si nécessaire
if (!isset($_COOKIE["nbVisites"])) {
    $nbVisites = 0;
    setcookie("nbVisites", $nbVisites); // Durée de vie d'un an
} else {
    $nbVisites = $_COOKIE["nbVisites"];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nbVisites = 0; // Réinitialise le compteur
    } else {
        $nbVisites++; // Incrémente le compteur
    }
    setcookie("nbVisites", $nbVisites); // Met à jour le cookie
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Nombre de visites : <?php echo $nbVisites; ?></h2>
    <form method="post" action="">
        <button type="submit">Reset</button>
    </form>
</body>
</html>
