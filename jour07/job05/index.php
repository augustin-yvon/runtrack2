<?php
function occurence($str, $char) {
    $counter = 0;
    while (isset($str[$counter])) {
        $counter++;
    }

    $count = 0;
    for ($i = 0; $i < $counter; $i++) {
        if ($char == $str[$i]) {
            $count++;
        }
    }
    return $count;
}

print(occurence('Bonjour', 'o'));print('<br>');
print(occurence("Les fonction système c'est quand même bien pratique", 's'));print('<br>');
?>