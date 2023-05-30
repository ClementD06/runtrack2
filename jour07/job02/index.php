<?php
if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 1;
}

setcookie('nbvisites', $nbvisites, time() + 3600); // Définit le cookie pendant 1 heure

if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() - 3600); // Supprime le cookie en le définissant avec une date d'expiration passée
    $nbvisites = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    <p>Nombre de visites : <?php echo $nbvisites; ?></p>

    <form method="POST">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
</body>
</html>
