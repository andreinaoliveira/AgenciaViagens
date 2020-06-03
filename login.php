<?php include 'header.php';?>

<div id="allDiv">
	<div id="esqLogin" class="container">
		<div id="textoLogin">
			<center><h1 id="h1especial">Login</h1></center>
			<form action="#" method="get">
				<table>
					<tr>
						<td>
							<label for="email">E-mail:</label>
						</td>

						<td>
							<input type="text" id="email" name="email" required placeholder="E-mail">
						</td>
					</tr>

					<tr>
						<td>
							<label for="senha">Senha:</label>
						</td>

						<td>
							<input type="password" id="pass" name="password" minlength="8" required placeholder="Senha">
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
			    	<input type="submit" value="Logar">
			    </center>
			</form>
		</div>
	</div>

	<div id="dirLogin" class="container">
		<div id="textoLogin">
			<center><h1>Cadastro</h1></center>
			<form action="#" method="get">
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
							<input type="text" id="cpf" name="cpf" required placeholder="CPF">
						</td>
					</tr>

					<tr>
						<td>
							<label for="nascimento">Data de Nascimento:</label><br>
						</td>
						<td>
							<input id="nascimento" type="date"><br>
						</td>
					</tr>

					<tr>
						<td>
							<label for="email">E-mail:</label>
						</td>
						<td>
							<input type="text" id="email" name="email" required placeholder="E-mail">
						</td>
					</tr>

					<tr>
						<td>
							<label for="senha">Senha:</label>
						</td>
						<td>
							<input type="password" id="pass" name="password" minlength="8" required placeholder="Senha">
						</td>
					</tr>
				</table>

				<center>
					<input type="submit" value="Cadastrar">
				</center>
			</form>
		</div>
	</div>
</div>

<?php include 'footer.php';?>