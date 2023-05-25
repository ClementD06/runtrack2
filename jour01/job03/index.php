<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Définitions des variables
    $booleanVar =  true;
    $integerVar = 32;
    $stringVar = "Je m'apelle Clément";
    $floatVar = 3.14;

    // Création du tableau HTML avec espacement
    echo "<table style='border-collapse: collapse;'>";
    // En-tête du tableau
    echo "<thead>";
    echo "<tr>";
    echo "<th style='padding: 30px 5px;'>Type</th>";
    echo "<th style='padding: 30px 5px;'>Nom</th>";
    echo "<th style='padding: 30px 5px;'>Valeur</th>";
    echo "</tr>";
    echo "</thead>";

    // Corps du tableau
    echo "<tbody>";

    // Ligne pour la variable booleanVar
    echo "<tr>";
    echo "<td style='padding: 20px 5px;'>" . gettype($booleanVar) . "</td>";
    echo "<td style='padding: 20px 5px;'>Variable boolean</td>";
    echo "<td style='padding: 20px 5px;'>" . $booleanVar . "</td>";
    echo "</tr>";

    // Ligne pour la variable integerVar
    echo "<tr>";
    echo "<td style='padding: 20px 5px;'>" . gettype($integerVar) . "</td>";
    echo "<td style='padding: 20px 5px;'>Variable integer</td>";
    echo "<td style='padding: 20px 5px;'>" . $integerVar . "</td>";
    echo "</tr>";

    // Ligne pour la variable stringVar
    echo "<tr>";
    echo "<td style='padding: 20px 5px;'>" . gettype($stringVar) . "</td>";
    echo "<td style='padding: 20px 5px;'>Variable string</td>";
    echo "<td style='padding: 20px 5px;'>" . $stringVar . "</td>";
    echo "</tr>";

    // Ligne pour la variable floatVar
    echo "<tr>";
    echo "<td style='padding: 20px 5px;'>" . gettype($floatVar) . "</td>";
    echo "<td style='padding: 20px 5px;'>Variable float</td>";
    echo "<td style='padding: 20px 5px;'>" . $floatVar . "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    ?>

</body>
</html>