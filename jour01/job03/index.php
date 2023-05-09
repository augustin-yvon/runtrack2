<?php
$myBool = true;
$myInt = 42;
$myString = "Hello World";
$myFloat = 3.14;

// Création du tableau HTML
echo "<table border='1'>
      <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
      </tr>";

// Ajout des variables et de leurs informations dans le corps du tableau
echo "<tr> <td>booléen</td> <td>myBool</td> <td>$myBool</td> </tr>";
echo "<tr> <td>entier</td> <td>myInt</td> <td>$myInt</td> </tr>";
echo "<tr> <td>chaîne de caractères</td> <td>myString</td> <td>$myString</td> </tr>";
echo "<tr> <td>nombre à virgule flottante</td> <td>myFloat</td> <td>$myFloat</td> </tr>";

// Fermeture du tableau HTML
echo "</table>";
?>
