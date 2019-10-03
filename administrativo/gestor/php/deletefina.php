
<?php
session_start();
$id = $_SESSION['id'];
$nome = $_SESSION['usuario'];
$idfina = $_GET['idfina'];
?>

<html>

<head>
	<title>Delete Fina</title>
</head>

<script type="text/javascript">
		function loginsucesso(){
			setTimeout("window.location='/visaosystem/listafina.php'", 0);
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
$sqlfina = mysqli_query($conexao, "DELETE FROM finalizadora WHERE idfina = '$idfina'");

mysqli_query($conexao, $sqlfina);
mysqli_close($conexao);

echo "<script>loginsucesso()</script>";

?>
</body>
</html>
