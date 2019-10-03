
<?php
session_start();
$id = $_SESSION['id'];
$nome = $_SESSION['usuario'];
?>

<html>

<head>
	<title>Insert Caixa</title>
</head>

<script type="text/javascript">
		function loginsucesso(){
			setTimeout("window.location='/visaosystem/listacaixa.php'", 0);
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

$numero = $_POST['numero'];
$ativo = $_POST['ativo'];
$sqlcaixa = mysqli_query($conexao, "INSERT INTO caixa(numero, ativo)
VALUES ('$numero', '$ativo')");

echo "<script>loginsucesso()</script>";

mysqli_close($conexao);
?>
</body>
</html>
