<?php
$conexao = mysqli_connect("localhost","root","") or die("Conexao não realizada ".mysqli_error());;
$db=mysqli_select_db($conexao,"projeto") or die("Banco perdido ".mysqli_error());
?>
