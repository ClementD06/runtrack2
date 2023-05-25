<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($username) && isset($password)) {
        if ($username === "John" && $password === "Rambo") {
            echo "C'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <form action="" method="POST">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Connexion">
    </form>
</body>
</html>
