<?php
session_start();

if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];

    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }

    $_SESSION['prenoms'][] = $prenom;
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

echo "Liste des prénoms :<br>";
if (isset($_SESSION['prenoms'])) {
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo $prenom . "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required>
        <input type="submit" value="Ajouter">
    </form>

    <form method="post" action="">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
</body>
</html>