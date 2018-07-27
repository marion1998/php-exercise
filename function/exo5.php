<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function5</title>
</head>
<body>
    
<!-- Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres. -->

<?php
    function nbrchaine($number, $string) {
        return $number . $string;
    }

    echo(nbrchaine(21, " Hello"));
?>

</body>
</html>