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
    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

    $voyelles = ["a","e","i","o","u","y","A","E","I","O","U","Y"];
    $consonnes = ["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z","B","C","D","F","G","H","J","K","L","M","N","O","P","Q","R","S","T","V","W","X","Z"];
    
    $len = 0;
    while (isset($str[$len])) {
        $len++;
    }

    $compteur_voyelles = 0;
    $compteur_consonnes = 0;

    for ($i = 0; $i < $len-1; $i++ ) {

        for ($i = 0; $i < $len; $i++ ) {
            $is_voyelle = false;
            foreach($voyelles as $v){
                if($str[$i] == $v){
                    $is_voyelle = true;
                    break;
                }
            }
            if ($is_voyelle) {
                $compteur_voyelles++;
            }
        }

        for ($i = 0; $i < $len-1; $i++ ) {
            $is_consonne = false;
            foreach($consonnes as $c){
                if($str[$i] == $c){
                    $is_consonne = true;
                    break;
                }
            }
            if ($is_consonne) {
                $compteur_consonnes++;
            }
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
