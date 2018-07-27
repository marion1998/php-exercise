<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function3</title>
</head>
<body>

    <!-- Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines -->

<?php
    function chtwo($string, $string2) {
        return $string . "<br>" . $string2;
    }

    echo(chtwo("Hello" , "World"));
?>
    
</body>
</html>