<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichier</title>
</head>
<body>
<h1>Manipulation de fichier</h1>

<?php

$fp = fopen("liens.txt", "r");

while (!feof($fp))
{
     $ligne = fgets($fp, 4096);
     echo '<a href="'.$ligne.'">'.$ligne.'</a><br>';
}

fclose($fp);

?>

<hr>

<h1>Fichier distant</h1>

<?php

$customers = file("customers.csv");

$max_idx = new SplFileObject('assets/file/customers.csv', 'r');
$max_idx->seek(PHP_INT_MAX);
$first_entry=true;

?>
</body>
</html>