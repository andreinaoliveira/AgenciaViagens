<?php 
	$conexao = new mysqli("localhost","root","","azulviagens") or die("Erro na conexão com o banco de dados");
	$email= $_POST['email'];
	$senha= $_POST['senha'];

	$sql= "select codigo,nome,email,senha from cliente where email='$email' and senha='$senha'";

	$query= mysqli_query($conexao,$sql);
	$linhas= mysqli_affected_rows($conexao);

	if ($linhas>0) {
		session_start();
		$_SESSION['email']=$email;
		while($exibirNome=mysqli_fetch_array($query)) {
			
			$codigo= $exibirNome[0];
			$nome= $exibirNome[1];
			$email= $exibirNome[2];
			$senha= $exibirNome[3];
			
		}
		$_SESSION['nome']=$nome;
		$_SESSION['senha']=$senha;
		if (($_SESSION['email']=="$email")&&($_SESSION['senha']=="$senha")) {
			header("Location:index.php");
		}else{
			echo "<center>Dados Incorretos!</center><br>";
			echo "<center><a href='index.php'>Voltar</a></center><br>";
		}		
	}else{
		echo "<center>Dados Incorretos!</center><br>";
		echo "<center><a href='login.php'>Voltar</a></center><br>";
	}
?>