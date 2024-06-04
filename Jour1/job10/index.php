<?php
$jour= TRUE;
function bonjour(bool $jour) {
  if ($jour) {
      echo "Bonjour";
  } else {
      echo "Bonsoir";
  }
}
bonjour($jour);
?>