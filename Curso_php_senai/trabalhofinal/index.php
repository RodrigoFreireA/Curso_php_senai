<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta
  name="viewport"
  content="width=device-width,
  initial-scale=1, shrink-to-fit=no"
  />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet"
  href=
  "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity=
  "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <title>TBTD - The Book Of The Dragon</title>
  <style>/* Inicio do Css do pop-up */
  body {
    background-color: black;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 111;
    display: block;
  }
  #popup {
    width: 820px;
    height: 500px;
    background-color: white;
    background-image: url('images/Cartao_visita.gif');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 2px 2px 5px 3px white;
  }
  #emailId {
    text-align: center;
    position: absolute;
    left: 25%;
    top: 25%;
  }
  .submitId {
    position: absolute;
    left: 75%;
    top: 75%;
  }
</style><!--Fim do Css do pop-up-->
</head>

<body>
  <!--Inicio do código de carregamento da página atrás do pop-up-->
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
         <h4><center><p>Login</p></center></h4>
         <div class="mb-3">
          <center><h4><label for="username" class="form-label">Usuário</label></h4></center>
          <input name= "usuario"type="username" class="form-control" id="username" aria-describedby="username">

        </div>
        <div class="mb-3">
          <center><h4><label for="exampleInputPassword1" class="form-label">Senha</label></h4></center>
          <input name="senha"type="password" class="form-control" id="exampleInputPassword1">
          <div id="senhaHelp" class="form-text"><pre><a href="">Esqueceu sua senha?</a>                  <a href="/Curso_php_senai/trabalhofinal/novo.php">Criar conta</a></pre></div>
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
<!--Fim do código da pagina de login-->

<div class="POPmain"
style="display: none;">
<div id="popup">
  <div>
    <button class=
    "submitId btn btn-primary font-weight-bold mt-5">
    Vamos lá!!
  </button>

</div>

</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first,then Popper.js,then Bootstrap JS -->
<script src=
"https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity=
"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"></script>

<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity=
"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>

<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity=
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>
<script>
            // When document is ready
            $(document).ready(function () {
                // SetTimeout function
                // Will execute the function
                // after 3 sec
                setTimeout(function () {
                  $(".POPmain").css("display", "block");
                }, 1000);
              });
            $(".submitId").click(function () {
              $(".POPmain").css("display", "none");
            });
          </script>
        </body>
        </html>