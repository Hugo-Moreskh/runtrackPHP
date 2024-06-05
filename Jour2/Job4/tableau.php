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
foreach ($_POST as $argument => $valeur) {
              echo "<tr><td>" . $argument . "</td><td>" . $valeur . "</td></tr>";
        }
    
    ?>
  </table>

</body>
</html>
