<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array9</title>
</head>
<body>
    
    <!-- Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. -->

<?php
     $deps = [
        62 => "Pas-De-Calais",
        59 => "Nord",
        80 => "Somme",
        60 => "Oise",
        "02" => "Aisne",
        51 => "Reims"
    ];
    foreach ($deps as $dep) {
        echo ( $dep . ", "); 
    }
?>

</body>
</html>