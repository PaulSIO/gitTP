<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$taille = 30;
$tab = array();
for($i=0;$i < $taille;$i++)
{
$tab[$i] = rand(0,100);
}
foreach ($tab as $tableau)
{
    echo $tableau;
    echo "<br>";
}
$compteur=0;
for($p=0; $p <= 100; $p++)
{
    
   foreach($tab as $t)
   {
       if ($p == $t)
       {
           $compteur++;
           
       }
       
   }
   echo "la valeur"." ".$p." "."est présente"." ". $compteur." "."fois";
   echo "<br>"; 
   $compteur =0;
    
}

?>
</body>
</html>