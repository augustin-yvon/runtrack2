<?php
    session_start();

    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0;
    }

    $_SESSION['nbvisites']++;

    if (isset($_POST['reset'])) {
        $_SESSION['nbvisites'] = 0;
        header("Location: ".$_SERVER['PHP_SELF']); // Effectue la redirection vers la même page pour éviter l'envoie d'un nouveau formulaire
        // Le compteur retombe à 0 mais est immédiatement mis à 1 car l'utilisateur est rediriger vers la même page donc nbvisite compte une visite
    }

    echo "Nombre de visites : " . $_SESSION['nbvisites'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
</body>
