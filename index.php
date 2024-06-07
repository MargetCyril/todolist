

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>   
<header>
        <a href=form.php>Revenir au formulaire</a>
        <a href=index.php>Aller à la liste atelier</a>
        <a href=facture.php>Aller à la liste facture</a>
    </header>

<table id="myTable2">
        <caption> To Do List</caption>
        <thead>
            <td colspan="6">Commande en cours</td>
            <tr>
                <th onclick="sortTable(0)">Identifiant</th>
                <th onclick="sortTable(1)">Client</th>
                <th onclick="sortTable(2)">Commande</th>
                <th onclick="sortTable(3)">Date d'enregistrement</th>
                <th onclick="sortTable(4)">Date limite</th>
                <th onclick="sortTable(5)">Statut</th>
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
    if ($myJSON["statut"] !== "facture"){

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
            <option id="statut" value="terminer">Terminer</option>
</select>
<button type=submit>val</button>
</form>';
    echo '</td>';
    echo '</tr>';
}
}
fclose($myfile);

?>


</tbody>

<script src="script.js"></script> 
</body>
</html>