
<html>

<head>
	<title>Update Cliente</title>
	<script type="text/javascript">
		function updatesucesso(){
			setTimeout("window.location='/visaosystem/listacliente.php'", 0);
		}
		
	</script>
</head>
<body>
<?php
$idcliente = $_GET['idcliente'];
$mysqli = new mysqli('localhost', 'root', '', 'visaosystem');


$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
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


$sql= "UPDATE cliente inner join contatocli on cliente.idcliente = contatocli.idcliente  inner join enderecocli on cliente.idcliente = enderecocli.idcliente
SET cliente.nome = '$nome', cliente.sobrenome = '$sobrenome', cliente.cpf = '$cpf', cliente.rg = '$rg', cliente.ativo = '$ativo', 
contatocli.telefone1 = '$telefone1', contatocli.telefone2 = '$telefone2', contatocli.celular = '$celular', contatocli.email = '$email',
enderecocli.cep = '$cep', enderecocli.logradouro = '$logradouro', enderecocli.bairro = '$bairro', enderecocli.municipio = '$municipio', enderecocli.cidade = '$cidade', enderecocli.uf = '$uf', enderecocli.numero = '$numero', enderecocli.complemento = '$complemento' WHERE cliente.idcliente = '$idcliente' ";

$executaConexaoQuery = mysqli_query($mysqli,$sql) or die('Erro ao inserir os dados '.mysqli_error($mysqli)) ;
mysqli_close($mysqli);

echo "<script>updatesucesso()</script>";



?>
</body>
</html>