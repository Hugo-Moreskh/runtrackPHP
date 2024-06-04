<?php

function calcule($n1, $n2, $n3){
switch($n2){
  case '+':
    return $n1 + $n3;
}
}

$resultat= calcule(10, '+', 5);
echo $resultat;
?>