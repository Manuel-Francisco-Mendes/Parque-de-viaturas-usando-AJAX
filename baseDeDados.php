<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomebd = "parquedeviaturas";
$conn = mysqli_connect($servidor, $usuario, $senha, $nomebd);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>