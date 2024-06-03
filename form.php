<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

Welcome <?php echo $_POST["client"]; ?>

<?php 
$myJSON = array("client" => $_POST["client"], "commande" => $_POST["commande"], "recu" => $_POST["recu"], "limite" => $_POST["limite"]);
$myJSON = json_encode($myJSON);

$myfile = fopen("data.json", "a") or die("Unable to open file!");
fwrite($myfile, $myJSON. "\n");
fclose($myfile);
?>

</body>
</html>