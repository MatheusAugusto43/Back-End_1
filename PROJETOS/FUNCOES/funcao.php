<?php
// IMC
function imc ($peso,$altura){
    $imc = ($peso / ($altura * $altura));
    echo "Seu IMC com $peso kilos e $altura de altura é de $imc";
}
// Maior e menor
function MM ($n1,$n2){
    if ($n1 < $n2 ) {
        $maior = $n2;
        $menor = $n1; 
    } else {
        $maior = $n1;
        $menor = $n2;
    }
    echo "O maior número é $maior e o menor é $menor";
}
// Par ou Impar
function parOuImpar ($num){
    if ($num % 2 == 0){
        return " $num é Par";
    } else {
        return " $num é Ímpar";
    }
}
// Média
function media($n1, $n2, $n3) {
    $resultado = ($n1 + $n2 + $n3) / 3;
    echo "A média de $n1, $n2 e $n3 é de $resultado";
}
// Fatorial
 function fatorial($num) {
    $fatorial = 1;

    for ($n = 1; $n <= $num; $n++) {
        $fatorial *= $n;
        echo"$num X $n =";
        echo "$fatorial <br>";
    }

    echo "O fatorial de $num é $fatorial <br>";
}
// Tabuada
function tabuada($numero) {
    echo "Tabuada do $numero: <br>";
    for ($n = 1; $n <= 10; $n++) {
        $resultado = $numero * $n;
        echo "$numero x $n = $resultado <br>";
    }
}
// Área do circulo
function area_circulo($n) {
    $pi = 3.14;
    $raio = $n;
    $area = $pi * ($raio ** 2);
return "A área do circulo é: $area";
}
// Soma
function soma($n1,$n2) {
    $soma = $n1 + $n2;
    return "a soma de $n1 + $n2 é $soma";
}
// Desconto
function desconto($valor, $porcentagem) {
    $valorD = $valor * ($porcentagem / 100);
    $valorF = $valor - $valorD;

    echo "Valor original: R$ $valor <br>";
    echo "Desconto de $porcentagem%: R$ $valorD <br>";
    echo "Valor final com desconto: R$ $valorF <br>";
}
// Conversor de temperatura

function conversor_temp() {

    $celsius = $_POST['celsius'];

    $fahrenheit = ($celsius * 9 / 5) + 32;

    return $fahrenheit;
}

?>
```


