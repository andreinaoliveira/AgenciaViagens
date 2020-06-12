<?php include 'header.php';?>

<div id="allDiv">
	<form action="check-in.php" method="post">
			<?php
			$cont = 1;
			
			$origem = $_POST['origem'];
			$destino = $_POST['destino'];
			
			$sql = "SELECT voo.id,voo.horario_partida,voo.horario_chegada,
			a.cidade AS origem ,a.codigo_aita AS origem_aita,b.cidade AS destino,b.codigo_aita AS destino_aita
			FROM voo JOIN aeroporto a ON voo.id_origem = a.id JOIN aeroporto b ON voo.id_destino = b.id
			WHERE voo.id_origem = '$origem' AND voo.id_destino = '$destino' ORDER BY id DESC LIMIT 0,3";

			$query= mysqli_query($conexao,$sql);

			while ($row = $query->fetch_assoc()){
				echo '	<div id="voo'.$cont.'">
							<img src="img/voo.PNG">
							<p id="vooTitulo">'. $row['origem_aita'] .' - '. $row['destino_aita'] .'</p>

							<div id="vooOrigem">
								<p>'. $row['origem'] .'</p>
								<p>'. $row['horario_partida'] .'</p>
							</div>
			
							<div id="vooDestino">		
								<p>'. $row['destino'] .'</p>
								<p>'. $row['horario_chegada'] .'</p>
							</div>

							<div id="vooSel">
								<center>
									<input type="radio" name="ida" id="sim" value="'. $row['id'] .'" required>
									<label for="sim">Selecionar Passagem</label>
								</center>
							</div>

						</div>';
				$cont=$cont+1;
			}
		?>

		<div id="vooComprar">
			<center>
				<input type="submit" value="Comprar Passagem">
			</center>
		</div>
	</form>
</div>

<?php include 'footer.php';?>
