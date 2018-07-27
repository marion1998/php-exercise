<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array8</title>
</head>
<body>
    
    <!-- Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. -->

<?php
     $months = array (
        (1) => January,
        (2) => Fabruary,
        (3) => March,
        (4) => April,
        (5) => May,
        (6) => June,
        (7) => July,
        (8) => August,
        (9) => September,
        (10) => Octobre,
        (11) => November,
        (12) => December
        );

        foreach ($months as $month) {
            $months = [];
            echo($month . ", ");
        }
?>

</body>
</html>