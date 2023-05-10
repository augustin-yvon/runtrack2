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
    for ($i = 2; $i <= 1000; $i++) {
        $est_premier = true;

        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $est_premier = false;
                break;
            }
        }
        
        if ($est_premier) {
            echo $i . "<br />";
        }
    }
    ?>
</body>
</html>