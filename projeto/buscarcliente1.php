<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
if ($_POST['tipo']=="nome"){
	"<br>".$sql= "SELECT * from cliente where nome like '%$_POST[texto]%' OR sobrenome like '%$_POST[texto]%' order by nome,sobrenome";
	$rs =mysqli_query($conexao,$sql) or die("Consulta nao realizada");
	$numReg=mysqli_num_rows($rs);	
}	
?>
<!DOCTYPE html>
<html>
<head>
<title>Busca Clientes </title>
<link rel="stylesheet" href="estilo.css">
</head>
<body>
<h4>Resultado da Pesquisa</h4>
<hr>
<h5>A pesquisa obteve <?php echo $numReg;?> participante(s) para  <?php echo $texto=strtoupper(trim($_POST['texto']));?> na consulta <? echo $tipo=strtoupper(trim($_POST['tipo']));?>  </h5>
<table border="1" width="50%" cellspacing=0 cellpadding=0>
<tr>
    <th width="1%">#</th>	
	<th width="15%">Nome</th>
	<th width="25%">Sobrenome</th>
</tr>
	<?php
	$i=0;
	while ($linha=mysqli_fetch_array($rs)) {
		$cod_cliente=$linha["cod"];
		$nome=$linha["nome"];
		$sobrenome=$linha["sobrenome"];
		$i++;
	?>
<tr>
	<td><?php echo $i;?></td>
	<td><?php echo $nome;?></td>
	<td><?php echo $sobrenome;?></td>
</tr>
<?php
	}
?>
</table>
<hr>
<?php
mysqli_close($conexao);
echo (" <h5><a href='javascript:history.back(1)'> Voltar ao início </a></h5>");
echo (" </html>");
?>

