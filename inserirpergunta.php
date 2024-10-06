<?php
session_start(); //Ainda falta inserir a conexão com o BD para funcionar
include('conexao.php');

$Pergunta = $_POST['Pergunta'];//obtem os valores com base nos nomes dos atributos no formulário
$AlterA = $_POST['AlterA'];
$AlterB = $_POST['AlterB'];
$AlterC = $_POST['AlterC'];
$AlterD = $_POST['AlterD'];
$Correta = $_POST['Correta'];
$sql = "INSERT INTO pergunta (Pergunta, AlterA, AlterB, AlterC, AlterD, Correta) VALUES('$Pergunta', '$AlterA', '$AlterB', '$AlterC', '$AlterD', '$Correta')";
//cria uma instrução SQL para inserir os dados no banco de dados
if ($conn->query($sql) === TRUE) { //verifica se a inserção foi bem sucedida
    echo "Pergunta cadastrada com sucesso!";
    echo "<br><a href='index.html'>Voltar</a>";
    }else {
        echo "Erro ao inserir informações: " .$conn->error;
    }
    $conn->close(); //fecha a conexão com o BD

?>