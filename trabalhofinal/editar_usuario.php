<h1>Editar Usuario</h1>
<?php
	$sql = "SELECT * FROM usuario WHERE usuario_id=".$_REQUEST["usuario_id"];
	$res = $conexao->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="usuario_id" value="<?php print $row->usuario_id; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="Nome" class="form-control" value="<?php print $row->Nome;?>">
	</div>
	<div class="mb-3">
		<label>Email</label>
		<input type="email" name="email" class="form-control"value="<?php print $row->email;?>">
	</div>
	<div class="mb-3">
		<label>Senha</label>
		<input type="password" name="senha" class="form-control" required>
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="data_nasc" class="form-control"value="<?php print $row->data_nasc;?>">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>