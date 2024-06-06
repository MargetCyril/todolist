<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    header>
        <a href=form.html>Revenir au formulaire</a>
        <a href=index.php>Aller à la liste atelier</a>
        <a href=facture.php>Aller à la liste facture</a>
    </header>
    
<table id="myTable2">
        <caption> To Do List</caption>
        <thead>
            <td colspan="6">Commande en cours</td>
            <tr>
                <th onclick="sortTable(0)">numero de commande</th>
                <th onclick="sortTable(1)">Client</th>
                <th onclick="sortTable(2)">Commande</th>
                <th onclick="sortTable(3)">date d'entrée</th>
                <th onclick="sortTable(4)">date limite</th>
                <th onclick="sortTable(5)">statut</th>
            </tr>
        </thead>
        <tbody>    
<?php

$myfile = fopen("data.json", "r") or die("unable to open file!");
while(!feof($myfile)) {
    $myJSON = fgets($myfile);
    $myJSON = json_decode($myJSON, true);
    $id = $myJSON["identifiant"];
    $myJSON = $myJSON[$id];
    if ($myJSON["statut"] == "facture"){

       echo '<tr>'; 
       echo '<td id='.$id.'>';
    echo $id;
    echo '</td>';
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
    echo '<form action="change.php" method="POST">
    <input name="id" type="hidden" value='.$id.' ></input>
    <select name="statut">
            <option id="statut" value="enregistre">Enregistré</option>
            <option id="statut" value="en cours">En Cours</option>
            <option id="statut" value="facture">A Facturé</option>
</select>
<button type=submit>val</button>
</form>';
    echo '</td>';
    echo '</tr>';
}
}
fclose($myfile);

?>



</body>
</html>