<?php
$str = "Dans l'espace, personne ne vous entend crier";

$count = 0; // Variable pour compter le nombre de caractères

$i = 0;
while (isset($str[$i])) {
    $count++;
    $i++;
}

echo "Nombre de caractères : " . $count;
?>
