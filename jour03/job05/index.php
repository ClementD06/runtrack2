<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    "consonnes" => 0,
    "voyelles" => 0
];

$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

$i = 0;
while (isset($str[$i])) {
    $char = $str[$i];

    if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
        $isVoyelle = false;

        foreach ($voyelles as $voyelle) {
            if ($char === $voyelle) {
                $isVoyelle = true;
                break;
            }
        }

        if ($isVoyelle) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }

    $i++;
}

echo "<table>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr></tbody>";
echo "</table>";
?>
