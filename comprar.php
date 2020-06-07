<?php include 'header.php';?>
<?php
$cliente = $_SESSION['codigo'];
$voo = $_POST['voo'];
$qtd = $_POST['qtd'];
$preco = $qtd*300.00;
$sql = "INSERT INTO passagem (preco,quantidade,id_cliente,id_voo) VALUES ($preco,$qtd,$cliente,$voo)";
$conexao->query($sql) or die("Codigo já existente!<br><br><br> <input type='button' value='Voltar' onclick=location='index.php'>");
echo 'Compra de '.$preco.' realizada!';
$sql_voo = "SELECT id_aviao FROM voo WHERE id = $voo";
$query = mysqli_query($conexao,$sql_voo);
	while ($row = $query->fetch_assoc()){
		$aviao = $row['id_aviao'];
	}
$sql_aviao = "UPDATE  aviao SET vagas = vagas - $qtd WHERE id=$aviao";
$conexao->query($sql_aviao) or die("Codigo já existente!<br><br><br> <input type='button' value='Voltar' onclick=location='index.php'>");
?>