<main class="container border mb-2 shadow-lg text-center p-3"><!--CONTEUDO DA PAGINA-->
<img src="img/banner/banner-registo.gif" alt="" class="container mx-auto">
<h1 class="animate__animated animate__fadeInLeft">REGISTO</h1>
<form action="db/register.php" method="POST">
  <div class="mb-3">
    <label for="form-username" class="form-label">Nome de utilizador<sup>*</sup></label>
    <input type="text" class="form-control w-50 mx-auto" id="form-username" name="form-username" placeholder="Username(nome que utiliza para fazer login)" required>
  </div>
  <div class="mb-3">
    <label for="form-password1" class="form-label">Password<sup>*</sup></label>
    <input type="password" class="form-control w-50 mx-auto" id="form-password1" name="form-password1" placeholder="Escreva a sua password" required>
  </div>
  <div class="mb-3">
    <label for="form-password2" class="form-label">Confirmar Password<sup>*</sup></label>
    <input type="password" class="form-control w-50 mx-auto" id="form-password2" name="form-password2" placeholder="Repita novamente a mesma password" required>
  </div>
  <div class="mb-3">
    <label for="form-name" class="form-label">Nome<sup>*</sup></label>
    <input type="text" class="form-control w-50 mx-auto" id="form-name" name="form-name" placeholder="Primeiro e último nome">
  </div>
  <div class="mb-3">
    <label for="form-contact" class="form-label">Contacto<sup>*</sup></label>
    <input type="tel" maxlength="9" class="form-control w-50 mx-auto" id="form-contact" name="form-contact" placeholder="Telefone ou telemóvel" required>
  </div>
  <div class="mb-3">
    <label for="form-address" class="form-label">Morada</label>
    <input type="text" class="form-control w-50 mx-auto" id="form-address" name="form-address" placeholder="Rua, nº de porta e cód. postal">
  </div>
  <label for="form-required" class="form-label"><sup>(*campos obrigatórios)</sup></label><br>
  <button type="submit" class="btn btn-primary">Registar</button>
  <input type="reset" class="btn btn-primary" value="Limpar">
</form>
<?php
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'empty'){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill"></i> Necessário preencher todos os campos obrigatórios.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
  }elseif($r == 'pwderror'){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill"></i> As passwords não coincidem.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
  elseif($r == 'regerror'){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill"></i> Erro no registo, tente outra vez.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
}?>