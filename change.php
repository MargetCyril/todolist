<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv='refresh' content='0; URL=http://localhost:8000/index.php/'> -->
    <title>Document</title>

</head>
<body>
<header>
        <a href=form.php>Revenir au formulaire</a>
        <a href=index.php>Aller à la liste atelier</a>
        <a href=facture.php>Aller à la liste facture</a>
    </header>

<?php

$id = $_POST["id"];
echo $id;
$myfile = fopen("data.json", "r") or die("unable to open file!");
$memoire = "";
       while(!feof($myfile)) {
           $myJSON = fgets($myfile);
           $myJSON = json_decode($myJSON, true);
           if ($id === $myJSON["identifiant"]){
            if ($_POST["statut"] !== "terminer"){
               $myJSON = $myJSON[$id];
               $myJSON["statut"] = $_POST["statut"];
                $myJSON = array("identifiant" => $_POST["id"], $_POST["id"] => $myJSON);
                $myJSON = json_encode($myJSON);
                if ($memoire == "") {
                    $memoire = $myJSON; 
               }
               else {
                $memoire = $memoire."\n".$myJSON;
               }
            }
           }
           else {
            $myJSON = json_encode($myJSON);
                if ($memoire == "") {
                    $memoire = $myJSON; 
                }    
                else {
                $memoire = $memoire."\n".$myJSON;
                }
           }
       }
       fclose($myfile);
       $myfile = fopen("data.json", "w") or die("unable to open file!");
           fwrite($myfile, $memoire);
           fclose($myfile);
        header('location: index.php');

?>
    
</body>
</html>