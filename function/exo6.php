<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function6</title>
</head>
<body>

    <!-- Faire une fonction qui prend trois paramètres : **nom**, **prenom** et **age**. Elle doit renvoyer une chaine de la forme :  
    "Bonjour" + **nom** + **prenom** + ",tu as" + **age** + "ans". -->
    
<?php
    function three($family_name, $name, $number) {
        return "Bonjour " . $family_name . " " . $name . ", tu as " . $number . "ans";
    }
   
    echo(three( Dexter, John, 23))
?>

</body>
</html>