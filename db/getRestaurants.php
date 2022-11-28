<?php
include('conn.php');

$sql = "SELECT * FROM restaurants";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
        <div class="row">
            <div class="col"></div>
            <div class="col">ID</div>
            <div class="col">NOME</div>
            <div class="col">TIPO</div>
            <div class="col">FOTO</div>
            <div class="col">MENU</div>
            <div class="col">VISIBILIDADE</div>
        </div>
    <?php
  while($row = $result->fetch_assoc()) {
    ?>
        <div class="row">
            <div class="col"><a href="index.php?p=editrestaurant&id=<?=$row['id']?>" class="btn btn-primary">Editar</a></div>
            <div class="col"><?=$row['id']?></div>
            <div class="col"><?=$row['name']?></div>
            <div class="col"><?=$row['type']?></div>
            <div class="col">
                <?php if($row['photo']=='') { ?>
                    <img class="w-50 h-50" src="img/restaurants/default.jpg" alt="">
                <?php }else{ ?>
                    <img class="w-50 h-50" src="img/restaurants/<?=$row['photo']?>" alt="">
                <?php } ?>        
            </div>
            <div class="col">
                <?php if($row['menu']=='') { ?>
                    <img class="w-50 h-50" src="img/menu/default.png" alt="">
                <?php }else{ ?>
                    <img class="w-50 h-50" src="img/menu/<?=$row['menu']?>" alt="">
                <?php } ?>        
            </div>
            <div class="col">
                <?php if($row['visibility']==1) { ?>
                    <a href="db/updateRestaurantVisibility.php?v=0&id=<?=$row['id']?>"><i class="bi bi-eye-fill"></i></a>
                <?php } else { ?>
                    <a href="db/updateRestaurantVisibility.php?v=1&id=<?=$row['id']?>"><i class="bi bi-eye-slash-fill"></i></a>
                <?php } ?>
            </div>
        </div>
    <?php
  }
}
$conn->close();
?>