<?php

$host = "localhost";
$user = "root";
$senha = "";
$banco = "visaosystem";
$conexao = mysqli_connect($host, $user, $senha) or die (mysql_error());
mysqli_select_db($conexao, $banco) or die (mysql_error());

?>

<html>

<head>
	<title>Valida Login</title>
	<script type="text/javascript">
		function loginsucesso(){
			setTimeout("window.location='/visaosystem/index.php'", 0);
		}
		
		function loginerrado(){
			setTimeout("window.location='/visaosystem/login.html'", 2000);
		} 
		
	</script>
</head>

<body>
<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$sql =  mysqli_query ($conexao, "SELECT idusuario, nomeusu, tipousu FROM usuario WHERE loginusu = '$usuario' and senha = '$senha'") or die(mysqli_error());
$msl;
	if($msl = mysqli_fetch_array($sql)) {
		session_start();
		$_SESSION['usuario']=$_POST['usuario'];
		$_SESSION['senha']=$_POST['senha'];
		$_SESSION['id']=$msl['idusuario'];
		$_SESSION['nome']=$msl['nomeusu'];
		$_SESSION['tipousu']=$msl['tipousu'];
		;
		echo "<script>loginsucesso()</script>";
	} 
	
	else{	
		echo "<center>Nome de usúario ou senha invalidados</center>";
		echo "<script>loginerrado()</script>";
	}
?>
</body>

</html>