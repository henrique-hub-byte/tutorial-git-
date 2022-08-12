<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>
    <?php
        /* function void */
        function exibirBoasVindndas(){
            echo "Bem vindo ao curso de php";
        }
        exibirBoasVindndas();
        /* ----------------------- */
        /* return function */

        function calcularAreaTerrena($largura, $comprimento){
            $area = $largura * $comprimento;
            return $area;
        }

        echo "<br>" . calcularAreaTerrena(30,50);
        echo "<br>" . calcularAreaTerrena(50,30);

        echo "<hr>";

        function criadorDaFunc($nome){
            echo "o $nome criou essa função";
        }

        criadorDaFunc("luis henrique");
    ?>
</body>
</html>