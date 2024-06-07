<?php
session_start();

// Gestion de la déconnexion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deco'])) {
    setcookie("prenom", ""); // Supprime le cookie
    unset($_COOKIE['prenom']); // Supprime la variable de cookie
    header("Location: " . $_SERVER['PHP_SELF']); // Recharge la page
    exit;
}

// Gestion de la connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['connexion']) && isset($_POST['prenom']) && $_POST['prenom'] !== '') {
    $prenom = $_POST['prenom'];
    setcookie("prenom", $prenom); // Définit le cookie pour un an
    $_COOKIE['prenom'] = $prenom; // Met à jour la variable de cookie
    header("Location: " . $_SERVER['PHP_SELF']); // Recharge la page
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <?php if (isset($_COOKIE['prenom'])): ?>
        <h2>Bonjour <?php echo htmlspecialchars($_COOKIE['prenom']); ?> !</h2>
        <form method="post" action="">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <h2>Connexion</h2>
        <form method="post" action="">
            <input type="text" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
