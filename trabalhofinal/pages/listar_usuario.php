<h1>Listar Usuarios</h1>

<?php
	$sql = "SELECT * FROM tb_usuario";

	$res = $conexao->query($sql);
	//quantidade de resultados
	$qtd = $res->num_rows;
	//se houver usuarios cadastrados, os mesmos serão listados, se não houver exibirá uma mensagem de alerta!
	if($qtd > 0){
		print"<table class='table table-striped table-bordered'>";
			print "<tr>";
			print "<th>usuario_id</th>";
			print "<th>usuario</th>";
			print "<th>Nome</th>";
			print "<th>Email</th>";
			print "<th>Data de Nascimento</th>";
			print"<th>Ações</th>";
			print"</tr>";
		//comando fetch irá colocar todos os objetos dentro da "row"
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->usuario_id."</td>";
			print "<td>".$row->usuario."</td>";
			print "<td>".$row->Nome."</td>";
			print "<td>".$row->email."</td>";
			print "<td>".$row->data_nasc."</td>";
			print "<td>
						<button onclick=\"location.href='?page=editar&usuario_id=".$row->usuario_id."';\"class='btn btn-success'>Editar</button>



						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&usuario_id=".$row->usuario_id."';}else{false;}\"class='btn btn-danger'>Excluir</button></td>";
			print"</tr>";

		}
	}else{
		print "<p class='alert alert-danger'>Nenhum resultado encontrado!</p>";
	}


?>