
<?php
session_start();
$id = $_SESSION['id'];
$nome = $_SESSION['usuario'];
?>

<html>

<head>
	<title>Insert Estab</title>
</head>

<script type="text/javascript">
		function loginsucesso(){
			setTimeout("window.location='/visaosystem/listaestab.php'", 0);
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
$razaosocial = $_POST['razaosocial'];
$nomefantasia = $_POST['nomefantasia'];
$cpf = $_POST['cpf'];
$cnpj = $_POST['cnpj'];
$ie = $_POST['ie'];
$tiporegime = $_POST['tiporegime'];
$sqlestab = mysqli_query($conexao, "INSERT INTO estabelecimento(razaosocial, nomefantasia, cnpj, ie, tiporegime)
VALUES ('$razaosocial', '$nomefantasia', '$cnpj', '$ie', '$tiporegime')");
mysqli_query($conexao, $sqlestab);
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
$query = "SELECT Max(idestab) FROM estabelecimento";
$dadosestab = $conexao2->query($query);
while ($linha = $dadosestab->fetch_assoc()) {
$idestab = $linha["Max(idestab)"];
$primeironum = $_POST['Telefone1'];
$segundonum = $_POST['telefone2'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$sqlcontato = mysqli_query($conexao2, "INSERT INTO contatoestab(idestab, telefone1, telefone2, celular, email)
VALUES ('$idestab', '$primeironum', '$segundonum', '$celular', '$email')");
}
mysqli_query($conexao2, $sqlcontato);
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
$queryy = "SELECT Max(idestab) FROM estabelecimento";
$dadosestabb = $conexao3->query($queryy);
while ($linhaa = $dadosestabb->fetch_assoc()) {
$idestabb = $linhaa["Max(idestab)"];
$cep = $_POST['cep'];
$endereco = $_POST['logradouro'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$municipio = $_POST['municipio'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$sqlendereco = mysqli_query($conexao3, "INSERT INTO enderecoestab(idestab, cep, logradouro, bairro, municipio, cidade, numero, complemento)
VALUES ('$idestabb', '$cep', '$endereco', '$bairro', '$municipio', '$cidade', '$numero', '$complemento')");
}
mysqli_query($conexao3, $sqlendereco);
mysqli_close($conexao3);
echo "<script>loginsucesso()</script>";

?>
</body>
</html>
