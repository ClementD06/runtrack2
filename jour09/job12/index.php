<?php
// Informations de connexion à la base de données
$host = 'localhost';
$dbname = 'jour09';
$username = 'root';
$password = 'Choupimolly8490.';

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour sélectionner le prénom, le nom et la date de naissance des étudiants nés entre 1998 et 2018
    $query = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
    $stmt = $pdo->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage du résultat dans un tableau HTML
    echo '<table style="border-collapse: collapse; padding: 10px; border: 1px solid black;">';
    echo '<thead>';
    echo '<tr>';
    echo '<th style="border-collapse: collapse; padding: 10px; border: 1px solid black;">Prénom</th>';
    echo '<th style="border-collapse: collapse; padding: 10px; border: 1px solid black;">Nom</th>';
    echo '<th style="border-collapse: collapse; padding: 10px; border: 1px solid black;">Date de naissance</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($results as $row) {
        echo '<tr>';
        echo '<td style="border-collapse: collapse; padding: 10px; border: 1px solid black;">' . htmlspecialchars($row['prenom']) . '</td>';
        echo '<td style="border-collapse: collapse; padding: 10px; border: 1px solid black;">' . htmlspecialchars($row['nom']) . '</td>';
        echo '<td style="border-collapse: collapse; padding: 10px; border: 1px solid black;">' . htmlspecialchars($row['naissance']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
