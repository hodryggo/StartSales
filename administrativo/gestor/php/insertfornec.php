
<?php
	session_start();
	$id = $_SESSION['id'];
	$nome = $_SESSION['usuario'];
?>
<html>
	<head>
		<title>Insert Fornec</title>
	</head>
<script type="text/javascript">
		function loginsucesso(){
			setTimeout("window.location='/visaosystem/listafornec.php'", 0);
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
	$cnpj = $_POST['cnpj'];
	$ie = $_POST['ie'];
	$ativo = $_POST['ativo'];
	$sqlestab = "INSERT INTO fornecedor(razaosocial, nomefantasia, cnpj, ie, ativo)
	VALUES ('$razaosocial', '$nomefantasia', '$cnpj', '$ie', '$ativo')";

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
	$query = "SELECT Max(idfornec) FROM fornecedor";
	$dadosfornec = $conexao2->query($query);
	while ($linha = $dadosfornec->fetch_assoc()) {
	$idfornec = $linha["Max(idfornec)"];
	$telefone1 = $_POST['telefone1'];
	$telefone2 = $_POST['telefone2'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	$sqlcontato = "INSERT INTO contatofornec(idfornec, telefone1, telefone2, celular, email)
	VALUES ($idfornec, '$telefone1', '$telefone2', '$celular', '$email')";
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
	$queryy = "SELECT Max(idfornec) FROM fornecedor";
	$dadosfornecc = $conexao3->query($queryy);
	while ($linhaa = $dadosfornecc->fetch_assoc()) {
	$idfornecc = $linhaa["Max(idfornec)"];
	$cep = $_POST['cep'];
	$endereco = $_POST['logradouro'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$municipio = $_POST['municipio'];
	$uf = $_POST['uf'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$sqlendereco = "INSERT INTO enderecofornec(idfornec, cep, logradouro, bairro, cidade, municipio, uf, numero, complemento)
	VALUES ('$idfornecc', '$cep', '$endereco', '$bairro', '$cidade', '$municipio', '$uf', '$numero', '$complemento')";
	}
	mysqli_query($conexao3, $sqlendereco);
	mysqli_close($conexao3);
	echo "<script>loginsucesso()</script>";
	
?>
</body>
</html>
