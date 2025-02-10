<?php 

    function verificar($valor){
        return $valor % 4 === 0;
    }

    $entrada = readline("Digite aqui um valor: ");

    $valor = intval($entrada);

    if(verificar($valor)){
        echo "True" .PHP_EOL;
    }else{
        echo "False" .PHP_EOL;
    }