
<html>

<head>
	<title>Update Finalizadora</title>
	<script type="text/javascript">
		function updatesucesso(){
			setTimeout("window.location='/visaosystem/listafina.php'", 0);
		}
		
	</script>
</head>
<body>
<?php
$idfina = $_GET['idfina'];
$mysqli = new mysqli('localhost', 'root', '', 'visaosystem');


$nome = $_POST['nome'];
$tipofina = $_POST['tipo'];



$sql="UPDATE finalizadora 
SET finalizadora.nome = '$nome', finalizadora.tipofina = '$tipofina' WHERE idfina = '$idfina'";

$executaConexaoQuery = mysqli_query($mysqli,$sql) or die('Erro ao inserir os dados '.mysqli_error($mysqli)) ;
mysqli_close($mysqli);

echo "<script>updatesucesso()</script>";


?>
</body>
</html>