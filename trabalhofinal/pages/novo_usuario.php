<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<title>TBD - The Book Of Dragon</title>
	<STYLE TYPE="text/css">
		.caixa{
			padding-top: 50px;
			padding-left: 140px;
			height: 60vw;
			width: 60vw;
			display: flex;
			justify-content: center;
			align-items: right;
			background-size: cover;
		}
		.form2{
			background-color: ;
			margin-left: 120px;
			width: 350px;
			height: 450px;
		}

	</STYLE>
</head>

<div class="caixa">
	<div class="form2">
		<form action="?page=salvar" method="POST">
			<input type="hidden" name="acao" value="cadastrar">
			<div class="mb-3">
				<label>Usuario</label>
				<input type="text" name="usuario" class="form-control">
			</div>
			<div class="mb-3">
				<label>Nome</label>
				<input type="text" name="Nome" class="form-control">
			</div>
			<div class="mb-3">
				<label>Email</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="mb-3">
				<label>Senha</label>
				<input type="password" name="senha" class="form-control">
			</div>
			<div class="mb-3">
				<label>Data de Nascimento</label>
				<input type="date" name="data_nasc" class="form-control">
			</div>
			<input type="hidden" name="cadastro">
			<div class="mb-3">
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
		</form>
	</div>
</div>