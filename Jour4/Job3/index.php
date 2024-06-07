<?php

session_start();
// Initialiser la liste des prénoms dans la session si elle n'existe pas
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Ajouter un prénom à la liste si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['prenom']) && $_POST['prenom'] !== '') {
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

// Réinitialiser la liste des prénoms si le bouton "reset" est cliqué
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de Prénoms</title>
</head>
<body>
    <h2>Ajouter un Prénom</h2>
    <form method="post" action="">
        <input type="text" name="prenom" required>
        <button type="submit">Ajouter</button>
    </form>

    <h2>Liste des Prénoms</h2>
    <?php
    if (!empty($_SESSION['prenoms'])) {
        echo '<ul>';
        foreach ($_SESSION['prenoms'] as $prenom) {
            echo '<li>' . $prenom . '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>Aucun prénom ajouté.</p>';
    }
    ?>

    <form method="post" action="">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
