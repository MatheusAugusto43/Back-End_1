<?php
require_once "funcao.php";
?>

<form method="POST">

    <label>Peso (kg):</label>
    <input type="number" name="peso" step="0.1">

    <br><br>

    <label>Altura (m):</label>
    <input type="number" name="altura" step="0.01">

    <br><br>

    <button type="submit">Calcular IMC</button>

</form>

<?php

if (isset($_POST['peso']) && isset($_POST['altura'])) {

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $resultado = IMC($peso, $altura);
}

?>