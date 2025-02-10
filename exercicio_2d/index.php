<?php 

    function soma($num1, $num2, $num3){

        if($num1 <= 1){
            return "O valor de 'a' precisa ser maior que 1";
        }

        $soma = 0;

        for($i = $num2; $i <= $num3; $i++){

            if($i % $num1 === 0){
                $soma += $i;
            }
            
        }

        return $soma;

    }

    $entrada1 = readline("Digite o valor de a: " .PHP_EOL);
    $entrada2 = readline("Digite o valor de b: " .PHP_EOL);
    $entrada3 = readline("Digite o valor de c: " .PHP_EOL);

    $num1 = intval($entrada1);
    $num2 = intval($entrada2);
    $num3 = intval($entrada3);

    
    $resultado = soma($num1, $num2, $num3);

    echo "A soma dos números divisíveis por $num1 entre $num2 e $num3 é: $resultado" .PHP_EOL;
        

