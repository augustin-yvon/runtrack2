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
    $str = "Les choses que l'on possede finissent par nous posseder.";
    $str_reverse = "";

    $len = 0;
    while (isset($str[$len])) {
        $len++;
    }

    for ($i = $len - 1; $i >= 0; $i--) {
        $str_reverse .= $str[$i];
    }

    echo $str_reverse;
    ?>
</body>
</html>
