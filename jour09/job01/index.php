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

    // Requête SQL pour récupérer les informations de la table étudiants
    $query = "SELECT * FROM etudiants";
    $stmt = $pdo->query($query);
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage du résultat dans un tableau HTML
    echo '<table style="border-collapse : collapse; padding: 10px; border: 1px solid black;">';
    echo '<thead>';
    echo '<tr>';
    foreach ($students[0] as $fieldName => $value) {
        echo '<th style="border-collapse : collapse; padding: 10px; border: 1px solid black;">' . htmlspecialchars($fieldName) . '</th>';
    }
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($students as $student) {
        echo '<tr>';
        foreach ($student as $value) {
            echo '<td style="border-collapse : collapse; padding: 10px; border: 1px solid black;">' . htmlspecialchars($value) . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
