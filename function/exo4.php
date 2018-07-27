<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function4</title>
</head>
<body>

<!-- Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
- **Le premier nombre est plus grand** si le premier nombre est plus grand que le deuxième
- **Le premier nombre est plus petit** si le premier nombre est plus petit que le deuxième
- **Les deux nombres sont identiques** si les deux nombres sont égaux -->

<?php
    function nbr($one , $two) {
        if ($one > $two) {
        echo("Le premier nombre est plus grand");
     } elseif ($one == $two) {
        echo("Les deux nombres sont identiques");
    } elseif ($one < $two) {
        echo("Le premier nombre est plus petit");
    } else {
        echo("What ?!");
    }

}
echo(nbr(3, 2));
?>
    
</body>
</html>