<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date et heures</title>
</head>
<body>

<h1>Numéro de semaine</h1>

<?php
$date = '14/07/2019';
$timestamp = strtotime($date);
$num_semaine = date('W', $timestamp);
echo $num_semaine;
?>

<hr>

<h1>Jours avant fin de formation</h1>

<?php
$Now = new DateTime('now', new DateTimeZone('Europe/Paris'));
    $dtfin= new DateTime('2023-3-31');

    $diff=$Now->diff($dtfin);

    echo 'Jours restant avant fin du module : '.$diff->format('%a jours');
    ?>

    <hr>

    <h1>Année Bissextile</h1>

    <?php
    $annee = 1900;
    if (date('L', strtotime("$annee-01-01")) == 1) {
        echo "$annee est bissextile.";
    } else {
        echo "$annee n'est pas bissextile.";
    }
    ?>

    <hr>

    <h1>Date Erronée</h1>

    <?php
    $date = '32/17/2019';
    $format = 'd/m/Y';
    $date_obj = DateTime::createFromFormat($format, $date);
    if (!$date_obj || $date_obj->format($format) !== $date) {
        echo "La date $date est erronée.";
    } else {
        echo "La date $date est valide.";
    }
    ?>

    <hr>

    <h1>heure courant : 11h25</h1>

    <?php
    echo date('G\hi').'h';
    ?>

    <hr>

    <h1>1 mois a la date courante</h1>

    <?php
    $date = new DateTime();
    $date->modify('+1 month');
    echo $date->format('Y-m-d');  
    ?>

    <hr>

    <h1>1000200000</h1>

    <?php
    echo date('Y-m-d H:i:s', 1000200000);
    ?>
</body>
</html>