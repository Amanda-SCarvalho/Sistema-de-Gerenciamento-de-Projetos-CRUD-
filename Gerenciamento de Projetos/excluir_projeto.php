<?php

include "database.php";

$id_projeto = $_GET['id_projeto'];

// 3° passo - construir uma string para realizar a consulta em SQL por id 
$sql_exclui_por_id = "DELETE FROM projetos WHERE projetos.id = '$id_projeto'";

// 4° realizar o mesmo procedimento realizado ao cadastrar uma informação no banco de dados
if(mysqli_query($conexao, $sql_exclui_por_id))
{
    // vamos utilizar outro comando para redirecionar outra pagina
    header("Location: index.php");
    echo("Projeto excluido com sucesso!!!");
}
else{
    echo ("Erro ao excluir cadastro!");
}