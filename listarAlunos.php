<?php
include "conexao.php";
$sql = "select * from tblaluno";
$qry = mysqli_query ($con,$sql);
//var_dump($qry);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alunos PHP</title>
</head>
<body>
    <h1> Listagem de Alunos </h1>
    <hr>
    <?php 
    while ($linha = mysqli_fetch_array($qry)) {
        $id=$linha['id'];
        echo $linha ['id']."<br>";
        echo "Aluno: ".$linha ['aluno']."<br>";
        echo "Turma: ".$linha ['turma']."<br>";
        echo "Mensalidade: ".$linha ['mensal']."<br>";
        echo "Data de início: ".$linha ['dtinicio']."<br>";
        echo "<a href='editar.php?id={$id}'>Editar</a>";
        echo "<hr>";
    }
    ?>
    
</body>
</html>