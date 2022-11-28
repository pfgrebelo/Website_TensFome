<main class="container border mb-2 shadow-lg text-center p-3"><!--CONTEUDO DA PAGINA-->
<img src="img/banner/banner-admin.gif" alt="" class="container mx-auto">
<h1 class="text-center">Administração</h1>
<h2>Tipos de Utilizador</h2>
<?php include('db/getUserType.php')?>
<hr>

<h2>Utilizadores</h2>
<?php include('db/getUsers.php')?>
<hr>

<div class="row">
    <div class="col"><h2>Restaurantes</h2></div>
    <div class="col text-end"><a href="index.php?p=editrestaurant" class="btn btn-primary">Novo Restaurante</a></div>
</div>
<?php include('db/getRestaurants.php')?>
<hr>

<?php 
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'empty'){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-triangle-fill"></i> Dados obrigatórios vazios.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
  }elseif($r == 'editrestauranterror'){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-triangle-fill"></i> Erro na edição do restaurante.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
  elseif($r == 'editrestaurantok'){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check2-circle"></i> Restaurante editado com sucesso.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
  elseif($r == 'newrestaurantok'){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check2-circle"></i> Novo restaurante adicionado com sucesso.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
  elseif($r == 'newrestauranterror'){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-triangle-fill"></i> Erro na inserção do novo restaurante.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
}?>