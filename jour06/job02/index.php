<?php
    if (isset($_COOKIE['nbvisites'])) {
        $nbVisites = $_COOKIE['nbvisites'];
    } else {
        $nbVisites = 0;
    }

    if (isset($_POST['reset'])) {
        setcookie('nbvisites', 0, time() - 3600);
        $nbVisites = 0;
        header("Location: ".$_SERVER['PHP_SELF']); // Effectue la redirection vers la même page pour éviter l'envoie d'un nouveau formulaire
        // Le compteur retombe à 0 mais est immédiatement mis à 1 car l'utilisateur est rediriger vers la même page donc nbvisite compte une visite
    } else {
        $nbVisites++;
        setcookie('nbvisites', $nbVisites, time() + 3600);
    }

    echo "Nombre de visites : " . $nbVisites;
?>

<!DOCTYPE html>
<html>
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
</html>