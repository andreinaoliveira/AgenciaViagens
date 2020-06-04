<?php include 'header.php';?>

<div id="allDiv">
	<form action="check-in.php" method="get">
		<div id="voo1">
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