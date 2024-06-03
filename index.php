<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$myfile = fopen("data.json", "r") or die("unable to open file!");
while(!feof($myfile)) {
$myJSON = fgets($myfile);
$myJSON = json_decode($myJSON, true);
echo $myJSON;
echo '<br>';
}
fclose($myfile);
?>

</body>
</html>