<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

Commande prise en compte <?php echo $_POST["client"]; ?>

<?php 
$myJSON = array("identifiant" => $_POST["identifiant"], "client" => $_POST["client"], "commande" => $_POST["commande"], "recu" => $_POST["recu"], "limite" => $_POST["limite"], "statut" => "enregistre");
$myJSON = json_encode($myJSON);

$myfile = fopen("data.json", "a") or die("Unable to open file!");
fwrite($myfile, "\n");
fwrite($myfile, $myJSON);
fclose($myfile);
?>


</body>
</html>