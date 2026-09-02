<?php
require_once "funcao.php";
?>

<form method="POST">

    <label>Digite um número:</label>
    <input type="number" name="num">

    <button type="submit">Calcular tabuada</button>

</form>

<?php

if (isset($_POST['num'])) {

    $num = $_POST['num'];

    tabuada($num);
}

?>