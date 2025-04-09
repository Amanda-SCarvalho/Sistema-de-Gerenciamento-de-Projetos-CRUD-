<?php

include "database.php";

$id_projeto = $_POST['id_projeto'];
$cliente = $_POST['cliente'];
$titulo_projeto = $_POST['titulo_projeto'];
$descricao = $_POST['descricao'];
$tecnologias = $_POST['tecnologias'];
$data_inicio = $_POST['data_inicio'];
$data_fim = $_POST['data_fim'];
$status_projeto = $_POST['status_projeto'];


$sql_update = "UPDATE projetos 
    SET cliente = '$cliente', 
    titulo_projeto = '$titulo_projeto',
    descricao = '$descricao',
    tecnologias = '$tecnologias',
    data_inicio = '$data_inicio',
    data_fim = '$data_fim',
    status_projeto = '$status_projeto'
    WHERE projetos.id = '$id_projeto'";

if (mysqli_query($conexao, $sql_update)) {
    header("Location: index.php");
} else {
    echo ("Falha ao atualizar");
}
