<?php
session_start();

if (isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']++;
} else {
    $_SESSION['nbvisites'] = 1;
}

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>

    <form method="POST">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
</body>
</html>
