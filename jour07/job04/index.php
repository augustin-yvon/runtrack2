<?php
function calcul($nbr, $op, $nbr2) {
    $calc = $nbr . $op . $nbr2;
    eval("\$result = $calc;");
    return $result;
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