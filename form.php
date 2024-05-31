<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$myfile = fopen("data.json", "w");
fwrite ($myfile, $PHP);
fclose($myfile);
?>

</body>
</html>