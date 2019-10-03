
<?php
session_start();
$id = $_SESSION['id'];
$nome = $_SESSION['usuario'];
?>

<html>

<head>
	<title>Insert Prod</title>
</head>

<script type="text/javascript">
		function loginsucesso(){
			setTimeout("window.location='/visaosystem/listaprod.php'", 0);
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

$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$pesavel = $_POST['pesavel'];
$envia = $_POST['envia'];
$fora = $_POST['fora'];

$sqlfina = mysqli_query($conexao, "INSERT INTO produto(descricao, valorprod, pesavel, enviapdv, foradelinha)
VALUES ('$descricao', '$valor', '$pesavel', '$envia', '$fora')");

echo "<script>loginsucesso()</script>";

mysqli_close($conexao);
?>
</body>
</html>
