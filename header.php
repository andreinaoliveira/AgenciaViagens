<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Agência de Viagens</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header>
			<div class="container">
				<img src="img/logo.png" width="100px" id="logo">
				<nav id="menu">
					<a href="index.php">Home</a>
					<a href="promocoes.php">Promoções</a>
					<a href="contato.php">Fale conosco</a>
					<?php
					$conexao = new mysqli("localhost","root","","azulviagens") or die("Erro na conexão com o banco de dados");
					session_start();
						if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
						{
							echo '<a href="login.php"><img border="0" alt="Login" src="img/logar.png" height="40px"></a>';
						}else{
							$logado = $_SESSION['email'];
							echo '<a href="deslogar.php">Sair</a>';
						}
						
					?>
				</nav>
			</div>
		</header>
