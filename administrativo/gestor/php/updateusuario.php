
<html>

<head>
	<title>Update Usuario</title>
	<script type="text/javascript">
		function updatesucesso(){
			setTimeout("window.location='/visaosystem/listausu.php'", 0);
		}
		
	</script>
</head>
<body>
<?php
$idusuario = $_GET["idusuario"];
$mysqli = new mysqli('localhost', 'root', '', 'visaosystem');


$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$tipousu = $_POST['cargo'];
$ativo = $_POST['ativo'];



$sql="UPDATE usuario
SET usuario.nomeusu = '$nome', usuario.loginusu = '$login', usuario.senha = '$senha', usuario.ativo = '$ativo',  usuario.tipousu = '$tipousu' WHERE usuario.idusuario = '$idusuario' ";

$executaConexaoQuery = mysqli_query($mysqli,$sql) or die('Erro ao inserir os dados '.mysqli_error($mysqli)) ;
mysqli_close($mysqli);

echo "<script>updatesucesso()</script>";


?>
</body>
</html>