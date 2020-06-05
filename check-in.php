<?php include 'header.php';?>

<?php
	//COLOCAR AQUI AVISO DE QUE NENHUMA PASSAGEM FOI SELECIONADA CASO NENHUMA SEJA SELECIONADA
	if(empty($_POST['ida'])){
		echo 'Escolha alguma';
	}else{
		$id_voo = $_POST['ida'];
	<div id="allDiv">
		<div id="checkCorpo">
			<img src="img/check-in.png">
			<div id="checkNome"><p>Andreina Oliveira</p></div>
			<div id="checkCpf"><p>123.456.789-10</p></div>
			<div id="checkOrigem"><p>Cidade de Origem</p></div>
			<div id="checkDestino"><p>Cidade de Destino</p></div>
			<div id="checkOrigemData"><p>Data/Hora</p></div>
			<div id="checkDestinoData"><p>Data/Hora</p></div>
			<div id="checkValor">R$ 0,00</div>
		</div>
	</div>
	}

?>

<?php include 'footer.php';?>
