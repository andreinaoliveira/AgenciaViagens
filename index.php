<?php include 'header.php';?>

<video width="100%" autoplay style="z-index: 1; ">
	<source src="video/banner.mp4" type="video/mp4">
	Your browser does not support the video tag.
</video>

<div id="busca">
	<form action="busca.php" method="post">
		<h1>Buscar Passagem</h1>
		<label>Origem:</label><br>
			<select name="origem" id="origem">
				<?php 
					$conexao = new mysqli("localhost","root","","azulviagens") or die("Erro na conexão com o banco de dados");
					$sql = mysqli_query($conexao,"SELECT cidade,estado FROM aeroporto");
					while ($row = $sql->fetch_assoc()){
						echo "<option value=\"origem1\">" . $row['cidade'] . " (". $row['estado'] .")" . "</option>";
					}
				?>
			</select><br>

		<label>Destino:</label><br>
			<select name="destino" id="destino">
				<?php 
					$conexao = new mysqli("localhost","root","","azulviagens") or die("Erro na conexão com o banco de dados");
					$sql = mysqli_query($conexao,"SELECT cidade,estado FROM aeroporto");
					while ($row = $sql->fetch_assoc()){
						echo "<option value=\"destino1\">" . $row['cidade'] . " (". $row['estado'] .")" . "</option>";
					}
				?>
			</select><br>

		<input type="submit" value="Buscar">
	</form>
</div>

<?php include 'footer.php';?>
