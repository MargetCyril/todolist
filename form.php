<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <a href=form.html>Revenir au formulaire</a>
        <a href=index.php>Aller à la liste atelier</a>
        <a href=facture.php>Aller à la liste facture</a>
    </header>

Commande prise en compte <?php echo $_POST["client"]; ?>

<?php 
$myJSON = array("client" => $_POST["client"], "commande" => $_POST["commande"], "recu" => $_POST["recu"], "limite" => $_POST["limite"], "statut" => "enregistre");
$myJSON = array("identifiant" => $_POST["identifiant"], $_POST["identifiant"] => $myJSON);
$myJSON = json_encode($myJSON);

$myfile = fopen("data.json", "a") or die("Unable to open file!");
fwrite($myfile, "\n");
fwrite($myfile, $myJSON);
fclose($myfile);
?>

</body>
</html>