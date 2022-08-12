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
        $funcionario1 = null;
        $funcionario2 = '';

        if(empty($funcionario1)){
            echo "a  variavel $funcionario1 talvez seja empty ou false ";
        }else{
            echo "a  variavel $funcionario1 é null";
        }
        echo "<hr>";
        if(is_null($funcionario2)){
            echo "sim a  variavel $funcionario2 é null";
        } else {
            echo "a variavel $funcionario2 não é nulla";
        }
    ?>
</body>
</html>