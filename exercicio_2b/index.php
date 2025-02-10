<?php 

    function par($valor){
        return $valor % 2 === 0;
    }

    function impar($valor){
        return $valor % 2 != 0;
    }

    $entrada = readline("Digite aqui um valor: " .PHP_EOL);

    $valor = intval($entrada);

    if(par($valor)){
        echo "True" .PHP_EOL;
    }else{
        echo "False" .PHP_EOL;
    }