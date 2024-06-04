<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<table>
        <caption> To Do List</caption>
        <thead>
            <td colspan="5">Commande en cours</td>
            <tr>
                <th>Client</th>
                <th>Commande</th>
                <th>date d'entrée</th>
                <th>date limite</th>
                <th>statut</th>
            </tr>
        </thead>
        <tbody>    

<?php

$myfile = fopen("data.json", "r") or die("unable to open file!");
while(!feof($myfile)) {
    $myJSON = fgets($myfile);
    $myJSON = json_decode($myJSON, true);
/* echo $myJSON;
echo '<br>'; */
    echo '<tr>';
    echo '<td>';
    echo $myJSON["client"];
    echo '</td>';
    echo '<td>';
    echo $myJSON["commande"];
    echo '</td>';
    echo '<td>';
    echo $myJSON["recu"];
    echo '</td>';
    echo '<td>';
    echo $myJSON["limite"];
    echo '</td>';
    echo '</tr>';

}
fclose($myfile);
?>
</tbody>

</body>
</html>