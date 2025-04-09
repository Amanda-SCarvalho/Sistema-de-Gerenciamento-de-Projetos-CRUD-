<?php
    include "database.php";

        $cliente = $_POST['cliente'];
        $titulo_projeto = $_POST['titulo_projeto'];
        $descricao= $_POST['descricao'];
        $tecnologias	= $_POST['tecnologias'];
        $data_inicio = $_POST['data_inicio'];
        $data_fim = $_POST['data_fim'];
        $status_projeto= $_POST['status_projeto'];
        

    //Construir uma String com comando SQL
    $sql="INSERT INTO projetos (cliente,titulo_projeto,descricao,tecnologias,data_inicio,data_fim,status_projeto) 
        VALUES ('$cliente','$titulo_projeto','$descricao','$tecnologias','$data_inicio','$data_fim','$status_projeto')";
    
    //Criar uma condicional para inserção  de valores no DB
    //Utilizando a função mysqli_query
    if (mysqli_query($conexao,$sql))
    {
        header("Location: index.php");
       
    }
        else
        {
            echo("Falha no cadastro");
        }  
?>