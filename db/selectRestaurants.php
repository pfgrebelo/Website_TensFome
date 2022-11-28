<?php
define('_DEFVAR', 1);
include('conn.php');

$sql = "SELECT * FROM restaurants WHERE visibility=1 LIMIT 9";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {?>
    <div class="col">
        <div class="card h-100">
            <?php
                if($row['photo']!=""){
                    ?><a href="index.php?p=restaurant&id=<?=$row['id']?>"><img src="img/restaurants/<?=$row['photo']?>" class="card-img-top" alt="foto-restaurante-<?=$row['id']?>"></a><?php
                }else{
                    ?><a href="index.php?p=restaurant&id=<?=$row['id']?>"><img src="img/restaurants/default.jpg" class="card-img-top" alt="foto-restaurante-<?=$row['id']?>"></a><?php
                }
            ?>
            <div class="card-body">
                <h5 class="card-title"><?=$row['name']?></h5>
                <p class="card-text"><?=$row['type']?></p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?=$row['id']?>">MENU</button>
            </div>
        </div>
    </div>
    <!--MODAL-->
    <div class="modal fade" id="modal<?=$row['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><?=$row['name']?> - <?=$row['type']?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
                if($row['menu']!=""){
                    ?><img src="img/menu/<?=$row['menu']?>" class="card-img" alt="foto-menu-<?=$row['id']?>"><?php
                }else{
                    ?><img src="img/menu/default.png" class="card-img" alt="foto-menu-<?=$row['id']?>"><?php
                }
            ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<?php  }
} 
$conn->close();
?>