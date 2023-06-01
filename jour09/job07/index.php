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

    // Requête SQL pour récupérer la superficie totale des étages
    $query = "SELECT SUM(superficie) AS superficie_totale FROM etages";
    $stmt = $pdo->query($query);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Récupération de la valeur de la superficie et ajout de " m²"
    $superficieTotale = $result['superficie_totale'] . ' m²';

    // Affichage du résultat dans un tableau HTML
    echo '<table style="border-collapse: collapse; border: 1px solid black;">';
    echo '<thead>';
    echo '<tr style="border-collapse: collapse; border: 1px solid black;">';
    echo '<th>Superficie totale</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    echo '<tr>';
    echo '<td>' . htmlspecialchars($superficieTotale) . '</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
