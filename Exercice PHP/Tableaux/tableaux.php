<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableaux</title>
</head>
<body>

<h1>Tableau Année non bissextile</h1>

<?php

$taba = array(
    "Janvier" => 31,
    "Fevrier" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Aout" => 30,
    "Septembre" => 31,
    "Octobre" => 30,
    "Novembre" => 31,
    "Decembre" => 30
);

asort($taba);

echo '<table border=1><tbhead><tr><td><b>Mois</b></td>'.'<td><b>Nbr de jours</b></td></tr></thead><tbody>';

foreach ($taba as $month => $days)
{
   echo '<tr><td><b>'.$month.'</b></td>'.'<td>'.$days.'</td></tr>';
}

echo '</tbody></table>';

?>

<hr>


<h1>Capitale</h1>

<?php

$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);

?>
<h3>Capitales par ordre alphabétique</h3>

<?php

ksort($capitales);

echo '<table border=1><tbhead><tr><td><b>Capitale</b></td>'.'<td><b>Pays</b></td></tr></thead><tbody>';

foreach ($capitales as $cap => $pays)
{
   echo '<tr><td><b>'.$cap.'</b></td>'.'<td>'.$pays.'</td></tr>';
}

echo '</tbody></table>';

?>

<hr>

<h1>Par ordre Alphabétique</h1>

<?php

asort($capitales);

echo '<table border=1><tbhead><tr><td><b>Pays</b></td>'.'<td><b>Capitale</b></td></tr></thead><tbody>';

foreach ($capitales as $cap => $pays)
{
   echo '<tr><td><b>'.$pays.'</b></td>'.'<td>'.$cap.'</td></tr>';
}

echo '</tbody></table>';

$nb = count($capitales);

echo "<h3>Le tableau contient ".$nb." éléments.</h3>";

?>

<hr>

<h1>Suppression des capitales commencant par B</h1>

<?php

echo '<table border=1><tbhead><tr><td><b>Capitale</b></td>'.'<td><b>Pays</b></td></tr></thead><tbody>';

ksort($capitales);
$i=0;
foreach ($capitales as $cap => $pays)
{
    $i++;
    if (substr($cap,0,1)=='B'){
        echo '<tr><td><b>Ligne supprimée</b></td>'.'<td>-----</td></tr>';
        unset($capitales[$i]);
    }
    else {
        echo '<tr><td><b>'.$cap.'</b></td>'.'<td>'.$pays.'</td></tr>';
    }
}

echo '</table>';

?>

<hr>
<h2>Départements</h2>

<?php
    $departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);
?>

<hr>
<h1>Départements</h1>

<?php
    $departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);
?>

<hr>

<h1>Région par ordre alphabétique</h1>

<?php 
    ksort($departements);

    echo '<table border=1><tbhead><tr><td><b>Région</b></td>'.'<td><b>Départements</b></td></tr></thead><tbody>';

    foreach($departements as $region => $ldep){
        for($i=0;$i<count($ldep);$i++){
            echo '<tr><td>'.$region.'</td>';
            echo '<td>'.$ldep[$i].'</td></tr>';
        }
    }

    echo '</table>';

?>

<hr>

<h1>Région et nombre de départements</h1>

<?php 
    ksort($departements);
    
    echo '<table border=1><tbhead><tr><td><b>Région</b></td>'.'<td><b>Nombre de départements</b></td></tr></thead><tbody>';

    foreach($departements as $region => $ldep){
            echo '<tr><td>'.$region.'</td>';
            echo '<td>'.count($ldep).'</td></tr>';
    }

    echo '</table>';

?>