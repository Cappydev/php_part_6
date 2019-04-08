<?php
if (isset($_GET['age']) && isset($_GET['firstname']) && isset($_GET['lastname'])) {
    $display = 'Bonjour'. $_GET['firstname'] . $_GET['lastname'] . 'Vous avez ' . $_GET['age'] . ' ans.';
} else {
    $display = 'Vous devez indiquer votre âge dans la barre d\'adresse';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 2</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 2</h1>
            <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : <br />index.php?lastName=Nemare&firstName=Jean</p>
        </div>
        <div>
            <p><?= htmlspecialchars($display) ?></p>
        </div>
    </body>
</html>