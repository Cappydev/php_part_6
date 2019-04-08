<?php
if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
    $display = 'Date de début "' . $_GET['startDate'] . '" et date de fin "' . $_GET['endDate'] . '".';
} else {
    $display = 'Il y une erreur dans les paramètres';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 3</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 3</h1>
            <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br /> index.php?startDate=2/05/2016&endDate=27/11/2016</p>
        </div>
        <div>
            <p><?= htmlspecialchars($display) ?></p>
        </div>
    </body>
</html>