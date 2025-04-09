<?php
include "database.php";

$id_projeto = $_GET['id_projeto'];

$sql_por_id = "SELECT * FROM projetos WHERE projetos.id = '$id_projeto'";

$resultado_consulta_por_id = mysqli_query($conexao, $sql_por_id);

$dados_id = mysqli_fetch_assoc($resultado_consulta_por_id);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar projeto</title>
    <link rel="stylesheet" href="css\form.css">

</head>

<body>

    <ul>
        <li><a href="index.php">Portifolio</a></li>
        <li style="float:right"><a class="active" href="adicionar_projeto.php">Novo projeto</a></li>
    </ul>

    <br>
    <div class="center">
    <form action="atualizar_projeto.php" method="post">
        <input type="hidden" name="id_projeto" value=<?php echo $dados_id['id'] ?>>

        <label for="cliente">Cliente: </label> <br>
        <input type="text" name="cliente" id="cliente" value=<?php echo $dados_id['cliente'] ?>><br>

        <label for="titulo_projeto">Titulo do projeto: </label><br>
        <input type="text" name="titulo_projeto" id="titulo_projeto" value=<?php echo $dados_id['titulo_projeto'] ?>><br>

        <label for="descricao">Descricao:</label><br>
        <input type="text" name="descricao" id="descricao" value=<?php echo $dados_id['descricao'] ?>><br>

        <label for="tecnologias">Tecnologias:</label><br>
        <input type="text" name="tecnologias" id="tecnologias" value=<?php echo $dados_id['tecnologias'] ?>><br>

        <label for="data_inicio">Data de Inicio:</label>
        <input type="date" name="data_inicio" id="data_inicio" value=<?php echo $dados_id['data_inicio'] ?>>

        <label for="data_fim">Data de fim:</label>
        <input type="date" name="data_fim" id="data_fim" value=<?php echo $dados_id['data_fim'] ?>><br><br>

        <label for="status_projeto">Status:</label><br>
        <input type="text" name="status_projeto" id="status_projeto" value=<?php echo $dados_id['status_projeto'] ?>>

        <input type="submit" value="Atualizar">

        <a href="index.php" class="button">voltar</a>

    </form>
    </div>

</body>

</html>