<?php
include('conn.php');

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
        <div class="row">
            <div class="col">ID</div>
            <div class="col">USERNAME</div>
            <div class="col">NOME</div>
            <div class="col">CONTACTO</div>
            <div class="col">MORADA</div>
            <div class="col">EMAIL</div>
            <div class="col">ÚLTIMO LOGIN</div>
            <div class="col">FOTO</div>
            
            <div class="col">VISIBILIDADE</div>
            <div class="col">TIPO UTILIZADOR</div>
        </div>
    <?php
  while($row = $result->fetch_assoc()) {
    ?>
        <div class="row">
            <div class="col"><?=$row['id']?></div>
            <div class="col"><?=$row['username']?></div>
            <div class="col"><?=$row['name']?></div>
            <div class="col"><?=$row['contact']?></div>
            <div class="col"><?=$row['address']?></div>
            <div class="col"><?=$row['email']?></div>
            <div class="col"><?=$row['last_login']?></div>
            <div class="col">
                <?php if($row['photo']=='') { ?>
                    <img class="w-25" src="img/user/default.png" alt="">
                <?php }else{ ?>
                    <img class="w-25" src="img/user/<?=$row['photo']?>" alt="">
                <?php } ?>        
            </div>
            
            <div class="col">
                <?php if($row['visibility']==1) { ?>
                    <a href="db/updateUserVisibility.php?v=0&id=<?=$row['id']?>"><i class="bi bi-eye-fill"></i></a>
                <?php } else { ?>
                    <a href="db/updateUserVisibility.php?v=1&id=<?=$row['id']?>"><i class="bi bi-eye-slash-fill"></i></a>
                <?php } ?>
            </div>
            <div class="col">
                <?php if($row['usertype_id']==1) { ?>
                    <a href="db/updateUserType.php?v=2&id=<?=$row['id']?>"><i class="bi bi-person-check-fill"></i></a>
                <?php } else { ?>
                    <a href="db/updateUserType.php?v=1&id=<?=$row['id']?>"><i class="bi bi-person-fill"></i></a>
                <?php } ?>
            </div>
        </div>
    <?php
  }
}
$conn->close();
?>