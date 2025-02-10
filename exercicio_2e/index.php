<?php   

    function pesoIdeal($altura, $sexo){

        if($sexo == 'M' || $sexo == 'm'){
            return 72.7 * $altura - 58;
        }elseif($sexo == 'F' || $sexo == 'f'){
            return 62.1 * $altura - 44.7;
        }else{
            return "Valor inválido, use apenas M ou F";
        }

    }

    $sexo = readline("Qual o sexo ? [M] - Masculino, [F] - Feminino" .PHP_EOL);
    $altura = (float)readline("Digite a altura em metros: " .PHP_EOL);
    

    $pesoIdeal = pesoIdeal($altura, $sexo);

    echo "O peso ideal é de $pesoIdeal kgs" .PHP_EOL;