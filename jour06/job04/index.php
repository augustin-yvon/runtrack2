<?php
if (isset($_POST['connexion'])) {
    $prenom = $_POST['prenom'];
    setcookie('prenom', $prenom, time() + (60 *60 * 24), "/");

    header("Location: ".$_SERVER['PHP_SELF']); // Redirige vers la même page pour la rafraîchir
    exit(); // Termine l'exécution du script
}

if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    echo "Bonjour ".$prenom." !";
    echo "<br>";
    echo '<form method="post" action="">
            <input type="submit" name="deco" value="Déconnexion">
          </form>';
} else {
    echo '<form method="post" action="">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required>
            <input type="submit" name="connexion" value="Connexion">
          </form>';
}

if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600, "/"); // Supprime le cookie en le rendant expiré
    header("Location: ".$_SERVER['PHP_SELF']); // Redirige vers la même page pour la rafraichir
    exit(); // Termine l'exécution du script
}
?>