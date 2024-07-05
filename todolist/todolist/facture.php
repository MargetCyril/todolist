<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href=form.php>Revenir au formulaire</a>
        <a href=index.php>Aller à la liste atelier</a>
        <a href=facture.php>Aller à la liste facture</a>
    </header>
    
    <div class="container-fluid">
<table id="myTable2" class="table table-striped">
        <thead>
            <td colspan="6" >Commande en cours</td>
            <tr>
            <th onclick="sortTable(0)" class="col-1">Identifiant</th>
                <th onclick="sortTable(1)" class="col-2">Client</th>
                <th onclick="sortTable(2)" class="col-5">Commande</th>
                <th onclick="sortTable(3)" class="col-1">Date d'enregistrement</th>
                <th onclick="sortTable(4)" class="col-1">Date limite</th>
                <th onclick="sortTable(5)" class="col-2">Statut</th>
            </tr>
        </thead>
        <tbody>  
</div>  
<?php

$myfile = fopen("data.json", "r") or die("unable to open file!");
while(!feof($myfile)) {
    $myJSON = fgets($myfile);
    $myJSON = json_decode($myJSON, true);
    $id = $myJSON["identifiant"];
    $myJSON = $myJSON[$id];
    if ($myJSON["statut"] == "facture"){

        $limit = strtotime($myJSON["limite"]);
        $limit = date("Y-m-d", $limit);
        $limit = new DateTimeImmutable($limit);
        $jour = date("Y-m-d");
        $jour = new DateTimeImmutable($jour);
        $date = $jour->diff($limit);
        $diff = $date->format("%R%a");
        if ($diff <= 3) {
           
           echo '<tr class="table-danger">'; 
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
        echo $date->format('%R%a jours');
        echo '<br>';
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
    <button type=submit class="btn btn-primary">valider</button>
    </form>';
        echo '</td>';
        echo '</tr>';
    }
    
        else {
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
            <option id="statut" value="facture">A Facturer</option>
            <option id="statut" value="terminer">Terminer</option>
</select>
<button type=submit class="btn btn-primary">valider</button>
</form>';
    echo '</td>';
    echo '</tr>';
        }
}
}
fclose($myfile);

?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>