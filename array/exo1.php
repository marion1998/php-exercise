<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>

    <!-- Créer un tableau **mois** et l'initialiser avec les valeurs suivantes :
    - **janvier**
    - **février**
    - **mars**
    - **avril**
    - **mai**
    - **juin**
    - **juillet**
    - **aout**
    - **septembre**
    - **octobre**
    - **novembre**
    - **décembre** -->

<?php

    $months = array (
                    [1] => January,
                    [2] => Fabruary,
                    [3] => March,
                    [4] => April,
                    [5] => May,
                    [6] => June,
                    [7] => July,
                    [8] => August,
                    [9] => September,
                    [10] => Octobre,
                    [11] => November,
                    (12) => December
                    );

        foreach ($months as $value) {
            echo($value);
            echo(", ");
        }
?>
    
</body>
</html>