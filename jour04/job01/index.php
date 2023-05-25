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
    if (isset($_GET)) {
        $count = count($_GET);
        echo "Le nombre d'arguments GET envoyé est de : " . $count;
    }
    ?>
    <form action="" method="GET">
    <label for="param1">Nom:</label>
    <input type="text" name="param1" id="param1">
    <br>
    <label for="param2">Prénom:</label>
    <input type="text" name="param2" id="param2">
    <br>
    <input type="submit" value="Envoyer">
    </form>
</body>
</html>





