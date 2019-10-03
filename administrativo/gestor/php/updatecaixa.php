
<html>

<head>
	<title>Update Caixa</title>
	<script type="text/javascript">
		function updatesucesso(){
			setTimeout("window.location='/visaosystem/listacaixa.php'", 0);
		}
		
	</script>
</head>
<body>
<?php
$idcaixa = $_GET['idcaixa'];
$mysqli = new mysqli('localhost', 'root', '', 'visaosystem');


$numero = $_POST['numero'];
$ativo = $_POST['ativo'];



$sql="UPDATE caixa 
SET caixa.numero = '$numero', caixa.ativo = '$ativo' WHERE idcaixa = '$idcaixa'";

$executaConexaoQuery = mysqli_query($mysqli,$sql) or die('Erro ao inserir os dados '.mysqli_error($mysqli)) ;
mysqli_close($mysqli);

echo "<script>updatesucesso()</script>";


?>
</body>
</html>