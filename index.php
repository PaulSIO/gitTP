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

$nb=11;
$compteur=0;
$x=rand(0,1000);
while($x!=$nb)
{
  $x=rand(0,1000);
  $compteur++;
}
echo $nb ."trouvé en"." ".$compteur." "."tirages";

?>
</body>
</html>