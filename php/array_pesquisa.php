<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pesquisando array</title>
</head>
<body>
    <?php
    $fruit_list = array('Banana', 'apple','strawbery', 'orange');

    echo "<pre>";
    print_r($fruit_list);
    echo "</pre>";

    $existe = in_array('apple',$fruit_list);
  /* array search retorna o indice do array msm sintaxe*/
    if($existe){
        echo "tem aqui pai";
    }else{
        echo "tem não pai";
    }


    ?>
</body>
</html>