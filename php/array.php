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
        $lista_frutas = array(
        'x' => 'Banana' ,
        'w' => 'Maçã',
        'a' =>   'Morango',
        's' =>   'Abacaxi');
/*         $lista_frutas = ['Banana' , 'Maçã', 'Morango', 'Abacaxi'];
 */
        $lista_frutas[ ] = 'Caju';
        $lista_frutas['z'] = ' pera';
        echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';
        echo '</hr>'

       /*  echo $lista_frutas[2]; */
   ?>
</body>
</html>