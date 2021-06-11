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
<h2>Exercice 3 :
Créez deux variables contenant chacune une string. Créez une fonction qui retourne le contenu de ces deux variable.</h2>
</div>
</div>

<div class='text-center mt-5'>

<div>
<?php

function returnAll($nom = 'Tran', $prenom = 'Sandy'){
   
    return $nom .' '. $prenom;
}
echo returnAll();

?>
</div>


<div>
<?php

$text1 = 'Hello';
$text2 = 'World !';

function concacString($string1, $string2){
    $concatText = $string1 . ' ' . $string2;
    return $concatText;
}
echo concacString($text1, $text2); 
echo concacString('Hello', 'World !');

?>
</div>



</div>    

</body>
</html>


