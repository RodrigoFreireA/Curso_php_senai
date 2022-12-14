
<?php

if(!isset($_SESSION)){ 
include('../conexao/conexao.php');
session_start();}
?>

<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>

    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="pg1.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=novo">Cadastro</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="?page=listar">Listar Usuários</a>
            </li>
            <li class="nav-item">
              <a href="nav-link" href="">

                <h4><a href="logout.php">Sair</h4></a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container2">
        <div class="row">
          <div class="col mt-5">
            <?php

            switch($_REQUEST["page"]) {
              case "novo":
              include("novo_usuario.php");
              break;
              case "listar":
              include("listar_usuario.php");
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



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    </body>
    </html>

