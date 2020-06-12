<?php
	 if(isset($_POST['button'])) { 

		$conexao = new mysqli("localhost","root","","azulviagens") or die("Erro na conexão com o banco de dados");

		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$nomecliente = $nome . ' ' . $sobrenome;
		$cpfcliente = $_POST['cpf'];
		$data_nascimentocliente = $_POST['nascimento'];
		$emailcliente = $_POST['email'];
		$senhacliente = $_POST['senha'];
		
		
		$sql = "SELECT * FROM cliente WHERE cpf = $cpfcliente";
        $result = $conexao->query($sql) or die("lalalal");
        
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO cliente (nome,cpf,data_nascimento,email,senha) VALUES ('$nomecliente','$cpfcliente',
			'$data_nascimentocliente','$emailcliente','$senhacliente')";
			$conexao->query($sql) or die("Codigo já existente!<br><br><br> <input type='button' value='Voltar' onclick=location='login.php'>");
			echo "<center>";
			echo "<script> alert('Cadastro Realizado com Sucesso!'); </script>";
			echo "</center>";
		} else {
            echo "<center>";
			echo "<script> alert('Dados Replicados!'); </script>";
			echo "</center>";
		}
	}

?>
