<!DOCTYPE html>
<html>
<head>
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table td {
            width: 200px;
            height: 200px;
            text-align: center;
            border: 1px solid black;
            font-size: 50px; 
        }

        .winning-cell {
            background-color: yellow; /* Modifier la couleur selon vos préférences */
        }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>
    <table>
        <?php
        session_start();

        // Réinitialiser la partie
        if (isset($_POST['reset'])) {
            unset($_SESSION['board']);
            unset($_SESSION['currentPlayer']);
        }

        // Initialiser le tableau et le joueur courant
        if (!isset($_SESSION['board'])) {
            $_SESSION['board'] = [
                ["-", "-", "-"],
                ["-", "-", "-"],
                ["-", "-", "-"]
            ];
            $_SESSION['currentPlayer'] = "X";
        }

        // Fonction pour jouer un coup
        function playMove($row, $col) {
            if ($_SESSION['board'][$row][$col] === "-") {
                $_SESSION['board'][$row][$col] = $_SESSION['currentPlayer'];
                $_SESSION['currentPlayer'] = $_SESSION['currentPlayer'] === "X" ? "O" : "X";
            }
        }

        // Vérifier si un joueur a gagné
        function checkWin() {
            $board = $_SESSION['board'];

            // Vérification des lignes
            for ($i = 0; $i < 3; $i++) {
                if ($board[$i][0] !== "-" && $board[$i][0] === $board[$i][1] && $board[$i][1] === $board[$i][2]) {
                    return true;
                }
            }

            // Vérification des colonnes
            for ($i = 0; $i < 3; $i++) {
                if ($board[0][$i] !== "-" && $board[0][$i] === $board[1][$i] && $board[1][$i] === $board[2][$i]) {
                    return true;
                }
            }

            // Vérification des diagonales
            if ($board[0][0] !== "-" && $board[0][0] === $board[1][1] && $board[1][1] === $board[2][2]) {
                return true;
            }
            if ($board[0][2] !== "-" && $board[0][2] === $board[1][1] && $board[1][1] === $board[2][0]) {
                return true;
            }

            return false;
        }

        // Vérifier si la partie est un match nul
        function checkDraw() {
            $board = $_SESSION['board'];

            foreach ($board as $row) {
                foreach ($row as $cell) {
                    if ($cell === "-") {
                        return false;
                    }
                }
            }

            return true;
        }

        // Obtenir l'indice de la ligne gagnante
        function getWinningRow() {
            $board = $_SESSION['board'];

            // Vérification des lignes
            for ($i = 0; $i < 3; $i++) {
                if ($board[$i][0] !== "-" && $board[$i][0] === $board[$i][1] && $board[$i][1] === $board[$i][2]) {
                    return $i;
                }
            }

            return -1; // Aucune ligne gagnante
        }

        // Traitement du coup joué
        if (isset($_POST['row']) && isset($_POST['col'])) {
            $row = $_POST['row'];
            $col = $_POST['col'];
            playMove($row, $col);
        }

        // Vérifier si un joueur a gagné ou s'il y a match nul
        $gameOver = false;
        $winner = "";
        $winningRow = -1; // Indice de la ligne gagnante

        if (checkWin()) {
            $gameOver = true;
            $winner = $_SESSION['currentPlayer'] === "X" ? "O" : "X";
            $winningRow = getWinningRow();
        } elseif (checkDraw()) {
            $gameOver = true;
            $winner = "Match nul";
        }

        // Affichage de la grille
        foreach ($_SESSION['board'] as $rowIndex => $row) {
            echo "<tr>";
            foreach ($row as $colIndex => $cell) {
                echo "<td";
                if ($rowIndex === $winningRow) {
                    echo ' class="winning-cell"';
                }
                echo ">";
                if ($cell === "-") {
                    echo '<form method="post">';
                    echo '<input type="hidden" name="row" value="' . $rowIndex . '">';
                    echo '<input type="hidden" name="col" value="' . $colIndex . '">';
                    echo '<input type="submit" value="-">';
                    echo '</form>';
                } else {
                    echo $cell;
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <form method="post">
        <input type="submit" name="reset" value="Réinitialiser la partie">
    </form>
</body>
</html>
