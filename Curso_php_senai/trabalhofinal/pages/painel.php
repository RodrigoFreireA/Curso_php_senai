<?php
session_start();
include('../conexao/conexao.php');
if(!isset($_SESSION)){ 
	include('../conexao/conexao.php');
	session_start();}
	?>
	<?php
	if ($_SESSION['no_perfil'] == "Administrador") {
		?>
		<!doctype html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>Painel</title>
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
				<link rel="stylesheet" type="text/css" href="../css/style.css"/>
			</head>
			<body>
				<div class="container2">
				<div class="painel">
					<div class="banner"></div>
					<nav class="navbar navbar-dark bg-dark navbar-expand-lg" id="navbar1">
						<div class="container-fluid">
							<a class="navbar-brand" href="#"></a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
							
							<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
								<ul class="navbar-nav mb-2 mb-lg-0">									
									<li class="nav-item">
										<a class="nav-link active" aria-current="page" href="painel.php"><h5>Olá, <?php echo $_SESSION['usuario']; ?></h5></a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" aria-current="page" href="painel.php">Home</a>
									</li>
									<hr>
									<li class="nav-item">
										<a class="nav-link" href="?page=novo">Cadastro</a>
									</li>
									<hr>
									<li class="nav-item">
										<a class="nav-link" href="?page=listar">Listar Usuários</a>
									</li>
									<hr>
									<hr>
									<li class="nav-item">
										<a class="nav-link" href="?page=ficha">Nova Ficha</a>
									</li>
									<hr>
									<li class="nav-item">
										<a class="nav-link" href="?page=mapa">Lista de Mapas</a>
									</li>
									<hr>
									<li class="nav-item">
										<a href="nav-link" href="">
											<h4><a href="logout.php">Sair</h4></a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
						
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
					<div class="container-fluid">
							<div class="row">
								<div class="col mt-5">

									<?php
									/*Algoritmo de direcionamento de páginas e funções*/
									switch($_REQUEST["page"]) {
										case "novo":
										include("novo_usuario.php");
										break;
										case "listar":
										include("listar_usuario.php");
										break;
										case "ficha":
										include("nova_ficha.php");
										break;
										case "mapa":
										include("lista_mapa.php");
										break;
										case "salvar":
										include("salvar_usuario.php");
										break;
										case "editar":
										include("editar_usuario.php");
										break;
										default:
										print("<h1>Bem-vindo!</h1>");
										break;
									}  ?>
								</div>
							</div>
						</div>
					</div>

					</div>
				</body>
				</html>
			<?php }elseif ($_SESSION['no_perfil'] == "Player") {
				header('Location: ../painel2.php');
			} else{
				header('Location: ../index.php');
				session_destroy();
			} ?>