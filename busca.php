<?php include 'header.php';?>

<div id="allDiv">
	<form action="check-in.php" method="get">
		<div id="voo1">
			<img src="img/voo.PNG">
			<?php
				$origem = $_POST['origem'];
				$destino = $_POST['destino'];

				$sql_origem = "SELECT id,cidade,codigo_aita FROM aeroporto WHERE id = '$origem'";
				$sql_destino = "SELECT id,cidade,codigo_aita FROM aeroporto WHERE id = '$destino'";

				$sql_voo = "SELECT id,horario_partida,horario_chegada FROM voo WHERE id_origem = '$origem' AND id_destino = '$destino'";

				$query= mysqli_query($conexao,$sql_voo);
				$linhas= mysqli_affected_rows($conexao);

				if ($linhas>0) {
					while($exibirNome=mysqli_fetch_array($query)) {
			
					$id_voo= $exibirNome[0];
					$horario_partida= $exibirNome[1];
					$horario_chegada= $exibirNome[2];
			
					}
				}else{
					//colocar JavaScript de aviso que não tem aqui!
					header("Location:teste.php");
				}

				$query= mysqli_query($conexao,$sql_origem);
				$linhas= mysqli_affected_rows($conexao);

				if ($linhas>0) {
					while($exibirNome=mysqli_fetch_array($query)) {
			
					$id_origem= $exibirNome[0];
					$cidade_origem= $exibirNome[1];
					$aita_origem= $exibirNome[2];
			
					}
				}

				$query= mysqli_query($conexao,$sql_destino);
				$linhas= mysqli_affected_rows($conexao);

				if ($linhas>0) {
					while($exibirNome=mysqli_fetch_array($query)) {
			
					$id_destino= $exibirNome[0];
					$cidade_destino= $exibirNome[1];
					$aita_destino= $exibirNome[2];
			
					}
				}
				echo'<p id="vooTitulo"> '. $aita_origem .' - '. $aita_destino .'</p>';
			?>
			<div id="vooOrigem">
				<p><?php echo $cidade_origem; ?></p>
				<p><?php echo $horario_partida; ?></p>
			</div>
			
			<div id="vooDestino">		
				<p><?php echo $cidade_destino ?></p>
				<p><?php echo $horario_chegada; ?></p>
			</div>
			<div id="vooSel">
				<center>
					<input type="radio" name="ida" id="sim" value="sim">
					<label for="sim">Selecionar Passagem</label>
				</center>
			</div>
		</div>

		<div id="voo2">
			<img src="img/voo.PNG">
			<p id="vooTitulo">SAO - MAO</p>

			<div id="vooOrigem">
				<p>São Paulo</p>
				<p>23:00</p>
			</div>
			
			<div id="vooDestino">		
				<p>Manaus</p>
				<p>00:00</p>
			</div>

			<div id="vooSel">
				<center>
					<input type="radio" name="ida" id="sim" value="sim">
					<label for="sim">Selecionar Passagem</label>
				</center>
			</div>

		</div>

		<div id="voo3">
			<img src="img/voo.PNG">
			<p id="vooTitulo">SAO - MAO</p>

			<div id="vooOrigem">
				<p>São Paulo</p>
				<p>23:00</p>
			</div>
			
			<div id="vooDestino">		
				<p>Manaus</p>
				<p>00:00</p>
			</div>

			<div id="vooSel">
				<center>
					<input type="radio" name="ida" id="sim" value="sim">
					<label for="sim">Selecionar Passagem</label>
				</center>
			</div>

		</div>

		<div id="vooComprar">
			<center>
				<input type="submit" value="Comprar Passagem">
			</center>
		</div>
	</form>
</div>

<?php include 'footer.php';?>
