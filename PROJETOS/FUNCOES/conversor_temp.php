<?php
require_once "funcao.php";
?>

<form method="POST">

    <label>Temperatura em Celsius:</label>

    <input type="number" name="celsius" step="0.1">

    <button type="submit">Converter</button>

</form>

<?php

if (isset($_POST['celsius'])) {

    $resultado = conversor_temp();

    echo "A temperatura em Fahrenheit é: $resultado °F";
}

?>
