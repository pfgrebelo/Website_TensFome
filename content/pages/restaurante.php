<main class="container border mb-2 shadow-lg text-center p-3"><!--CONTEUDO DA PAGINA-->
<h1 class="text-center">Restaurante</h1>
<hr>
<?php include('db/selectRestaurantByID.php')?>
<h2><?=$row['name']?></h2>
<h3 class="text-center"><?=$row['type']?></h3>
<div class="row">
    <div class="col">
    <?php if($row['photo']!=''){?>
        <img src="img/restaurants/<?=$row['photo']?>" class="card-img w-50 mx-auto" alt="...">
    <?php }else{ ?>
        <img src="img/restaurants/default.jpg" class="card-img w-50 mx-auto" alt="...">
    <?php } ?>
    </div>
</div>
<div class="row">
    <div class="col">
    <label for="form-menu" class="form-label">Menu</label><br>
    <?php if($row['menu']!=''){?>
        <img src="img/menu/<?=$row['menu']?>" class="card-img w-50 mx-auto" alt="...">
    <?php }else{ ?>
        <img src="img/menu/default.png" class="card-img w-50 mx-auto" alt="...">
    <?php } ?>
    <hr><a href="index.php?p=restaurantes" class="btn">Voltar</a>
    </div>
</div>