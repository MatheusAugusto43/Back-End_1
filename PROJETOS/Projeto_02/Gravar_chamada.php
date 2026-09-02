<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "Funcao.php";
$nome = $_POST["nome"];
$sala = $_POST["sala"];
$RA = $_POST["RA"];

$linha = ($nome." - ".$sala." - ".$RA);

escrever_linha($linha);
?>

</body>
</html>
