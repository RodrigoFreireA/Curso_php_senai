<?php
session_start();
include ('../conexao/conexao.php');
			$usuario = $_POST["usuario"];
			$Nome = $_POST["Nome"];
			$email = $_POST["email"];
			$senha = md5($_POST["senha"]);
			$data_nasc = $_POST["data_nasc"];
			$cadastro = $_POST["cadastro"];

			$sql = "INSERT INTO tb_usuario (usuario_id, usuario, Nome, email, senha, data_nasc, cadastro, tb_perfil_id_perfil, tb_ativo_id_ativo) VALUES (NULL, '{$usuario}','{$Nome}', '{$email}', '{$senha}', '{$data_nasc}', current_timestamp(), '3', '1')";

			$res = $conexao->query($sql);

			if($res==true){
				print"<script>alert('Cadastro realizado com sucesso!');</script>";
				print"<script>location.href='../index.php';</script>";
				exit();
				session_destroy();
			}else{
				print"<script>alert('Não foi possível cadastrar!');</script>";
				print"<script>location.href='../index.php';</script>";
				exit();
			}
		?>