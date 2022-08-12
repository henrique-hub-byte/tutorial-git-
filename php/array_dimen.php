<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    /* $lista_coisas = array(array ('frutas','banana','maçã', 'morango', 'uva')) ; */
    $lista_coisas['frutas']= array('a' => 'banana','b' => 'maçã','c' => 'morango','d' => 'uva') ;
    $lista_coisas['pessoa'] = array('27' => 'darwin','9' => 'torres','8' => 'gerrad');

    echo "<pre>";
    print_r($lista_coisas);
    echo "</pre>";
    echo "</hr>";
    echo $lista_coisas['pessoa'][9];
   ?>
</body>
</html>