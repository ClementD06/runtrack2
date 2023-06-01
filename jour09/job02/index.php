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

    // Requête SQL pour récupérer le nom et la capacité de chaque salle
    $query = "SELECT nom, capacite FROM salles";
    $stmt = $pdo->query($query);
    $rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage du résultat dans un tableau HTML
    echo '<table style="border-collapse : collapse; padding: 10px; border: 1px solid black;">';
    echo '<thead>';
    echo '<tr>';
    echo '<th style="border-collapse : collapse; padding: 10px; border: 1px solid black;">';
    echo '<th>Capacité</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($rooms as $room) {
        echo '<tr style="border-collapse : collapse; padding: 10px; border: 1px solid black;">';
        echo '<td style="border-collapse : collapse; padding: 10px; border: 1px solid black;">' . htmlspecialchars($room['nom']) . '</td>';
        echo '<td style="border-collapse : collapse; padding: 10px; border: 1px solid black;">' . htmlspecialchars($room['capacite']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
