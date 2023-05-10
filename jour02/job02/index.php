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
    $excluded_numbers = array(26, 37, 88, 1111, 3233);
    
    for ($i=0; $i<=1337; $i++){
      if (!in_array($i, $excluded_numbers)) {
        echo $i . "<br>";
      }
    } 
  ?>
</body><br>
</html>