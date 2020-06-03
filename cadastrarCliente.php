<?php
$conexao = new mysqli("localhost","root","","azulviagens") or die("Erro na conexão com o banco de dados");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nomecliente = $nome . ' ' . $sobrenome;
$cpfcliente = $_POST['cpf'];
$data_nascimentocliente = $_POST['nascimento'];
$emailcliente = $_POST['email'];
$senhacliente = $_POST['senha'];

$sql = "INSERT INTO cliente (nome,cpf,data_nascimento,email,senha) VALUES ('$nomecliente','$cpfcliente',
'$data_nascimentocliente','$emailcliente','$senhacliente')";
$conexao->query($sql) or die("Codigo já existente!<br><br><br> <input type='button' value='Voltar' onclick=location='login.php'>");
echo "<center>";
echo "<h1>Cadastro realizado!</h1><br>";
echo "<input type='button' onclick=location='index.php' value='Voltar à Tela de Interface'>";
echo "</center>";
?>