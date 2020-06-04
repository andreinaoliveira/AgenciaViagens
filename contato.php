<?php include 'header.php';?>
	<div id="allContato">
		<div id="contato">
			
				<h1 id="h1especial">Contato</h1>
				
				<form>
					<input type="text" id="nome" name="nome" required placeholder="Nome">
					<input type="text" id="sobrenome" name="sobrenome" required placeholder="Sobrenome">
					<textarea name="comentário" rows="10" cols="40">Escreva seu comentário....</textarea>

					<div id="whiteButton">
						<center><input type="submit" value="Enviar"></center>
					</div>
				</form>
		</div>
	</div>
<?php include 'footer.php';?>