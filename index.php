<?php include 'header.php';?>

<video width="100%" autoplay style="z-index: 1; ">
	<source src="video/banner.mp4" type="video/mp4">
	Your browser does not support the video tag.
</video>

<div id="busca">
	<form action="busca.php" method="get">
		<h1>Buscar Passagem</h1>
		<label>Origem:</label><br>
		<select id="origem">
			<option value="AM">Manaus (AM)</option>
			<option value="SP">São Paulo (SP)</option>
			<option value="RJ">Rio de Janeiro (RJ)</option>
		</select><br>

		<label>Destino:</label><br>
		<select id="desitno">
			<option value="RJ">Rio de Janeiro (RJ)</option>
			<option value="AM">Manaus (AM)</option>
			<option value="SP">São Paulo (SP)</option>
		</select><br>

		<input type="submit" value="Buscar">
	</form>
</div>

<?php include 'footer.php';?>