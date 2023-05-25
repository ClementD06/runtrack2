<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$length = 0;
while (isset($str[$length])) {
    $length++;
}

$newStr = '';
$i = 0;
while ($i < $length) {
    if ($i === $length - 1) {
        $newStr .= $str[0]; // Remplace le dernier caractère par le premier
    } else {
        $newStr .= $str[$i + 1]; // Remplace chaque caractère par le suivant
    }

    $i++;
}

echo $newStr;
?>

