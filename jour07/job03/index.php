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
    function getHello() {
        return "Hello LaPlateforme!";
    }
    
    // Appel de la fonction et récupération de sa valeur de retour
    $message = getHello();
    
    // Affichage de la valeur de retour
    echo $message;
    ?>
</body>
</html>