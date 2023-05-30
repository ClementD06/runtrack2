<?php
session_start();

// Vérifier si la variable de session "prenoms" existe
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = array(); // Initialiser la variable de session avec un tableau vide
}

// Traitement du formulaire
if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    $_SESSION['prenoms'][] = $prenom; // Ajouter le prénom à la variable de session
}

// Réinitialisation de la liste des prénoms
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = array(); // Réinitialiser la variable de session avec un tableau vide
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion des prénoms</title>
</head>
<body>
    <h1>Gestion des prénoms</h1>

    <!-- Affichage des prénoms -->
    <h2>Liste des prénoms :</h2>
    <ul>
        <?php foreach ($_SESSION['prenoms'] as $prenom) : ?>
            <li><?php echo $prenom; ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Formulaire d'ajout de prénom -->
    <form method="POST">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required>
        <input type="submit" value="Ajouter">
    </form>

    <!-- Bouton de réinitialisation -->
    <form method="POST">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
</body>
</html>
