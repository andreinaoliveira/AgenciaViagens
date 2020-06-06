<?php include 'header.php';?>

<?php
	//COLOCAR AQUI AVISO DE QUE NENHUMA PASSAGEM FOI SELECIONADA CASO NENHUMA SEJA SELECIONADA
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
	{
		header('Location:login.php');
	}
	if(empty($_POST['ida'])){
		echo 'Escolha alguma';
	}else{
		$id_voo = $_POST['ida'];
		$sql = "SELECT voo.id,voo.horario_partida,voo.horario_chegada,voo.data_chegada,voo.data_partida,
		a.cidade AS origem ,b.cidade AS destino
			FROM voo JOIN aeroporto a ON voo.id_origem = a.id JOIN aeroporto b ON voo.id_destino = b.id
			WHERE voo.id = '$id_voo'";
		$query = mysqli_query($conexao,$sql);
		
		while ($row = $query->fetch_assoc()){
			$data_chegada = strtotime($row['data_chegada']);
			$data_partida = strtotime($row['data_partida']);
			$horario_chegada = strtotime($row['horario_chegada']);
			$horario_partida = strtotime($row['horario_partida']);
			echo '	<div id="allDiv">
					<div id="checkCorpo">
						<img src="img/check-in.png">
						<div id="checkNome"><p>'. $_SESSION['nome'] .'</p></div>
						<div id="checkOrigem"><p>'. $row['origem'] .'</p></div>
						<div id="checkDestino"><p>'. $row['destino'] .'</p></div>
						<div id="checkOrigemData"><p>'.date('d/m/Y',$data_partida).'<br>'.date('H:i',$horario_partida).'</p></div>
						<div id="checkDestinoData"><p>'.date('d/m/Y',$data_chegada).'<br>'.date('H:i',$horario_chegada).'</p></div>
						<div id="checkValor">R$ 300,00</div>
						<form>
							<div id="checkQtd">
								<label for="sim">Quantidade</label><input type="number" id="quantity" name="quantity" min="1" max="45">
							</div>
							<div id="checkConfirmar">
								<input type="submit" value="Comprar Passagem">
							</div>
						</form>
					</div>
				</div>';
		}

	}

?>

<?php include 'footer.php';?>
