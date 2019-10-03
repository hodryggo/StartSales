
<?php
session_start();
$id = $_SESSION['id'];
$nome = $_SESSION['usuario'];
$idcliente = $_GET['idcliente'];
?>

<html>

<head>
	<title>Cadastro de Cliente</title>
</head>

<script type="text/javascript">
		function loginsucesso(){
			setTimeout("window.location='/visaosystem/listacliente.php'", 0);
		}
	</script>

<body>
<?php
$host = "localhost";
$user = "root";
$senha = "";
$banco = "visaosystem";
$conexao = mysqli_connect ($host, $user, $senha) or die (mysql_error());
mysqli_select_db($conexao, $banco) or die (mysql_error());
?>
<?php
$sqlcontato = mysqli_query($conexao, "DELETE FROM contatocli WHERE idcliente = '$idcliente'");

mysqli_query($conexao, $sqlcontato);
mysqli_close($conexao);

?>
<?php
	$host = "localhost";
	$user = "root";
	$senha = "";
	$banco = "visaosystem";
	$conexao2 = mysqli_connect ($host, $user, $senha) or die (mysql_error());
	mysqli_select_db($conexao2, $banco) or die (mysql_error());
?>
<?php
$sqlendereco = mysqli_query($conexao2, "DELETE FROM enderecocli WHERE idcliente = '$idcliente'");

mysqli_query($conexao2, $sqlendereco);
mysqli_close($conexao2);
?>
<?php
	$host = "localhost";
	$user = "root";
	$senha = "";
	$banco = "visaosystem";
	$conexao3 = mysqli_connect ($host, $user, $senha) or die (mysql_error());
	mysqli_select_db($conexao3, $banco) or die (mysql_error());
?>
<?php
$sqlcliente = mysqli_query($conexao3, "DELETE FROM cliente WHERE idcliente = '$idcliente'");

mysqli_query($conexao3, $sqlcliente);
mysqli_close($conexao3);
echo "<script>loginsucesso()</script>";
?>
</body>
</html>
