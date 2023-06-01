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

    // Requête SQL pour sélectionner le nom des salles et le nom de leur étage
    $query = "SELECT salles.nom AS nom_salle, etages.nom AS nom_etage FROM salles INNER JOIN etages ON salles.id_etage = etages.id";
    $stmt = $pdo->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage du résultat dans un tableau HTML
    echo '<table style="border-collapse: collapse; padding: 10px; border: 1px solid black;">';
    echo '<thead>';
    echo '<tr style="border-collapse: collapse; padding: 10px; border: 1px solid black;">';
    echo '<th style="border-collapse: collapse; padding: 10px; border: 1px solid black;">Nom de la salle</th>';
    echo '<th style="border-collapse: collapse; padding: 10px; border: 1px solid black;">Nom de l\'étage</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($results as $row) {
        echo '<tr>';
        echo '<td style="border-collapse: collapse; padding: 10px; border: 1px solid black;">' . htmlspecialchars($row['nom_salle']) . '</td>';
        echo '<td style="border-collapse: collapse; padding: 10px; border: 1px solid black;">' . htmlspecialchars($row['nom_etage']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
