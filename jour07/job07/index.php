<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="str">Texte :</label>
        <input type="text" name="str" id="str" required><br>

        <label for="fonction">Fonction :</label>
        <select name="fonction" id="fonction">
            <option value="gras">gras</option>
            <option value="cesar">cesar</option>
            <option value="plateforme">plateforme</option>
        </select><br>

        <input type="submit" name="confirm" value="Confirmer">
    </form>
    <?php
        if (isset($_POST['confirm'])) {
            $str = $_POST['str'];
            $fonction = $_POST['fonction'];
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $str = $_POST['str'];
            $fonction = $_POST['fonction'];
            
            switch ($fonction) {
                case 'gras':
                    $resultat = gras($str);
                    break;
                case 'cesar':
                    $resultat = cesar($str);
                    break;
                case 'plateforme':
                    $resultat = plateforme($str);
                    break;
            }

            echo "Résultat : " . $resultat;
        }
    ?>
</body>
</html>

<?php
function len($str) {
    $len = 0;
    while (isset($str[$len])) {
        $len++;
    }
    return $len;
}

function gras($str) {
    $mot = '';
    $resultat = '';

    for ($i = 0; $i < len($str); $i++) {
        $caractere = $str[$i];

        if ($caractere !== ' ') {
            $mot .= $caractere;
        } elseif ($mot !== '') {
            $premiereLettre = $mot[0];
            if (ord($premiereLettre) >= 65 && ord($premiereLettre) <= 90) {
                $resultat .= "<strong>$mot</strong> ";
            } else {
                $resultat .= "$mot ";
            }
            $mot = '';
        }
    }

    // Traiter le dernier mot
    if ($mot !== '') {
        $premiereLettre = $mot[0];
        if (ord($premiereLettre) >= 65 && ord($premiereLettre) <= 90) {
            $resultat .= "<strong>$mot</strong>";
        } else {
            $resultat .= $mot;
        }
    }

    return $resultat;
}

function cesar($str, $nombre = 2) {
    $resultat = '';

    for ($i = 0; $i < len($str); $i++) {
        $car = $str[$i];

        if ($car >= 'a' && $car <= 'z') {
            $car = chr((((ord($car) - ord('a')) + $nombre) % 26) + ord('a'));
        } elseif ($car >= 'A' && $car <= 'Z') {
            $car = chr((((ord($car) - ord('A')) + $nombre) % 26) + ord('A'));
        }

        $resultat .= $car;
    }

    return $resultat;
}

function plateforme($str) {
    $mot = '';
    $resultat = '';

    for ($i = 0; $i < len($str); $i++) {
        $caractere = $str[$i];

        if ($caractere !== ' ') {
            $mot .= $caractere;
        }
        elseif ($mot !== '') {
            if ($mot[-2] . $mot[-1] == 'me') {
                $mot .= '_';
            }
            $resultat .= "$mot ";
            $mot = '';
        }
    }

    // Traiter le dernier mot
    if ($mot !== '') {
        if ($mot[-2] . $mot[-1] == 'me') {
            $mot .= '_';
        }
        $resultat .= $mot;
    }
    return $resultat;
}
?>