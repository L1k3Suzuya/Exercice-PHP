<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle</title>
</head>
<body>

<h1>Nombre imapir</h1>
<br>


<?php
for ($a = 0; $a <= 150; $a++) { 
    if($a%2!=0){echo "$a "; }
}

?>

<hr>

h1>Sauvegarde</h1>

<?php
for ($a = 0; $a <= 500; $a++) { 
    echo "Je dois faire des sauvegardes régulières de mes fichiers";
} 
?>

<hr>

<h1>Table de multiplication</h1>

<style type="text/css">

.tableStyle{
background:#dbe5f1;
border:1px solid black;
width:600px;
margin:40px;
}
.tableStyle tr td{
border:1px solid black;
text-align:center;
}
</style>
</head>
</html>
<?php
function cl($i,$j)
 {
$r="background-color:blue";
$c="background-color:red";

$k="background-color:yellow";
   if($i==0 ){
      return $r;
      }elseif($i%2==1){
        
     return $c;
         }else{
       return $k;
      }
 }
 echo"<h2> Tableau  de multiplication </h2>";
echo"<table  class='tableStyle'>";
 for($i=0;$i<12;$i++)
 {
 
    $r="background-color:blue";
    $g="background-color:black";
        echo"<tr>";
        for($j=0;$j<12;$j++)
       {
           $k=$i+1;
           $l=$j+1;
           $p=$l*$k;
         if( $j==0 and $i==0)
           { 
           echo"<td style='$r;'> &nbsp  </td>";
           }elseif( $j==0 )
           {
             
             echo "<td style='$r;'><b>$k</b></td>"; 
           }else{
                 $c=cl($i,$j);
                  if($i==$j or $i==0)
                  {
                
           echo"<td style='$c;'><b>$p</b></td>"; 
                        }else{
                     echo"<td style='$c;'>$p</td>"; 
                     }
                }
        } 
       
     echo"</tr>";
 
 }
echo"</table>"; 


?>