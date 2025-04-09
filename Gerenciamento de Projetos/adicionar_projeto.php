<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifolio</title>
    <link rel="stylesheet" href="css/form.css">

</head>

<body>

    <ul>
        <li><a href="index.php">Portifolio</a></li>
        <li style="float:right"><a class="active" href="adicionar_projeto.php">Novo projeto</a></li>
    </ul>

    <h1>Novo Projeto</h1>

    <br>
    <div class="center">
        <form action="cadastro_projeto.php" method="post">
            <label for="cliente">Nome do cliente: </label><br>
            <input type="text" name="cliente" id="cliente">

            <p><label for="titulo_projeto">Titulo do projeto: </label><br>
                <input type="text" name="titulo_projeto" id="titulo_projeto">
            </p>

            <p><label for="descricao">Descrição:</label><br>
                <input type="text" name="descricao" id="descricao">
            </p>

            <p><label for="tecnologias">Tecnologias:</label><br>
                <input type="text" name="tecnologias" id="tecnologias">
            </p>

            <p><label for="data_inicio">Data de inicio:</label>
                <input type="date" name="data_inicio" id="data_inicio">
            </p>

            <p><label for="data_fim">data de fim:</label>
                <input type="date" name="data_fim" id="data_fim">
            </p>

            <p><label for="status_projeto">Status:</label><br>
                <input type="text" name="status_projeto" id="status_projeto">
            </p>

            <input type="submit" value="Enviar">
        </form>
        <a href="index.php" class="button">voltar</a>
    </div>
    <br>
    
    <?php

    ?>
</body>

</html>