<!DOCTYPE html>
<html>
<head>
<title>Inclusão de Usuários</title>
<link rel="stylesheet" href="estilo.css" /> 
</head>
<body>
<h4> Inclusão de Usuários </h4>
<form name="clientes" method="post" action="inserecliente1.php">
<table width="50%" border="0" cellspacing="2" cellpadding="2">
<tr>
    <td>Nome</td>
    <td><input type="text" name="nome"class="formulario" size="40" required></td>
</tr>
<tr>
    <td>Sobrenome</td>
    <td><input type="text" name="sobrenome" class="formulario"size="80" required></td>
</tr>
<tr>
   <td colspan=2><input type="submit" name="cadastrar" class="botao"value="Cadastrar cliente"></td>
</tr>
</table>
</form>
</body>
</html>
