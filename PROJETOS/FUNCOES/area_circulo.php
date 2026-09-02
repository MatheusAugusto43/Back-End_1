<?php
require_once "funcao.php";
?>

<form method="POST">

    <label>Digite o raio do círculo:</label>

    <input type="number" name="raio" step="0.1">

    <button type="submit">Calcular</button>

</form>

<?php

if (isset($_POST['raio'])) {

    $raio = $_POST['raio'];

    $resultado = area_circulo($raio);

    echo "A área do círculo é: $resultado";
}

?>
```
