<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait.";

    $voyelle = ["a","e","i","o","u","y"];
    $car_exclue = [" ", ",", ".", "'", ":", "/", "!"];

    $compteur_voyelles = 0;
    $compteur_consonnes = 0;

    for ($i = 0; $i < strlen($str); $i++ ) {
        
        if (in_array(strtolower($str[$i]), $voyelle)) {
            $compteur_voyelles++;

        }elseif (in_array($str[$i], $car_exclue)) {
            continue;

        }else {
            $compteur_consonnes++;
        }
    }

    print
    "<table border='1' style='text-align: center;'>
        <tr>
            <th style='padding: 3px 10px;'>Consonnes</th>
            <th style='padding: 3px 10px;'>Voyelles</th>
        </tr>

        <tr> 
            <td style='padding: 3px 10px;'>$compteur_consonnes</td> 
            <td style='padding: 3px 10px;'>$compteur_voyelles</td> 
        </tr>
    </table>";
    ?>
</body>
</html>