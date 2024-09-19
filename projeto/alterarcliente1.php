<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Alteração de Clientes </title>
<link rel="stylesheet" href="estilo.css">
</head>
<body>
<h4>Alteração de Clientes</h4>
<?php
//codigo do evento
$sql= "select * from cliente where cod='$_REQUEST[inscricao]'";
$rs =mysqli_query($conexao,$sql) or die ("Consulta nao realizada");
$linha=mysqli_fetch_array($rs);
	$id_user=$linha["cod"];
	$nome=$linha["nome"];
	$sobrenome=$linha["sobrenome"];
?>
<form name="frm_clientes" method="post" action="alterarcliente2.php">
<table width="80%" border="0" cellspacing="2" cellpadding="2">
<tr>
	<td>Inscrição</td>
    <td><input type="text" name="inscricao" class="formulario"value="<?php echo $id_user; ?>" size="5" READONLY></td>
</tr>
<tr>
    <td>Nome</td>
    <td><input type="text" name="nome" class="formulario"required value="<?php echo $nome; ?>" size="35"></td>
</tr>
<tr>
    <td>Sobrenome</td>
    <td><input type="text" name="sobrenome" class="formulario"required value="<?php echo $sobrenome; ?>" size="70"></td>
</tr>
<tr>
	<td colspan=2><input type="submit" name="atualizar" value="Atualizar cliente"></td>
</tr>
</table>
</form>
</body>
</html>
