<?php
if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
    $display = 'Votre nom est ' . $_GET['lastname'] . ' et votre prénom est ' . $_GET['firstname'] . '.';
} else {
    $display = 'Vous devez indiquer votre nom et prénom dans la barre d\'adresse';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 1</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 1</h1>
            <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br/>index.php?lastname=Nemare&firstname=Jean</p>
        </div>
        <div>
            <p><?= htmlspecialchars($display) ?></p>
        </div>
    </body>
</html>