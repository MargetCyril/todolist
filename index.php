

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>   

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
<script>
    function encours(id) {
        console.log ("ok", id)
    }
    </script> 
<?php

   function encours($id) {
       $myfile = fopen("data.json", "r") or die("unable to open file!");
       while(!feof($myfile)) {
           $myJSON = fgets($myfile);
           $myJSON = json_decode($myJSON, true);
           if ($id === $myJSON["identifiant"]){
               $myJSON = $myJSON[$id];
               $myJSON[5] = "En Cours";
               $myJSON = json_encode($myJSON);
               $memoire = $memoire."/n".$myJSON;
           }
           else {
                $myJSON = json_encode($myJSON);
               $memoire = $memoire."\n".$myJSON;
           }
       }
       fclose($myfile);
       $myfile = fopen("data.json", "w") or die("unable to open file!");
           fwrite($myfile, $memoire);
           fclose($myfile);
           
    }

$myfile = fopen("data.json", "r") or die("unable to open file!");
while(!feof($myfile)) {
    $myJSON = fgets($myfile);
    $myJSON = json_decode($myJSON, true);
    $id = $myJSON["identifiant"];
    $myJSON = $myJSON[$id];
    
/* echo $myJSON;
echo '<br>';
$myJSON = json_decode($myJSON); */
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
    echo '<form action="encours('.$id.')" method="POST">
    <select id=statut>
            <option id="enregistre" value="enregistre">Enregistré</option>
            <option id="encours" value="en cours">En Cours</option>
            <option id="facture" value="facture">A Facturé</option>
</select>
<button type=submit>val</button>';
    /* echo '<button type="button" onclick="enregistre('.$id.')">Enregistré</button>'; 
    echo '<button type="button" onclick="encours('.$id.')">En cours</button>';
    echo '<button type="button" onclick="facture('.$id.')">Facture</button>'; */  
    echo '</td>';
    echo '</tr>';
}
fclose($myfile);

?>


</tbody>


<!--  numero de commande , bouton, -->
<script src="script.js"></script> 
</body>
</html>