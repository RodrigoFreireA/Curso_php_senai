<?php 
session_start();
?>
<!DOCTYPE html>
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
    body {background-color: black; }
    </STYLE>
</head>

<body>
    <form action="./pages/login.php" method="POST">
      <div class="container">
        <div class="caixa1">
        <div class="caixa2">
          <!-- a função php seguinte verifica a condição de usuário logado ou não, acesso permitido somente logado-->
         <?php
          if(isset($_SESSION['nao_autenticado'])):
           ?>
           <div class="alert alert-primary" role="alert">
             <p>ERRO: Usuário ou senha inválidos.</p>
           </div>
           <?php 
            endif;
            unset($_SESSION['nao_autenticado']);
           ?>
          <center><p>Login</p></center>
        <div class="mb-3">
          <label for="username" class="form-label">Usuário</label>
          <input name= "usuario"type="username" class="form-control" id="username" aria-describedby="username">
          
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Senha</label>
          <input name="senha"type="password" class="form-control" id="exampleInputPassword1">
          <div id="senhaHelp" class="form-text"><pre><a href="">Esqueceu sua senha?</a>                  <a href="/Curso_php_senai/trabalhofinal/pages/novo_usuario.php">Criar conta</a></pre></div>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
        </div>
        <button type="submit" class="btn btn-primary" id="botao">Entrar</button>
      </form>
    </div>
    </div>
    </div>
</body>
</html>