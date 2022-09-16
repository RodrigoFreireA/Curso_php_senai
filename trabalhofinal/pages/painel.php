<?php
session_start();
include('../conexao/conexao.php');
if(!isset($_SESSION)){ 
include('../conexao/conexao.php');
session_start();}
?>
<h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Painel</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

</body>
</html>

<h2><a href="logout.php">Sair</h2>

