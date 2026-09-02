<?php

function escrever_linha($linha)
{
    file_put_contents(
        "lista_chamada.txt",
        "Informações do aluno: $linha \n".
            "\n", FILE_APPEND ); 
    echo "<a href='http://localhost/matheusaugusto.com.br/PROJETOS/Projeto_02/Listar_chamada.php' target='_blank' >";
    echo "Verificar alunos cadastrado";
}


function ler_linha (){
$ler = fopen ("lista_chamada.txt","r");
while (!feof($ler)){
    echo fgets($ler). "<br>";
    }
fclose($ler);
}
?>