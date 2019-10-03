
<html>

<head>
	<title>Update Fornecedor</title>
	<script type="text/javascript">
		function updatesucesso(){
			setTimeout("window.location='/visaosystem/listafornec.php'", 0);
		}
		
	</script>
</head>
<body>
<?php
$idfornecc = $_GET["idfornec"];
$mysqli = new mysqli('localhost', 'root', '', 'visaosystem');


$razaosocial = $_POST['razaosocial'];
$nomefantasia = $_POST['nomefantasia'];
$cnpj = $_POST['cnpj'];
$ie = $_POST['ie'];
$ativo = $_POST['ativo'];
$telefone1 = $_POST['Telefone1'];
$telefone2 = $_POST['telefone2'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$bairro = $_POST['bairro'];
$municipio = $_POST['municipio'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];


$sql= "UPDATE fornecedor inner join contatofornec on fornecedor.idfornec = contatofornec.idcontatofornec  inner join enderecofornec on fornecedor.idfornec = enderecofornec.idenderecofornec
SET fornecedor.razaosocial = '$razaosocial', fornecedor.nomefantasia = '$nomefantasia', fornecedor.cnpj = '$cnpj', fornecedor.ie = '$ie', fornecedor.ativo = '$ativo', 
contatofornec.telefone1 = '$telefone1', contatofornec.telefone2 = '$telefone2', contatofornec.celular = '$celular', contatofornec.email = '$email',
enderecofornec.cep = '$cep', enderecofornec.logradouro = '$logradouro', enderecofornec.bairro = '$bairro', enderecofornec.municipio = '$municipio', enderecofornec.cidade = '$cidade', enderecofornec.uf = '$uf',
enderecofornec.numero = '$numero', enderecofornec.complemento = '$complemento' where fornecedor.idfornec = '$idfornecc'";

$executaConexaoQuery = mysqli_query($mysqli,$sql) or die('Erro ao inserir os dados '.mysqli_error($mysqli)) ;
mysqli_close($mysqli);

echo "<script>updatesucesso()</script>";



?>
</body>
</html>