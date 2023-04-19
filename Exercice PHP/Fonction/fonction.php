<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction</title>
</head>
<body>
    
<h1>Fonction PHP Lien</h1>

<?php
function lien($url,$txt)
{
    echo '<a href="'.$url.'">'.$txt.'</a>';
}

lien("https://www.reddit.com/", "Reddit Hug");

?>

<hr>

<h1>Function PHP Valeurs d'un Tableau</h1>

<?php

function somme($MyTab){
    static $somme=0;
    for($i=0;$i<count($MyTab);$i++){
        $somme += $MyTab[$i];
    }
    echo $somme;
}

$tab = array(4, 3, 8, 2);
$resultat = somme($tab);

echo $resultat;

?>

<hr>

<h1>Complexe Mot de Passe</h1>

<?php

function complex_password($MyPassword){
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";
    return preg_match($pattern, $MyPassword);
}

$resultat = complex_password("TopSecret42");
$retour = ($resultat==True)?"True":"False";
echo $retour;
    
?>
</body>
</html>