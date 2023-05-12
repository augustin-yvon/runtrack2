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
    $str = "I'm sorry Dave I'm afraid I can't do that.";
    $voyelle = ["a","e","i","o","u","y","A","E","I","O","U","Y"];

    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }

    for ($i = 0; $i < $count; $i++ ) {
        $is_voyelle = false;
        foreach($voyelle as $v){
            if($str[$i] == $v){
                $is_voyelle = true;
                break;
            }
        }
        if ($is_voyelle) {
            print($str[$i]);
        }
    }
    ?>
</body>
</html>
