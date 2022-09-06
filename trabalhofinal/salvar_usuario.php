<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$usuario = $_POST["usuario"];
			$Nome = $_POST["Nome"];
			$email = $_POST["email"];
			$senha = md5($_POST["senha"]);
			$data_nasc = $_POST["data_nasc"];
			
			$sql = "INSERT INTO usuario (usuario, Nome, email, senha, data_nasc) VALUES ('{$usuario}','{$Nome}', '{$email}', '{$senha}', '{$data_nasc}')";

			$res = $conexao->query($sql);

			if($res==true){
				print"<script>alert('Cadastro realizado com sucesso!');</script>";
				print"<script>location.href='?page=listar';</script>";
			}else{
				print"<script>alert('Não foi possível cadastrar!');</script>";
				print"<script>location.href='?page=listar';</script>";
			}
			break;

		case 'editar':
			$Nome = $_POST["Nome"];
			$email = $_POST["email"];
			$senha = md5($_POST["senha"]);
			$data_nasc = $_POST["data_nasc"];
			$sql="UPDATE usuario SET 
						Nome = '{$Nome}',
						email = '{$email}',
						senha = '{$senha}',
						data_nasc = '{$data_nasc}'
						WHERE usuario_id=".$_REQUEST["usuario_id"];

			$res = $conexao->query($sql);

			if($res==true){
				print"<script>alert('Cadastro editado com sucesso!');</script>";
				print"<script>location.href='?page=listar';</script>";
			}else{
				print"<script>alert('Não foi possível editar!');</script>";
				print"<script>location.href='?page=listar';</script>";
			}


			break;

		case 'excluir':
			

			$sql = "DELETE FROM usuario WHERE usuario_id=".$_REQUEST["usuario_id"];
			$res = $conexao->query($sql);

			if($res==true){
				print"<script>alert('Cadastro excluído com sucesso!');</script>";
				print"<script>location.href='?page=listar';</script>";
			}else{
				print"<script>alert('Não foi possível excluir!');</script>";
				print"<script>location.href='?page=listar';</script>";
			}
			break;

		default:
			// code...
			break;
	}


?>