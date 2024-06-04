<?php
$str= "Bonjour";
$char="o";
function occurences($str, $char){
for($i=0; isset($str[$i]) ; $i++){
  if ($str[$i]===$char){
    $occChar++;
  }
};
echo ("Le nombre de d'occurences du caractère char dans str est de " . $occChar);
};
occurences($str, $char);

