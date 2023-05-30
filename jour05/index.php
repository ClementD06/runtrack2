<!DOCTYPE html>
<html>
<head>
    <title>Formulaire avec styles</title>
    <link id="style-link" rel="stylesheet" type="text/css" href="">
    <style>
        /* Style par défaut du formulaire */
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        
        form {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        h1 {
            margin-top: 0;
        }
        
        select {
            margin-bottom: 10px;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Formulaire avec styles</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="style">Style:</label>
        <select id="style" name="style">
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Valider">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $selectedStyle = $_POST['style'];
        echo '<style>';
        include $selectedStyle . '.css';
        echo '</style>';
    }
    ?>
</body>
</html>
