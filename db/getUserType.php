<?php
// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

$sql = "SELECT * FROM usertypes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
        <div class="row">
            <div class="col">ID</div>
            <div class="col">NOME</div>
            <div class="col">VISIBILIDADE</div>
        </div>
    <?php
  while($row = $result->fetch_assoc()) {
    ?>
        <div class="row">
            <div class="col"><?=$row['id']?></div>
            <div class="col"><?=$row['name']?></div>
            <div class="col">
                <?php if($row['visibility']==1) { ?>
                    <a href="db/updateUserTypeVisibility.php?v=0&id=<?=$row['id']?>"><i class="bi bi-eye-fill"></i></a>
                <?php } else { ?>
                    <a href="db/updateUserTypeVisibility.php?v=1&id=<?=$row['id']?>"><i class="bi bi-eye-slash-fill"></i></a>
                <?php } ?>
            </div>
        </div>
    <?php
  }
}
$conn->close();
?>