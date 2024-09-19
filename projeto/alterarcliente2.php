<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Alteração de Clientes</title>
<link rel="stylesheet" href="estilo.css">
<META HTTP-EQUIV="REFRESH" CONTENT="2; URL=alterarcliente.php">
</head>
<body>
<?php
$dados ="update cliente set nome='$_POST[nome]',
sobrenome='$_POST[sobrenome]' where cod = '$_POST[inscricao]'";
$query=mysqli_query($conexao,$dados) or die (mysqli_error());
echo ("<h5>Os dados do cliente foram alterados com sucesso!
<br><br>Aguarde um momento</h5>");
mysqli_close($conexao);
?>
</body>
</html> 

