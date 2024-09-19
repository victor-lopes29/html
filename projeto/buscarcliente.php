<!DOCTYPE html>
<html>
<head>
<title>Busca Clientes </title>
<link rel="stylesheet" href="estilo.css">
</head>
<body>
<h4> Busca Clientes </h4>
<form name="frm_clientes" method="post" action="buscarcliente1.php">
<table width="30%" border="0" cellspacing="2" cellpadding="2">
<tr>
	<td><select name="tipo" size="1">
	   <option selected value="nome"> Nome </option>
	 </select></td>
	 <td><input type="text" size="30" name="texto"></td>
	 <td><input type="submit" value="Buscar" name="submit"></td>
</tr>
</table>
</form>
<hr>
</body>
</html>
