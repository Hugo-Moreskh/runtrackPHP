<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau des arguments POST</title>
</head>
<body>
  <h2>Tableau des arguments POST</h2>
  <table>
    <tr>
      <th>Argument</th>
      <th>Valeur</th>
    </tr>
    <?php
    if (count($_POST) > 0) {
        foreach ($_POST as $argument => $valeur) {
            echo "<tr><td>" . $argument . "</td><td>" . $valeur . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='2'>Aucun argument POST trouvé.</td></tr>";
    }
    ?>
  </table>

</body>
</html>
