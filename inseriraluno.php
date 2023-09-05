<?php
include "conexao.php";

$aluno     = $_GET['aluno'];
$turma     = $_GET['turma'];
$mensal    = $_GET['mensal'];
$dtinicio  = $_GET['dtinicio'];

//echo "Bem vindo {$aluno} sua turma é: {$turma} <br>
//e sua mensalidade: {$mensal} e o início: {$dtinicio}";

//Criar Variável com o comando sql:
$sql = "insert into tblaluno (aluno,turma,mensal,dtinicio)
values ('$aluno', '$turma', '$mensal', '$dtinicio')";

//criar variável para executar o comando sql:
$qry = mysqli_query ($con, $sql);
if ($qry){
    header ('location:listarAlunos.php');
} else {
    echo "<h1> Registro não cadastrado </h1>";
}