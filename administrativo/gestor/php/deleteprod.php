
<?php
session_start();
$id = $_SESSION['id'];
$nome = $_SESSION['usuario'];
$idprod = $_GET['idproduto'];
?>

<html>

<head>
	<title>Delete Caixa</title>
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
$sqlprod = mysqli_query($conexao, "DELETE FROM produto WHERE idproduto = '$idprod'");

mysqli_query($conexao, $sqlprod);
mysqli_close($conexao);

echo "<script>loginsucesso()</script>";

?>
</body>
</html>
