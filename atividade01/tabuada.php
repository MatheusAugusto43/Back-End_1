<?php
/*Faça um código em que calcule a tabuada do número indicado em uma váriavel com o nome de $tabuada, 
aplique o laço de repetição FOR */
$tabuada = $_GET ["numero"]?? "Entre com o número na URL";
for  ($i = 1; $i <= 10; $i ++){
    echo " <br> $tabuada*$i =";
    echo ($tabuada* $i);
}
?>