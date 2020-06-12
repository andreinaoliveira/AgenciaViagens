<?php include 'header.php';?>
<?php include 'cadastrarCliente.php';?>

<div id="allDiv">
	<div id="esqLogin" class="container">
		<div id="esqTextoLogin">
			<center><h1 id="h1especial">Login</h1></center>
			<form action="logarCliente.php" method="post">
				<table>
					<tr>
						<td>
							<label for="email">E-mail:</label>
						</td>

						<td>
							<input type="email" id="email" name="email" required placeholder="E-mail">
						</td>
					</tr>

					<tr>
						<td>
							<label for="senha">Senha:</label>
						</td>

						<td>
							<input type="password" id="senha" name="senha" minlength="8" required placeholder="Senha">
						</td>
					</tr>

					<tr>
						<td>
							<input type="checkbox" id="lembrar" name="lembrar">
						</td>

						<td>
							<label for="lembrar">Lembrar de mim</label>
						</td>
					</tr>
				</table>

			    <center>
			    	<div id="whiteButton"><input type="submit" value="Logar"></div>
			    </center>
			</form>
		</div>
	</div>

	<div id="dirLogin" class="container">
		<div id="dirTextoLogin">
			<center><h1>Cadastro</h1></center>
			<form onsubmit="" method="post" name="cadastro" onsubmit='return validar()'>
				<table>
					<tr>
						<td>
							<label for="nome">Nome:</label>
						</td>
						<td>
							<input type="text" id="nome" name="nome" required placeholder="Nome">
						</td>
					</tr>

					<tr>
						<td>
							<label for="sobrenome">Sobrenome:</label>
						</td>
						<td>
							<input type="text" id="sobrenome" name="sobrenome" required placeholder="Sobrenome">
						</td>
					</tr>

					<tr>
						<td>
							<label for="cpf">CPF:</label>
						</td>
						<td>
							<input type="text" id="cpf" name="cpf" minlength="11" maxlength="11" required placeholder="CPF">
						</td>
					</tr>

					<tr>
						<td>
							<label for="nascimento">Data de Nascimento:</label><br>
						</td>
						<td>
							<input id="nascimento" name="nascimento" type="date"><br>
						</td>
					</tr>

					<tr>
						<td>
							<label for="email">E-mail:</label>
						</td>
						<td>
							<input type="email" id="email" name="email" required placeholder="E-mail">
						</td>
					</tr>

					<tr>
						<td>
							<label for="senha">Senha:</label>
						</td>
						<td>
							<input type="password" id="senha" name="senha" minlength="8" required placeholder="Senha">
						</td>
					</tr>
				</table>

				<center>
					<input type="submit" name="button" value="Cadastrar">
				</center>
			</form>
		</div>
	</div>
</div>

<script>
	function validar() {
		let nome = document.forms['cadastro']['nome'].value;
		if (nome.indexOf('0') >=0 || nome.indexOf('1')>=0 || nome.indexOf('2')>=0 || nome.indexOf('3')>=0 || nome.indexOf('4')>=0 || nome.indexOf('5')>=0 || nome.indexOf('6')>=0 || nome.indexOf('7')>=0 || nome.indexOf('8')>=0 || nome.indexOf('9')>=0){
		alert ("Por favor, no campo Nome digite apenas letras"); 
		return false;
		}

		let sobrenome = document.forms['cadastro']['sobrenome'].value;
		if (sobrenome.indexOf('0') >=0 || sobrenome.indexOf('1')>=0 || sobrenome.indexOf('2')>=0 || sobrenome.indexOf('3')>=0 || sobrenome.indexOf('4')>=0 || sobrenome.indexOf('5')>=0 || sobrenome.indexOf('6')>=0 || sobrenome.indexOf('7')>=0 || sobrenome.indexOf('8')>=0 || sobrenome.indexOf('9')>=0){
		alert ("Por favor, no campo Sobrenome digite apenas letras"); 
		return false;
		}
	}
</script>

<?php include 'footer.php';?>
