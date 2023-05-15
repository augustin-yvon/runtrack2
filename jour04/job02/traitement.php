<?php
var_dump($_GET);

print 
"<table border = 1>
    <tr>
        <th style='padding: 3px 10px;'>Argument</th>
        <th style='padding: 3px 10px;'>Valeur</th>
    </tr>";

foreach ($_GET as $key => $value) {
    print '<tr>';
    
    if (isset($key) && isset($value)) {
        print 
           "<td style='padding: 3px 10px;'>$key</td>
            <td style='padding: 3px 10px;'>$value</td>";
    }
    print '</tr>';
}
print '</table>';
?>