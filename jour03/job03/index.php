<?php
$str = "I'm sorry Dave I'm afraid I can't do that";

$vowels = ['a', 'e', 'i', 'o', 'u', 'y']; // Liste des voyelles en minuscules

$i = 0;
while (isset($str[$i])) {
    $char = $str[$i]; // Caractère actuel

    // Vérifier si le caractère est une voyelle (en minuscules)
    if (
        $char === 'A' || $char === 'a' ||
        $char === 'E' || $char === 'e' ||
        $char === 'I' || $char === 'i' ||
        $char === 'O' || $char === 'o' ||
        $char === 'U' || $char === 'u' ||
        $char === 'Y' || $char === 'y'
    ) {
        echo $char;
    }

    $i++;
}
?>
