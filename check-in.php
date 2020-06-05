<?php include 'header.php';?>

<?php
	//COLOCAR AQUI AVISO DE QUE NENHUMA PASSAGEM FOI SELECIONADA CASO NENHUMA SEJA SELECIONADA
	if(empty($_POST['ida'])){
		echo 'Escolha alguma';
	}else{
		$id_voo = $_POST['ida'];
	//ANDREINA FAZER A TELA DE CHECK-IN
	}

?>

<?php include 'footer.php';?>