<?php
$nome = $_POST[('nome')];
$idade = $_POST[('idade')];
$altura = $_POST[('altura')];
$peso = $_POST[('peso')];
$imc = ($peso / ($altura * $altura));
echo "Olá $nome, o seu IMC atual, com $idade anos, é de $imc <br>";
if ($imc < 18.5) {
    echo ("Você está abaixo do peso normal");
} elseif ($imc < 24.9) {
    echo ("Você está no peso normal");
} elseif ($imc < 29.9) {
    echo ("Você está com excesso peso");
} elseif ($imc < 34.9) {
    echo ("Você está com Obesidade classe 1");
} elseif ($imc < 39.9) {
    echo ("Você está com Obesidade classe 2");
} elseif ($imc >= 40) {
    echo ("Você está com Obesidade classe 3");
}
