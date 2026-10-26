<?php

// Função com Parametro para Soma
function somar($numero1, $numero2)
{
    return ($numero1 + $numero2);
}

// Função com Parametro para Subtrair
function subtrair($numero1, $numero2)
{
    return ($numero1 - $numero2);
}

// Função com Parametro para Multiplicar
function multiplicar($numero1, $numero2)
{
    return ($numero1 * $numero2);
}

// Função com Parametro para Divisão e Negar o Zero
function dividir($numero1, $numero2)
{
    if ($numero2 == 0) {
        return "Erro: Divisão por zero Negada";
    }
    return $numero1 / $numero2;
}

// Função utilitária para exibir o resultado
function exibirResultado($resultado) {
    return "Resultado: " . $resultado;
}

//Função solicitar numero ao Usuario!

$numero1 = (float) readline("Digite um Numero para o Calculo: ");
$numero2 = (float) readline("Digite outro Numero para o Calculo: ");

// Exibir o menu de operações 

echo "\n ==== MENU ==== \n";
echo "1. Somar\n";
echo "2. Subtrair\n";
echo "3. Multiplicar\n";
echo "4. Dividir \n";
echo "================\n";

$opcao = readline("Escolha uma Opção: ");

//Executar a opção de Escolha
switch ($opcao) {
    case "1":
        $resultado = somar($numero1, $numero2);
        echo exibirResultado($resultado) . PHP_EOL;
        break;
    case "2":
        $resultado = subtrair($numero1, $numero2);
        echo exibirResultado($resultado) . PHP_EOL;
        break;
    case "3":
        $resultado = multiplicar($numero1, $numero2);
        echo exibirResultado($resultado) . PHP_EOL;
        break;
    case "4":
        $resultado = dividir($numero1, $numero2);
        echo exibirResultado($resultado) . PHP_EOL;
        break;


    default:
        echo "Opcão Invalida\n";
        break;
        }