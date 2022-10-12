<?php

session_start();
include('../conexao/conexao.php'); // instância

if(empty($_POST['usuario']) || empty($_POST['senha'])){
	header('Location: ../index.php'); 
	exit();
}//Se der submit em branco o codigo retorna para tela anterior

$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']); 
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

//verificação de login//
$busca = mysqli_query($conexao, "select 
    u.usuario,
    u.email,
  	u.Nome,
    p.no_perfil
     from tb_usuario as u
    inner join tb_perfil as p on p.id_perfil = u.tb_perfil_id_perfil
    where 
    usuario = '$usuario' and senha = md5('$senha')
    and tb_ativo_id_ativo = 1"); //query de comparação de entre banco de dados, usuario e senha!
$contador = mysqli_num_rows($busca);

if($contador == 1){

while($registro = mysqli_fetch_array($busca)){
    session_start();
    $_SESSION['usuario'] = $registro['usuario'];
    $_SESSION['no_perfil'] = $registro['no_perfil'];
}
header('Location: ./painel.php');
exit;
}else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../index.php');
	exit();
}
?>

//INSERT INTO `tb_usuario` (`usuario_id`, `usuario`, `email`, `senha`, `Nome`, `data_nasc`, `cadastro`, `tb_perfil_id_perfil`, `tb_ativo_id_ativo`) VALUES (NULL, 'adm', 'adm@adm.com', md5('0000'), 'ADMR', '11-03-1994', current_timestamp(), '5', '1');//

//select    u.usuario,   u.email,  u.Nome,    p.no_perfil     from tb_usuario as u    inner join tb_perfil as p on p.id_perfil = u.tb_perfil_id_perfil    where     tb_perfil_id_perfil  = 1    and tb_ativo_id_ativo = 1