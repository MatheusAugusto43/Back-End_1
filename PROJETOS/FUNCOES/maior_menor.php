
<?php
require_once "funcao.php";
?>

<form method="POST">

    <label>Digite o primeiro número:</label>
    <input type="number" name="num1">

    <br><br>

    <label>Digite o segundo número:</label>
    <input type="number" name="num2">

    <br><br>

    <button type="submit">Calcular</button>

</form>

<?php

if (isset($_POST['num1']) && isset($_POST['num2'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $resultado = MM($num1, $num2);

    echo $resultado;
}

?>
