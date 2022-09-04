<?php
session_start();
include('conexao.php'); // instância

if(empty($_POST['usuario']) || empty($_POST['senha'])){
	header('Location: index.php'); 
	exit();
}//Se der submit em branco o codigo retorna para tela anterior

$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']); 
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

//verificação de login//
$query = "select usuario_id, usuario from usuario where usuario = '$usuario' and senha = md5('$senha')"; //query de comparação de entre banco de dados, usuario e senha!

//variáveis de verificação de login
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
//essa condição verifica os dados da sessão estão corretos, se sim a sessão continua para a próxima pagina, senão ela retorna para a pagina anterior
if($row == 1){
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php');
	exit();
}else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}