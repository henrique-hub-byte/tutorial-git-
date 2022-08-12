<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso php</title>
</head>

<body>
    <?php
    //
    $user_card_store = true;
    $value_pay = 450;

    $value_delivery = 50;
    $receveis_discount = true;

    /*
    if ($user_card_store == true && $value_pay >= 100) {
        $value_delivery = 0;
        echo "compra aprovada o valor do frente sera $value_delivery ;)";
    } else if ($user_card_store == false) {
        echo "compra não aprovada nescessario ter o cartão da loja";
    } else if ($value_pay <= 99) {
        echo "compra aprovada o valor do frente sera $value_delivery :(";
    } */


    if ($user_card_store == true && $value_pay >= 400) {
        $value_delivery = 0;

    }else if($user_card_store == true && $value_pay >= 300){
        $value_delivery = 10;

    }else if($user_card_store == true && $value_pay >= 100){
        $value_delivery = 25;

    } else {

    }
    ?>
    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja? <?= $user_card_store = true ? 'yes' : 'no' ?>
        <?php

        // condição ? true : false

        /*
        if ($user_card_store == true) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }*/

        ?>
    </p>
    <p>Valor da compra: <?= $value_pay ?>

    <p>Recebeu desconto no frete</p>
    <?php
    if ($receveis_discount == true) {
        echo 'SIM';
    } else {
        echo 'NÃO';
    }

    ?>
    </p>
    <p>Valor do frete: <?= $value_delivery ?></p>
</body>

</html>