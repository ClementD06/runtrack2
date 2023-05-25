<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation du nombre</title>
</head>
<body>
    <form action="" method="GET">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <input type="submit" value="Valider">
    </form>

    <?php
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];

        if (is_numeric($nombre)) {
            if ($nombre % 2 == 0) {
                echo "Nombre pair";
            } else {
                echo "Nombre impair";
            }
        } else {
            echo "Veuillez entrer un nombre valide.";
        }
    }
    ?>
</body>
</html>
