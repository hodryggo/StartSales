
<?php
session_start();
require_once '../Db/conexao.php';
$id = $_SESSION['id'];
$nome = $_SESSION['usuario'];
$idcaixa = $_GET['idcaixa'];
?>

<html>

<head>
	<title>Delete Caixa</title>
</head>

<script type="text/javascript">
		function loginsucesso(){
			setTimeout("window.location='/visaosystem/listacaixa.php'", 0);
		}
	</script>

<body>

<?php

$sqlcaixa = mysqli_query($conexao, "DELETE FROM caixa WHERE idcaixa = '$idcaixa'");

mysqli_query($conexao, $sqlcaixa);
mysqli_close($conexao);

echo "<script>loginsucesso()</script>";

?>
</body>
</html>
