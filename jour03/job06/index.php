<?php
$str = "Les choses que l'on possède finissent par nous posséder.";

$length = 0;
while (isset($str[$length])) {
    $length++;
}

$reversedStr = '';
$i = $length - 1;
while ($i >= 0) {
    $reversedStr .= $str[$i];
    $i--;
}

echo $reversedStr;
?>
