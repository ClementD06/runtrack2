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

    // Requête SQL pour récupérer le prénom, le nom et la date de naissance des étudiantes de sexe féminin
    $query = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'femme'";
    $stmt = $pdo->query($query);
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage du résultat dans un tableau HTML
    echo '<table style="border-collapse : collapse; border: 1px solid black;">';
    echo '<thead>';
    echo '<tr>';
    echo '<th style="border-collapse : collapse; border: 1px solid black;">Prénom</th>';
    echo '<th style="border-collapse : collapse; border: 1px solid black;">Nom</th>';
    echo '<th style="border-collapse : collapse; border: 1px solid black;">Date de Naissance</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($students as $student) {
        echo '<tr>';
        echo '<td style="border-collapse : collapse; padding : 15px; border: 1px solid black;">' . htmlspecialchars($student['prenom']) . '</td>';
        echo '<td style="border-collapse : collapse; padding : 15px; border: 1px solid black;">' . htmlspecialchars($student['nom']) . '</td>';
        echo '<td style="border-collapse : collapse; padding : 15px; border: 1px solid black;">' . htmlspecialchars($student['naissance']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
