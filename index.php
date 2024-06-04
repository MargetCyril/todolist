<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<table id="myTable2">
        <caption> To Do List</caption>
        <thead>
            <td colspan="5">Commande en cours</td>
            <tr>
                <th onclick="sortTable(0)">Client</th>
                <th onclick="sortTable(1)">Commande</th>
                <th onclick="sortTable(2)">date d'entrée</th>
                <th onclick="sortTable(3)">date limite</th>
                <th onclick="sortTable(4)">statut</th>
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
    echo '<td>';
    echo $myJSON["statut"];
    echo '<br>';
    echo '<button type="button" onclick=enregistre()>Enregistré</button> <button type="button" onclick=encours()>En cours</button> <button type="button" onclick=facture()>Facture</button>'; 
    echo '</td>';
    echo '</tr>';
}
fclose($myfile);
?>
</tbody>

<?php
$myfile = fopen("data.json","r");
$myJSON = fread($myfile, filesize("data.json"));
$myJSON = json_decode($myJSON,true);
var_dump ($myJSON);
?>

<!--  numero de commande , bouton,  -->
<script src="script.js"></script>
</body>
</html>