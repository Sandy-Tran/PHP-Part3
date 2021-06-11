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
<h2>Exercice 4 :
Créez une fonction qui retourne deux nombres aléatoire allant de 1 à 15. Si le premier nombre est plus grand que le deuxième affichez "le premier nombre est plus grand que le deuxième" sinon si le deuxième nombre est plus grand affichez "le premier nombre est plus petit que le deuxième". affichez "les deux nombres sont égaux" si les deux nombres sont identiques.</h2>
</div>
</div>

<div class='text-center mt-5'>


<?php

 $premier = rand(1, 15);
 $deuxieme = rand(1, 15);

 function numbers($a, $b){

 if($a > $b){
     return 'Le premier nombre est plus grand que le deuxieme'. ' ' . $a . ' ' . '>' . ' ' . $b;
 } else if ($a < $b){
     return 'Le premier nombre est plus petit que le deuxieme'. ' ' . $a . ' ' . '<' . ' ' . $b;
 } else {
     return 'Les deux nombres sont identiques'. ' ' . $a . ' ' . ' = ' . ' ' . $b;
 }
}
echo numbers($premier, $deuxieme);
// echo numbers(rand(1, 15), rand(1, 15));

?>




</div>    

</body>
</html>


