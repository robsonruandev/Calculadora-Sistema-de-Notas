<?php

// Medias ultilizadas pelo sistema

const MEDIA_APROVACAO = 7;
const MEDIA_RECUPERACAO = 8;


// //Array para armazenar alunos e notas
// $alunos = [];

function classificar($media) {
    if ($media >= MEDIA_APROVACAO) {
        return "Aprovado";
    } elseif ($media >= MEDIA_RECUPERACAO) {
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

    //Calcular a média
    $media = ($nota1 + $nota2) /2;

    //Armazenar dados no Array
    $alunos[] = [
        'nome' => $nome,
        'nota1'=> $nota1,
        'nota2'=> $nota2,
        'media'=> $media,
        'situacao' => classificar($media)
    ];
}

foreach ($alunos as $alunos) {
echo '==== RESULTADO NOTAS ====\n';
echo 'Aluno: ' . $alunos['nome'] . PHP_EOL;
echo 'Nota1: '. $alunos['nota1'] . PHP_EOL;
echo 'Nota2: '. $alunos['nota2'] . PHP_EOL;
echo 'Media: '. $alunos['media'] . PHP_EOL;
echo 'Situação: '. $alunos['situacao'] . PHP_EOL;
}