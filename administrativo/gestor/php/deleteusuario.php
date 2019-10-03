
<?php
session_start();
$id = $_SESSION['id'];
$nome = $_SESSION['usuario'];
$idusuario = $_GET['idusuario'];
?>

<html>

<head>
	<title>Delete Usuario</title>
</head>

<script type="text/javascript">
		function loginsucesso(){
			setTimeout("window.location='/visaosystem/listausu.php'", 0);
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
$sqlcargo = mysqli_query($conexao, "DELETE FROM cargo WHERE idusuario = '$idusuario'");

mysqli_query($conexao, $sqlcargo);
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
$sqlusuario = mysqli_query($conexao2, "DELETE FROM usuario WHERE idusuario = '$idusuario'");

mysqli_query($conexao2, $sqlusuario);
mysqli_close($conexao2);
echo "<script>loginsucesso()</script>";
?>
</body>
</html>
