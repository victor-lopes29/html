<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Alteração de Clientes</title>
<link rel="stylesheet" href="estilo.css" /> 
</head>
<body>
<h4>Alteração de Clientes</h4>
<?php
$sql= "select * from cliente";
$rs =mysqli_query($conexao,$sql) or die("Consulta não realizada");
?>
<table border='1' width='35%' cellspacing=0 cellpadding=0>
<tr>
	<th>&nbsp;</th>
	<td>Nome</td>
	<td>Sobrenome</td>	
</tr>
<?php
while($linha=mysqli_fetch_array($rs)){
	$inscricao=$linha["cod"];
	$nome=$linha["nome"];
	$sobrenome=$linha["sobrenome"];
}
?>
<tr>
	<td><a href="alterarcliente1.php?inscricao=<?= $inscricao ?>">
    Alterar</a></td>
	<td><?php echo $nome;?></td>
	<td><?php echo $sobrenome;?></td>
</tr>
<?php  

?>
</table>
</body>
</html>

