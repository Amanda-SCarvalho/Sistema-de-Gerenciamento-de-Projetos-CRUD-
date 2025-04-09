<?php
// Incluir o Arquivo de conexão com o db
include 'database.php';

// construir a string em SQL ( Criar o comando)
$sql_listar = "SELECT * FROM projetos";

//Declarar uma variável que irá receber o resultado da função mysqli_query ao qual realiza a conexão com o BD e executa o comando em SQL
$resultado = mysqli_query($conexao, $sql_listar);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifolio</title>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>

    <ul>
        <li><a href="index.php">Portifolio</a></li>
        <li style="float:right"><a class="active" href="adicionar_projeto.php">Novo projeto</a></li>
    </ul>

    <div>
        <table id="customers">
            <thead>
                <tr>
                    <th>ID: </th>
                    <th>Cliente: </th>
                    <th>Titulo projeto: </th>
                    <th>Descrição</th>
                    <th>Tecnologias</th>
                    <th>Data de inicio</th>
                    <th>Data de fim</th>
                    <th>Status</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($dados = mysqli_fetch_assoc($resultado)):
                ?>
                    <tr>
                        <td><?php echo ($dados['id']); ?></td>
                        <td><?php echo ($dados['cliente']); ?></td>
                        <td><?php echo ($dados['titulo_projeto']); ?></td>
                        <td><?php echo ($dados['descricao']); ?></td>
                        <td><?php echo ($dados['tecnologias']); ?></td>
                        <td><?php echo ($dados['data_inicio']); ?></td>
                        <td><?php echo ($dados['data_fim']); ?></td>
                        <td><?php echo ($dados['status_projeto']); ?></td>
                        <td>
                            <a href="form_atualizar_projeto.php?id_projeto=<?php echo ($dados['id']); ?>" class="button_atualizar">Atualizar</a>
                            <a href="excluir_projeto.php?id_projeto=<?php echo ($dados['id']); ?>" class="button_excluir" >Excluir</a>
                        </td>
                    </tr>
                <?php endwhile; ?>

            </tbody>

        </table>
    </div>
    <br>
    <h3><a href="adicionar_projeto.php" class="button_novo">Novo projeto</a></h3>


</body>

</html>