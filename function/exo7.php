<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function7</title>
</head>
<body>

    <!-- Faire une fonction qui prend deux paramètres : **age** et **genre**. Le paramètre **genre** peut prendre comme valeur :
    - Homme
    - Femme  

    La fonction doit renvoyer en fonction des paramètres :
    - **Vous êtes un homme et vous êtes majeur**
    - **Vous êtes un homme et vous êtes mineur**
    - **Vous êtes une femme et vous êtes majeur**
    - **Vous êtes une femme et vous êtes mineur** -->
    

<?php
    function age($number, $genre) {
         if ($number >= 18 && $genre == "Homme") {
             echo("Vous êtes un homme et vous êtes majeur");
         } elseif($number < 18 && $genre == "Homme") {
             echo("Vous êtes un homme et vous êtes mineur");
         } elseif($number >= 18 && $genre == "Femme") {
             echo("Vous êtes une femme est vous êtes majeur");
         } elseif($number < 18 && $genre == "Femme") {
             echo("Vous êtes une femme est vous êtes mineur");
         } else {
             echo("");
         }
    }

    echo(age(18, "Femme"))
?>


</body>
</html>