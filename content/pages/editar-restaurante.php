<main class="container border mb-2 shadow-lg text-center p-3"><!--CONTEUDO DA PAGINA-->
<img src="img/banner/<?php if(isset($_GET['id'])) { ?>banner-editarrestaurante.gif<?php }else{?>banner-inserirrestaurante.gif<?php }?>" alt="" class="container mx-auto">
<h1 class="text-center"><?php if(isset($_GET['id'])) { ?>Editar Restaurante<?php }else{?>Inserir Restaurante<?php }?></h1>

<?php if(isset($_GET['id'])) {
    include('db/selectRestaurantByID.php');
}?>
<?php if(isset($_GET['id'])) { ?>
    <form action="db/updateRestaurant.php" method="post" enctype="multipart/form-data">
<?php }else{?>
    <form action="db/insertRestaurant.php" method="post" enctype="multipart/form-data">
<?php }?>
<form action="" method="post">
    <input type="number" class="form-control" id="form-id" name="form-id" value="<?php if(isset($_GET['id'])) echo $row['id'];?>" readonly hidden>
    <div class="mb-3">
        <label for="form-name" class="form-label">Nome</label>
        <input type="text" class="form-control w-50 mx-auto" id="form-name" name="form-name" value="<?php if(isset($_GET['id'])) echo $row['name'];?>" required>
    </div>
    <div class="mb-3">
        <label for="form-type" class="form-label">Tipo</label>
        <input type="text" class="form-control w-50 mx-auto" id="form-type" name="form-type" value="<?php if(isset($_GET['id'])) echo $row['type'];?>" required>
    </div>
    <div class="mb-3">
        <label for="form-photo" class="form-label">Foto</label><br>
        <?php if(isset($_GET['id'])){ ?>
        <img class="w-50" src="img/restaurants/<?=$row['photo'];?>" alt="">
        <?php } ?>
        <input type="file" class="form-control w-50 mx-auto" id="form-photo" name="form-photo">
    </div>
    <div class="mb-3">
        <label for="form-menu" class="form-label">Menu</label><br>
        <?php if(isset($_GET['id'])){ ?>
        <img class="w-50" src="img/menu/<?=$row['menu'];?>" alt="">
        <?php } ?>
        <input type="file" class="form-control w-50 mx-auto" id="form-menu" name="form-menu">
    </div>
    <div class="mb-3">
        <label for="form-visibility" class="form-label">Visibility</label>
        <select name="form-visibility" id="form-visibility">
            <option value="" selected disabled>Choose an option</option>
            <option value="1" <?php if(isset($_GET['id'])) { if($row['visibility']==1){ echo "selected";} } ?>>Visible</option>
            <option value="0" <?php if(isset($_GET['id'])) { if($row['visibility']==0){ echo "selected";} } ?>>Invisible</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Guardar">
    </div>
</form>