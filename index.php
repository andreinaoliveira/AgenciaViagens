<?php include 'header.php';?>

<video width="100%" autoplay style="z-index: 1; ">
	<source src="video/banner.mp4" type="video/mp4">
	Your browser does not support the video tag.
</video>

<div id="busca">
	<form action="busca.php" onsubmit='return mesmodestino()' method="post" name='form'>
		<center><table>
			<tr>
				<td>
					<img src="img/comprarPassagem.png">
				</td>
				<td id="buscatd">
					<label>Origem:</label><br>
					<select name="origem" id="origem">
					<?php 
						$sql = mysqli_query($conexao,"SELECT id,cidade,estado FROM aeroporto");
						while ($row = $sql->fetch_assoc()){
							echo "<option value=" . $row['id'] .">" . $row['cidade'] . " (". $row['estado'] .")" . "</option>";
						}
					?>
					</select>
				</td>
				<td id="buscatd">
					<label>Destino:</label><br>
					<select name="destino" id="destino">
					<?php 
						$sql = mysqli_query($conexao,"SELECT id,cidade,estado FROM aeroporto");
						while ($row = $sql->fetch_assoc()){
							echo "<option value=". $row['id'] .">" . $row['cidade'] . " (". $row['estado'] .")" . "</option>";
						}
					?>
					</select>
				</td>
				<td id="buscatd">
					<div id="whiteButton"><input type="submit" value="Buscar"></div>
				</td>
			</tr>
		</table></center>
	</form>
</div>

<script>
	function mesmodestino(){
		let origem = document.forms['form']['origem'].value;
		let destino = document.forms['form']['destino'].value;
		if(origem == destino){
		alert('Favor, escolha um destino diferente!');
		return false;
		}
	}
</script>

<?php include 'footer.php';?>
