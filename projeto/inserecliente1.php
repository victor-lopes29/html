<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Inclusao de Usuarios </title>
<link rel="stylesheet" href="estilo.css" /> 
</head>
<body>
<?php	
$sql = "INSERT into cliente ";
$sql = $sql . "(nome,sobrenome)";
$sql = $sql . " values ('$_POST[nome]','$_POST[sobrenome]')";
$rs = mysqli_query($conexao,$sql) or die (mysqli_error());
echo "<br><br>";
echo "<h5><img src='sucesso.gif' border=0>Cadastrado com sucesso";
echo "<br>Aguarde um momento</h5><br><hr>";
echo "<META HTTP-EQUIV='REFRESH' CONTENT='3; URL=inserecliente.php'>";
mysqli_close($conexao);
?>
</body>
</html> 
