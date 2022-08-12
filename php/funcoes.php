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

        echo "<hr>Exercicio<hr>";

        function CalcularImposto($salario){
            $imposto = 0;

            if($salario <= 1903.98){
                return $imposto;
            }else if($salario >= 1903.9 && $salario <= 2826.65){
                $imposto = ($salario * 7.5) / 100;
                return $imposto;
            }else if($salario >= 2826.66 && $salario <= 3751.05){
                return $imposto = ($salario * 15) / 100;
            }else if ($salario >= 3752.06 && $salario <= 4664.08){
                return $imposto = ($salario * 22.5) / 100;
            }else if($salario >= 4.665){
                return $imposto = ($salario * 27.5) / 100;
            }

            return $imposto;
        }

        echo CalcularImposto(2000.98);
    ?>
</body>
</html>