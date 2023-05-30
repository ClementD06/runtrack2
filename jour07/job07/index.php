<?php
function mettreEnGras($str) {
    $mots = explode(" ", $str);
    $result = "";
    foreach ($mots as $mot) {
        if (isset($mot[0]) && ctype_upper($mot[0])) {
            $result .= "<strong>".$mot."</strong> ";
        } else {
            $result .= $mot." ";
        }
    }
    return $result;
}

function decalageCesar($str, $decalage = 2) {
    $result = "";
    $length = isset($str) ? strlen($str) : 0;
    for ($i = 0; $i < $length; $i++) {
        $char = isset($str[$i]) ? $str[$i] : "";
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $ascii += $decalage;
            if (ctype_upper($char)) {
                $ascii = ($ascii - 65) % 26 + 65;
            } else {
                $ascii = ($ascii - 97) % 26 + 97;
            }
            $char = chr($ascii);
        }
        $result .= $char;
    }
    return $result;
}

function ajouterUnderscore($str) {
    $mots = explode(" ", $str);
    $result = "";
    foreach ($mots as $mot) {
        if (isset($mot[strlen($mot) - 2]) && $mot[strlen($mot) - 2] === "m" && $mot[strlen($mot) - 1] === "e") {
            $result .= $mot."_ ";
        } else {
            $result .= $mot." ";
        }
    }
    return $result;
}

if (isset($_POST['submit'])) {
    $str = isset($_POST['str']) ? $_POST['str'] : "";
    $fonction = isset($_POST['fonction']) ? $_POST['fonction'] : "";

    switch ($fonction) {
        case 'gras':
            $resultat = mettreEnGras($str);
            break;
        case 'cesar':
            $resultat = decalageCesar($str);
            break;
        case 'plateforme':
            $resultat = ajouterUnderscore($str);
            break;
        default:
            $resultat = $str;
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire avec transformations</title>
</head>
<body>
    <form method="POST">
        <label for="str">Chaine de caractères :</label>
        <input type="text" name="str" id="str" required>
        <br>
        <label for="fonction">Choix de la transformation :</label>
        <select name="fonction" id="fonction" required>
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Valider">
    </form>

    <?php
    if (isset($resultat)) {
        echo "<p>Résultat : ".$resultat."</p>";
    }
    ?>
</body>
</html>
``
