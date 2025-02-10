<?php   

    

    function soma($num1, $num2){

        $menor = min($num1, $num2) + 1;
        $maior = max($num1, $num2) - 1;

        if($menor >= $maior){
            return 0;
        }

        $soma = 0;

        //Somar os números entre
        for($i = $menor; $i <= $maior; $i++){
            $soma += $i;
        }

        return $soma; 

    }

    $entrada1 = readline("Digite o primeiro valor: " .PHP_EOL);
    $entrada2 = readline("Digite o segundo valor: " .PHP_EOL);

    $num1 = intval($entrada1);
    $num2 = intval($entrada2);

    if ($num1 <= 0 || $num2 <= 0){

        echo "Apenas números positivos são permitidos" .PHP_EOL;

    }else{

        $resultado = soma($num1, $num2);
        echo "A soma dos números que estão entre os digitados é $resultado" .PHP_EOL;

    }

