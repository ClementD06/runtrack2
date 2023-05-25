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
    if (isset($_GET) && count($_GET) > 0) {
        echo '<table style="border: 1px solid black; border-collapse: collapse;">';
        echo '<tr><th style="border: 1px solid black;">Argument</th><th style="border: 1px solid black;">Valeur</th></tr>';

        foreach ($_GET as $argument => $valeur) {
            echo '<tr>';
            echo '<td style="border: 1px solid black;">' . $argument . '</td>';
            echo '<td style="border: 1px solid black;">' . $valeur . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }
    ?>
    <form action="" method="GET">
    <label for="param1">Nom:</label>
    <input type="text" name="Nom" id="param1">
    <br>
    <label for="param2">Prénom:</label>
    <input type="text" name="Prenom" id="param2">
    <br>
    <input type="submit" value="Envoyer">
    </form>
</body>
</html>