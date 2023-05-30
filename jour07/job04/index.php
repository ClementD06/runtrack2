<?php
// Vérifier si le formulaire a été soumis
if (isset($_POST['connexion'])) {
    $prenom = $_POST['prenom'];
    setcookie('prenom', $prenom, time() + 3600); // Définit le cookie pendant 1 heure
    $estConnecte = true; // Indique que l'utilisateur est connecté
}

// Vérifier si l'utilisateur est déjà connecté
if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    $estConnecte = true;
} else {
    $estConnecte = false;
}

// Traitement de la déconnexion
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); // Supprime le cookie en le définissant avec une date d'expiration passée
    $estConnecte = false;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de connexion</title>
</head>
<body>
    <?php if ($estConnecte) : ?>
        <h1>Bonjour <?php echo $prenom; ?> !</h1>
        <form method="POST">
            <input type="submit" name="deco" value="Déconnexion">
        </form>
    <?php else : ?>
        <?php if (isset($_POST['connexion'])) : ?>
            <h1>Échec de la connexion</h1>
            <p>Veuillez vérifier vos informations de connexion.</p>
        <?php endif; ?>
        <h1>Formulaire de connexion</h1>
        <form method="POST">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required>
            <input type="submit" name="connexion" value="Connexion">
        </form>
    <?php endif; ?>
</body>
</html>
