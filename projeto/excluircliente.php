<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Exclusão de Usuários</title>
<link rel="stylesheet" href="estilo.css" /> 
</head>
<body>
<h4>Exclusão de Usuários </h4>
<?php
$sql= "select * from cliente";
$rs =mysqli_query($conexao,$sql) or die("Consulta não realizada");
?>
<table border='1' width='35%' cellspacing=0 cellpadding=0>
<tr>
	<th>&nbsp;</th>
	<th>cod</th>
	<th>Nome</th>
	<th>Sobrenome</th>	
</tr>
<?php
while($linha=mysqli_fetch_array($rs)){
	$inscricao=$linha["cod"];
	$nome=$linha["nome"];
	$sobrenome=$linha["sobrenome"];
}
?>
<tr>
	<td><a onclick="return confirm('Deseja excluir o registro?')"
    href="excluircliente1.php?inscricao=<?= $inscricao ?>">
    Delete</a></td>
	<td><?php echo $inscricao;?></td>
	<td><?php echo $nome;?></td>
	<td><?php echo $sobrenome;?></td>
</tr>
<?php  

?>
</table>
</body>
</html>

