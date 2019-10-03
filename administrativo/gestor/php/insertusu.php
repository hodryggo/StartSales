
<?php
session_start();
$id = $_SESSION['id'];
$nome = $_SESSION['usuario'];
?>

<html>

<head>
	<title>Insert Usu</title>
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

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$ativo = $_POST['ativo'];
$tipousu = $_POST['cargo'];
$sqlusu = mysqli_query($conexao, "INSERT INTO usuario (nomeusu, loginusu, senha, ativo, tipousu) VALUES ('$nome', '$login', '$senha', '$ativo', '$tipousu')");

mysqli_query($conexao, $sqlusu);
mysqli_close($conexao);

echo "<script>loginsucesso()</script>";
?>
</body>
</html>
