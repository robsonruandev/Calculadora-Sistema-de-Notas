<?php

// Medidas ultilizadas pelo sistema

const MEDIA_APROVACAO = 7;
const MEDIA_RECUPERACAO = 6;
const MEDIA_PRESENCA = 75;
const MEDIA_PRESENCAr = 65;

//Função para Avaliar a situação do aluno
function status($media, $presenca) {
    if ($media >= MEDIA_APROVACAO && $presenca >= MEDIA_PRESENCA) {
        return "Aprovado";
    } elseif ($media >= MEDIA_RECUPERACAO && $presenca >=   MEDIA_PRESENCAr) {
        return "Recuperação"; 
    } else {
        return "Reprovado";
    }
}

//Solicitar a quantidade de alunos

$quantidade = (int) readline("Quantos alunos deseja cadastrar? ");

for ($i = 0; $i < $quantidade; $i++) {
    echo "\n --- Cadastro Aluno " . ($i + 1) ."---\n";

    $nome = readline("Digite o nome do aluno: ");

    $nota1 = (float)readline("Digite sua primeira nota: ");
    $nota2 = (float)readline("Digite sua segunda nota: ");
    $presenca = (float)readline("Digite sua sua Frequencia: ");

    //Calcular a média
    $media = ($nota1 + $nota2) /2;

    //Armazenar dados no Array
    $alunos[] = [
        'nome' => $nome,
        'nota1'=> $nota1,
        'nota2'=> $nota2,
        'media'=> $media,
        'Frequencia'=> $presenca,
        'situacao' => status($media, $presenca),
    ];
}

foreach ($alunos as $aluno) {
echo '==== RESULTADO NOTAS ===='. PHP_EOL;
echo 'Aluno: ' . $aluno['nome'] . PHP_EOL;
echo 'Nota1: '. $aluno['nota1'] . PHP_EOL;
echo 'Nota2: '. $aluno['nota2'] . PHP_EOL;
echo 'Media: '. $aluno['media'] . PHP_EOL;
echo 'Frequencia: '. $aluno['Frequencia'] . PHP_EOL;
echo 'Situação: '. $aluno['situacao'] . PHP_EOL;
}