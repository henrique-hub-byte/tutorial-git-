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
    $value_pay = 55;

    $value_delivery = 50;

    /*
    if ($user_card_store == true && $value_pay >= 100) {
        $value_delivery = 0;
        echo "compra aprovada o valor do frente sera $value_delivery ;)";
    } else if ($user_card_store == false) {
        echo "compra não aprovada nescessario ter o cartão da loja";
    } else if ($value_pay <= 99) {
        echo "compra aprovada o valor do frente sera $value_delivery :(";
    } */

    $user_card_store = true;
    $value_pay = 55;

    $value_delivery = 50;
    $receveis_discount = false;
    if ($user_card_store == true && $value_pay >= 100) {
        $value_delivery = 0;
        $receveis_discount = true;
    }
    ?>
    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja?
        <?php
        if ($user_card_store == true) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }
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
    <p>Valor da compra: <?= $value_delivery ?></p>
</body>

</html>