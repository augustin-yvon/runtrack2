<?php
function bonjour($jour) {
    if ($jour) {
        print('Bonjour');
    }else {
        print('Bonsoir');
    }
}

$jour = true;
bonjour($jour);

$jour = false;
bonjour($jour);
?>