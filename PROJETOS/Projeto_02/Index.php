<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Chamada</title>
</head>
<body style="background-color: rgb(232, 
50, 250);">
    <h2 style="background-color: blue;">Formulário de Chamada</h2>
    <hr>
    <form action="Gravar_chamada.php" method="post">
    <label for="nome">Nome do Aluno(a):</label>
    <input type="text" name="nome" id="nome" required>

    <label for="Sala do Aluno(a)">Sala do Aluno:</label>
    <input type="text" name="sala"  required>

    <label for="R.A do aluno">R.A do Aluno:</label> 
    <input type="text" name="RA" required>
    
    <button type="submit">Enviar</button>
    
</body>
</html>

