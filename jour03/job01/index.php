<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $tab = [200, 204, 173, 98, 171, 404, 459];
    foreach ($tab as $nbr) {
        if ($nbr % 2 == 0) {
            print($nbr . ' est pair<br />');
        } else {
            print($nbr . ' est impair<br />');
        }
    }
    ?>
</body>
</html>