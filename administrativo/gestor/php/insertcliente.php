
<?php
session_start();
$id = $_SESSION['id'];
$nome = $_SESSION['usuario'];
?>

<html>

<head>
	<title>Insert Cliente</title>
</head>

<script type="text/javascript">
		function loginsucesso(){
			setTimeout("window.location='/visaosystem/listacliente.php'", 0);
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
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$ativo = $_POST['ativo'];
$sqlcliente = mysqli_query($conexao, "INSERT INTO cliente(nome, sobrenome, cpf, rg, ativo)
VALUES ('$nome', '$sobrenome', '$cpf', '$rg', '$ativo')");

mysqli_query($conexao, $sqlcliente);
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
$query = "SELECT Max(idcliente) FROM cliente";
$dadoscliente = $conexao2->query($query);
while ($linha = $dadoscliente->fetch_assoc()) {
$idcliente = $linha["Max(idcliente)"];
$telefone1 = $_POST['Telefone1'];
$telefone2 = $_POST['telefone2'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$sqlcontato = mysqli_query($conexao2, "INSERT INTO contatocli(idcliente, telefone1, telefone2, celular, email)
VALUES ('$idcliente', '$telefone1', '$telefone2', '$celular', '$email')");
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
$queryy = "SELECT Max(idcliente) FROM cliente";
$dadosclientee = $conexao3->query($queryy);
while ($linhaa = $dadosclientee->fetch_assoc()) {
$idclientee = $linhaa["Max(idcliente)"];
$cep = $_POST['cep'];
$endereco = $_POST['logradouro'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$municipio = $_POST['municipio'];
$uf = $_POST['uf'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$sqlendereco = mysqli_query($conexao3, "INSERT INTO enderecocli(idcliente, cep, logradouro, bairro, municipio, cidade, uf, numero, complemento)
VALUES ('$idclientee', '$cep', '$endereco', '$bairro', '$municipio', '$cidade', '$uf', '$numero', '$complemento')");
}
mysqli_query($conexao3, $sqlendereco);
mysqli_close($conexao3);
echo "<script>loginsucesso()</script>";
?>
</body>
</html>
