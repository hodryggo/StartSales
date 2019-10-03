
<html>

<head>
	<title>Update Prod</title>
	<script type="text/javascript">
		function updatesucesso(){
			setTimeout("window.location='/visaosystem/listaprod.php'", 0);
		}
		
	</script>
</head>
<body>
<?php
$idproduto = $_GET['idproduto'];
$mysqli = new mysqli('localhost', 'root', '', 'visaosystem');


$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$pesavel = $_POST['pesavel'];
$envia = $_POST['envia'];
$fora = $_POST['fora'];



$sql="UPDATE produto 
SET produto.descricao = '$descricao', produto.valorprod = '$valor', produto.pesavel = '$pesavel', produto.enviapdv = '$envia', produto.foradelinha = '$fora' WHERE idproduto = '$idproduto'";

$executaConexaoQuery = mysqli_query($mysqli,$sql) or die('Erro ao inserir os dados '.mysqli_error($mysqli)) ;
mysqli_close($mysqli);

echo "<script>updatesucesso()</script>";


?>
</body>
</html>