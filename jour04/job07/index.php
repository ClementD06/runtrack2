<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de la maison</title>
    <style>
        pre {
            font-family: monospace;
            white-space: pre;
            line-height: 1;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="largeur">Largeur:</label>
        <input type="text" name="largeur" id="largeur">
        <br>
        <label for="hauteur">Hauteur:</label>
        <input type="text" name="hauteur" id="hauteur">
        <br>
        <input type="submit" value="Afficher la maison">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
            $largeur = $_POST['largeur'];
            $hauteur = $_POST['hauteur'];

            if (is_numeric($largeur) && is_numeric($hauteur)) {
                echo '<pre>';
                // Affichage du toit
                echo str_repeat(" ", $largeur - 1) . "   /\\\n";
                echo str_repeat(" ", $largeur - 1) . "  /  \\\n";
                echo str_repeat(" ", $largeur - 1) . " /____\\\n";
                echo str_repeat(" ", $largeur - 1) . "/______\\\n";

                // Affichage du corps de la maison
                for ($i = 1; $i <= $hauteur - 1; $i++) {
                    echo str_repeat(" ", $largeur - 5) . "|\n";
                }

                // Affichage du sol de la maison
                echo str_repeat(" ", $largeur - 2) . "|\n";
                echo str_repeat("_", $largeur * 0.5) . "|\n";
                

                echo '</pre>';
            } else {
                echo "Veuillez entrer des valeurs numériques valides pour la largeur et la hauteur.";
            }
        }
    }
    ?>
</body>
</html>
