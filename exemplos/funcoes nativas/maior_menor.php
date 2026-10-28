<?php
$a= $_POST [("n1")];
$b= $_POST [("n2")];
$c= $_POST [("n3")];
$d= $_POST [("n4")];
$e= $_POST [("n5")];
$maior_valor = max ($a,$b,$c,$d,$e);
$menor_valor = min ($a,$b,$c,$d,$e);
echo "Valores comparados: $a, $b, $c, $d e $e: <br>";
echo "O maior valor é: $maior_valor e o menor valor é: $menor_valor";