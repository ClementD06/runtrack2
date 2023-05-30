<!DOCTYPE html>
<html>
<head>
    <title>Exemple de fonction en PHP</title>
</head>
    <body>
        <?php
        function bonjour($jour) {
            if ($jour) {
                echo "Bonjour";
            } else {
                echo "Bonsoir";
            }
        }
        
        // Appel de la fonction avec la valeur true
        bonjour(true); // Affiche "Bonjour"
        
        // Appel de la fonction avec la valeur false
        bonjour(false); // Affiche "Bonsoir"        
        ?>
    </body>
</html>