<?php
    include "configuracao.php";
    switch ($_REQUEST["acao"]){
        case"cadastrar" :
            $nome = $_POST["nome"];
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];

            $sql = "INSERT INTO prova (nome, nota1, nota2) VALUES ('{$nome}','{$nota1}','{$nota2}')";
            $res = $conn->query($sql);
            if($res==true){
                echo "<script>alert('Cadastro com Sucesso!');</script>";
                echo "<script>window.location.href = '../cadastrar/listarAlunos.php';</script>";
            }else{
                echo "<script>alert('Não foi possível cadastrar!');</script>";
                echo "<script>window.location.href = '../cadastrar/listarAlunos.php';</script>";
            }
            break;
    }

?>