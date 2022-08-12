<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while</title>
</head>
<body>
    <?php

        $a = 0;

        while($a < 1000){

              $a +=100  ;

            if($a == 300 || $a == 700){
                continue;
            }

            echo "$a <br>";

           /* if($a == 9 ){
            break;
           } */

        }
        echo '<br>--end of loop';
    ?>
</body>
</html>