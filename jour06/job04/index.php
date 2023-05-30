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
    function calcule($nombre1, $operation, $nombre2) {
        switch ($operation) {
            case '+':
                return $nombre1 + $nombre2;
            case '-':
                return $nombre1 - $nombre2;
            case '*':
                return $nombre1 * $nombre2;
            case '/':
                return $nombre1 / $nombre2;
            case '%':
                return $nombre1 % $nombre2;
            default:
                return "Opération non valide";
        }
    }
    
    // Appel de la fonction avec différents paramètres
    $resultat1 = calcule(5, '+', 3);  // Addition: 5 + 3 = 8
    $resultat2 = calcule(10, '*', 4); // Multiplication: 10 * 4 = 40
    $resultat3 = calcule(15, '/', 2); // Division: 15 / 2 = 7.5
    
    // Affichage des résultats
    echo "Résultat 1 : " . $resultat1 . "<br>";
    echo "Résultat 2 : " . $resultat2 . "<br>";
    echo "Résultat 3 : " . $resultat3 . "<br>";
    ?>    
    
</body>
</html>