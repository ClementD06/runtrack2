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
    function leetSpeak($str) {
        $convertedStr = "";
        $i = 0;
        while (isset($str[$i])) {
            $char = $str[$i];
            $convertedChar = $char;
            switch (strtoupper($char)) {
                case 'A':
                    $convertedChar = '4';
                    break;
                case 'B':
                    $convertedChar = '8';
                    break;
                case 'E':
                    $convertedChar = '3';
                    break;
                case 'G':
                    $convertedChar = '6';
                    break;
                case 'L':
                    $convertedChar = '1';
                    break;
                case 'S':
                    $convertedChar = '5';
                    break;
                case 'T':
                    $convertedChar = '7';
                    break;
            }
            $convertedStr .= $convertedChar;
            $i++;
        }
        return $convertedStr;
    }

    // Exemple d'utilisation de la fonction
    $str = "Hello la plateforme";
    $result = leetSpeak($str);
    echo "Leet speak de '".$str."' : ".$result;
    ?>
</body>
</html>