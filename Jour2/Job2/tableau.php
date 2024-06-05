<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau des arguments GET</title>
</head>
<body>
  <h2>Tableau des arguments GET</h2>
  <table>
    <tr>
      <th>Argument</th>
      <th>Valeur</th>
    </tr>
    <?php
    if (count($_GET) > 0) {
        foreach ($_GET as $argument => $valeur) {
            echo "<tr><td>" . $argument . "</td><td>" . $valeur . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='2'>Aucun argument GET trouvé.</td></tr>";
    }
    ?>
  </table>

</body>
</html>
