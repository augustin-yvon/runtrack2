<?php
function calcul($nbr, $op, $nbr2) {
    switch ($op) {
        case '+':
            $resultat = $nbr + $nbr2;
            break;
        case '-':
            $resultat = $nbr - $nbr2;
            break;
        case '*':
            $resultat = $nbr * $nbr2;
            break;
        case '/':
            $resultat = $nbr / $nbr2;
            break;
        case '%':
            $resultat = $nbr % $nbr2;
            break;
        default:
            $resultat = "Opérateur invalide";
    }
    
    return $resultat;
}

$nbr = 10;
$op = '+';
$nbr2 = 5;
print(calcul($nbr, $op, $nbr2));

echo '<br>';

$nbr = 2;
$op = '*';
$nbr2 = 4;
print(calcul($nbr, $op, $nbr2));

echo '<br>';

$nbr = 85;
$op = '/';
$nbr2 = 45;
print(calcul($nbr, $op, $nbr2));
?>
