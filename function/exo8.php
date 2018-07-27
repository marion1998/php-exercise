<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function8</title>
</head>
<body>

    <!-- Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
    Tous les paramètres doivent avoir une valeur par défaut. -->

<?php
    function three($number, $number1, $number2) {
        return $number . $number1 . $number2;
    }

    echo(three(1 + 3 + 5));

?>
    
</body>
</html>