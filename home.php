<?php include 'header.php';?>
		<video width="100%" autoplay style="z-index: 1; ">
			<source src="video/banner.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		
		<div id="home">
			<form action="/action_page.php" method="get">
				 <label>Origem:</label><br>
				 <select id="origem">
				 	<option value="Africa">Nairobi - Quênia</option>
				 	<option value="Egito">Gizé - Egito</option>
				 	<option value="Orlando">Orlando - Flórida</option>
				  	<option value="Mexico">Cancún - México</option>
				</select><br>

				<label>Destino:</label><br>
				 <select id="desitno">
				 	<option value="Egito">Gizé - Egito</option>
				 	<option value="Orlando">Orlando - Flórida</option>
				  	<option value="Mexico">Cancún - México</option>
				  	<option value="Africa">Nairobi - Quênia</option>
				</select><br>

				<label>Ida:</label><br>
				<input id="ida" type="date"><br>

				<label>Volta:</label><br>
				<input id="volta" type="date"><br>

				 <input type="submit" value="Buscar">
			</form>
<?php include 'footer.php';?>