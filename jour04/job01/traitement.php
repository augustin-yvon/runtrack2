<?php
var_dump($_GET);
$count = 0;

foreach ($_GET as $key => $value) {
    if ($value != '') {
        $count++;
    }
}

print("Nombre d'arguments dans \$_GET : " . $count) ;
?>