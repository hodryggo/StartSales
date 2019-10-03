
<?php
session_start();
$id = $_SESSION['id'];
$nome = $_SESSION['usuario'];
?>

<html>

<head>
	<title>Insert Fina</title>
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

$nome = $_POST['nome'];
$tipofina = $_POST['tipo'];
$sqlfina = mysqli_query($conexao, "INSERT INTO finalizadora(nome, tipofina)
VALUES ('$nome', '$tipofina')");

echo "<script>loginsucesso()</script>";

mysqli_close($conexao);
?>
</body>
</html>
