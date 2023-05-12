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
    $str = "Certaines choses changent, et d'autres ne changeront jamais.";
    $premierCaractere = $str[0];
    
    $len = 0;
    while (isset($str[$len])) {
        $len++;
    }

    for ($i = 0; $i < $len - 1; $i++) {
        $str[$i] = $str[$i + 1];
    }
    
    $str[-1] = $premierCaractere;
    
    print($str)
    ?>
</body>
</html>
