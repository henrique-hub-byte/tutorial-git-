<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifificar se doador de sangue está apto'</title>
</head>
<body>
    <h1>Resultado de teste se é possivel ser doador de sangue</h1>
    <?php

    $idade = 24;
    $peso = 51;

    if(($idade >= 16 &&  $idade <= 69) && ($peso >= 50)){
        echo "atende os requisitos";
    } else {
        echo "não atende os requisitos";
    }

    ?>
</body>
</html>