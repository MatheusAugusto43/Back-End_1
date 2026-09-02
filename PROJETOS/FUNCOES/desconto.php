<?php
require_once "funcao.php";
?>

<form method="POST">

    <label>Valor do produto:</label>
    <input type="number" name="valor" step="0.01">

    <br><br>

    <label>Desconto (%):</label>
    <input type="number" name="porcentagem" step="0.1">

    <br><br>

    <button type="submit">Calcular</button>

</form>

<?php

if (isset($_POST['valor']) && isset($_POST['porcentagem'])) {

    $valor = $_POST['valor'];
    $porcentagem = $_POST['porcentagem'];

    $resultado = desconto($valor, $porcentagem);

}

?>
