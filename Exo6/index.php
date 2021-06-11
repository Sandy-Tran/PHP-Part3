<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PHP</title>
</head>
<body>

<div class='container'>
<div class='text-center'>
<h1>PHP Partie 3</h1>
<h2>Exercice 5 :
Créez une fonction qui retourne l'addition de trois nombres.</h2>
</div>
</div>

<div class='text-center mt-5'>


<?php

 $first = 14;
 $second = 30;
 $third = 18;

 function calculation($a, $b, $c){
     $total = $a + $b + $c;
     return $total;
 }

echo calculation($first, $second, $third);


?>




</div>    

</body>
</html>


