<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Exclusão de Clientes</title>
<META HTTP-EQUIV="REFRESH" CONTENT="2; URL=excluircliente.php">
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<h4> Exclusão de Clientes </h4>
<?php
$dados ="delete from cliente where cod='$_REQUEST[$cod]'";
$query=mysqli_query($conexao,$dados) or die (mysqli_error());
echo ("<h5>O cliente foi excluído com sucesso!</h5>");
mysqli_close($conexao);
?>
</body>
</html> 

