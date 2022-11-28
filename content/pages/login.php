<main class="container border mb-2 shadow-lg text-center p-3"><!--CONTEUDO DA PAGINA-->
<img src="img/banner/banner-login.gif" alt="" class="container mx-auto">
<h1 class="animate__animated animate__fadeInLeft">LOGIN</h1>
<form action="db/login.php" method="POST">
  <div class="mb-3">
    <label for="form-username" class="form-label">Nome de utilizador</label>
    <input type="text" class="form-control w-50 mx-auto" id="form-username" name="form-username" required>
  </div>
  <div class="mb-3">
    <label for="form-password" class="form-label">Password</label>
    <input type="password" class="form-control w-50 mx-auto" id="form-password" name="form-password" required>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
<?php 
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'empty'){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-triangle-fill"></i> Necessário preencher nome de utilizador e password.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
  }elseif($r == 'invalid'){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-triangle-fill"></i> Utilizador ou password inválida.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
  elseif($r == 'regok'){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check2-circle"></i> Registo efetuado com sucesso, pode fazer login.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
}?>