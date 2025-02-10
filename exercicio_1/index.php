<?php   

    //Funções
    function adicao($num1, $num2){
       return $num1 + $num2;
    }
    function subtracao($num1, $num2){
        return $num1 - $num2;
    }
    function divisao($num1, $num2){
        if($num2 === 0){
            return "O divisor não pode ser 0" .PHP_EOL; 
        }   
            return $num1 / $num2;
    }
    function multiplicacao($num1, $num2){
        return $num1 * $num2;
    }

    //Entradas
    $entrada1 = readline("Digite aqui o número 1: " .PHP_EOL);
    $entrada2 = readline("Digite aqui o número 2: " .PHP_EOL);

    //Converte para inteiro
    $num1 = intval($entrada1);
    $num2 = intval($entrada2);

    //Tipo da operação
    $tipo = readline("Qual operação você deseja fazer ? [1] - Adição, [2] - Subtração, [3] - Divisão, [4] - Multiplicação:   " .PHP_EOL);
    $tipoInt = intval($tipo);

    //Condicionais
    if($tipoInt === 1){
        $resultado = adicao($num1, $num2);
        echo "O resultado é $resultado".PHP_EOL;
    }
    
    if($tipoInt === 2){
        $resultado = subtracao($num1, $num2);
        echo "O resultado é $resultado".PHP_EOL;
    }
    
    if($tipoInt === 3){
        $resultado = divisao($num1, $num2);
        echo "O resultado é $resultado".PHP_EOL;
    }
    
    if($tipoInt === 4){
        $resultado = multiplicacao($num1, $num2);
        echo "O resultado é $resultado".PHP_EOL;
    }
    
    
    