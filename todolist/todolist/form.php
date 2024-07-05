<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>
<body>
<div class="container-fluid">
<?php 
if ($_SERVER["REQUEST_METHOD"] =="POST") {
    $clientERR = $commandeERR = $recuERR = $limiteERR = $identifiantERR = "";
    $client = $commande = $recu = $limite = $identifiant = "";
    
    if (empty($_POST["identifiant"])) {
    $identifiantERR = "identifiant requis";
    }
    else {
       $identifiant = test_input($_POST["identifiant"]); 
    }
    
    if (empty($_POST["client"])) {
        $clientERR = "client requis";
        }
        else {
            $client = test_input($_POST["client"]);
        }

    if (empty($_POST["commande"])) {
        $commandeERR = "commande requise";
        }
        else {
            $commande = test_input($_POST["commande"]);
        }

    if (empty($_POST["recu"])) {
        $recuERR = "date d'enregistrement requise";
        }
        else {
            $recu = test_input($_POST["recu"]);
        }

    if (empty($_POST["limite"])) {
        $limiteERR = "date limite requise";
        }
        else {
           $limite = test_input($_POST["limite"]);
        }

$myJSON = array("client" => $client, "commande" => $commande, "recu" => $recu, "limite" => $limite, "statut" => "enregistre");
$myJSON = array("identifiant" => $identifiant, $identifiant => $myJSON);
$myJSON = json_encode($myJSON);

$myfile = fopen("data.json", "r");
$null = fgets($myfile);
if ($null == "") {
    $myfile = fopen("data.json", "w") or die("Unable to open file!");
fwrite($myfile, $myJSON);
}
else {
$myfile = fopen("data.json", "a") or die("Unable to open file!");
fwrite($myfile, "\n");
fwrite($myfile, $myJSON);
fclose($myfile);
}
if ($_POST["identifiant"] !== "") {
echo "Commande ".$_POST["identifiant"]." prise en compte;";
}
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<header>
        <a href=form.php>Revenir au formulaire</a>
        <a href=index.php>Aller à la liste atelier</a>
        <a href=facture.php>Aller à la liste facture</a>
    </header>

    <form method="POST"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset>
            <h1> Nouvelle commande</h1>
            <label for="identifiant">Identifiant</label><input type="text" name="identifiant" value=""></input><span class="error">* <?php echo $identifiantERR;?> </span>
            <br>
            <label for="client">Client</label><input type="text" name="client" value=""></input><span class="error">* <?php echo $clientERR;?> </span>
            <br>
            <label for="commande">Détail de la commande</label><textarea name="commande" value=""></textarea><span class="error">* <?php echo $commandeERR;?> </span>
            <br>
            <label for="recu">Date de commande</label><input type="date" name="recu"></input><span class="error">* <?php echo $recuERR;?> </span>
            <br>
            <label for="limite">Date de livraison</label><input type="date" name="limite"></input><span class="error">* <?php echo $limiteERR;?> </span>
            <br>
        </fieldset>
        <button type="submit">envoyer</button>
    </form>

<br>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>