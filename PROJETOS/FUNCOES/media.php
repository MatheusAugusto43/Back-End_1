<?php
require_once "funcao.php";
?>

<form method="POST">

    <label>Primeira nota:</label>
    <input type="number" name="nota1" step="0.1">

    <br><br>

    <label>Segunda nota:</label>
    <input type="number" name="nota2" step="0.1">

    <br><br>

    <label>Terceira nota:</label>
    <input type="number" name="nota3" step="0.1">

    <br><br>

    <button type="submit">Calcular média</button>

</form>

<?php

if (isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $resultado = media($nota1, $nota2, $nota3);

}

?>
