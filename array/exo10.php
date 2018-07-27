<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array10</title>
</head>
<body>
    
    <!-- Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
    Cela pourra être, par exemple, de la forme : **"Le département" + nom_departement + "a le numéro" + num_departement** -->

<?php
    $deps = [
        62 => "Pas-De-Calais",
        59 => "Nord",
        80 => "Somme",
        60 => "Oise",
        "02" => "Aisne",
        51 => "Reims"
    ];

    foreach ($deps as $key => $dep) {
        echo ($key . " " . $dep . ", "); 
    }
?>

</body>
</html>