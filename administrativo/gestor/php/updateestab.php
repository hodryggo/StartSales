
<html>

<head>
	<title>Update Estabelecimento</title>
	<script type="text/javascript">
		function updatesucesso(){
			setTimeout("window.location='/visaosystem/listaestab.php'", 0);
		}
		
	</script>
</head>
<body>
<?php
$idestab = $_GET['idestab'];
$mysqli = new mysqli('localhost', 'root', '', 'visaosystem');


$razaosocial = $_POST['razaosocial'];
$nomefantasia = $_POST['nomefantasia'];
$cnpj = $_POST['cnpj'];
$ie = $_POST['ie'];
$tiporegime = $_POST['tiporegime'];
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


$sql= "UPDATE estabelecimento inner join contatoestab on estabelecimento.idestab = contatoestab.idestab  inner join enderecoestab on estabelecimento.idestab = enderecoestab.idestab
SET estabelecimento.razaosocial = '$razaosocial', estabelecimento.nomefantasia = '$nomefantasia', estabelecimento.cnpj = '$cnpj', estabelecimento.ie = '$ie', estabelecimento.tiporegime = '$tiporegime', 
contatoestab.telefone1 = '$telefone1', contatoestab.telefone2 = '$telefone2', contatoestab.celular = '$celular', contatoestab.email = '$email',
enderecoestab.cep = '$cep', enderecoestab.logradouro = '$logradouro', enderecoestab.bairro = '$bairro', enderecoestab.municipio = '$municipio', enderecoestab.cidade = '$cidade', enderecoestab.uf = '$uf', enderecoestab.numero = '$numero', enderecoestab.complemento = '$complemento' 
where estabelecimento.idestab = '$idestab' ";

$executaConexaoQuery = mysqli_query($mysqli,$sql) or die('Erro ao inserir os dados '.mysqli_error($mysqli)) ;
mysqli_close($mysqli);

echo "<script>updatesucesso()</script>";



?>
</body>
</html>