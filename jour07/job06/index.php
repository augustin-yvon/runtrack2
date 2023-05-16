<?php
function leetSpeak($str) {
    $len = 0;
    while (isset($str[$len])) {
        $len++;
    }

    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] == 'a' or $str[$i] == 'A') {
            $str[$i] = '4';

        }else if ($str[$i] == 'b' or $str[$i] == 'B') {
            $str[$i] = '8';

        }else if ($str[$i] == 'e' or $str[$i] == 'E') {
            $str[$i] = '3';
            
        }else if ($str[$i] == 'g' or $str[$i] == 'G') {
            $str[$i] = '6';
            
        }else if ($str[$i] == 'l' or $str[$i] == 'L') {
            $str[$i] = '1';
            
        }else if ($str[$i] == 's' or $str[$i] == 'S') {
            $str[$i] = '5';
            
        }else if ($str[$i] == 't' or $str[$i] == 'T') {
            $str[$i] = '7';
            
        }else {
            continue;
        }
    }

    return $str;
}
$str = "J'ai pas l'habitude de faire ça";
print(leetSpeak($str));
?>