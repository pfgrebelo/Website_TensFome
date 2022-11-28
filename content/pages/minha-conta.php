<main class="container border mb-2 shadow-lg text-left p-3"><!--CONTEUDO DA PAGINA-->
<img src="img/banner/banner-minhaconta.gif" alt="" class="container mx-auto">
<h1 class="animate__animated animate__fadeInLeft text-center">Conta de <?= $_SESSION['username']?></h1>
<?php include('db/getUserById.php')?>
<div class="row mt-3 row-cols-md-2 row-cols-sm-1 row-form">
    <div class="col col-8">
        <form action="db/updateUser.php" method="post">
            <div class="row">
            <div class="col col-6">
                <div class="mb-3">
                    <label for="form-username" class="form-label">Nome de utilizador</label>
                    <input type="text" class="form-control" id="form-username" name="form-username" value="<?=$row['username']?>" required readonly>
                </div>
                <div class="mb-3">
                    <label for="form-password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="form-password" name="form-password" value="*********" readonly>
                </div>
                <div class="mb-3">
                    <label for="form-name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="form-name" name="form-name" value="<?=$row['name']?>" required readonly>
                </div>
            </div>
            <div class="col col-6">
                <div class="mb-3">
                    <label for="form-contact" class="form-label">Contacto</label>
                    <input type="tel" maxlength="9" class="form-control" id="form-contact" name="form-contact" value="<?=$row['contact']?>" required readonly>
                </div>
                <div class="mb-3">
                    <label for="form-address" class="form-label">Morada<sup>(*opcional)</sup></label>
                    <input type="text" class="form-control" id="form-address" name="form-address" value="<?=$row['address']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="form-email" class="form-label">Email<sup>(*opcional)</sup></label>
                    <input type="email" class="form-control" id="form-email" name="form-email" value="<?=$row['email']?>" readonly>
                </div>
            </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <button id="account_btn_edit" type="button" class="btn btn-primary" onclick="account_edit()">Edit</button>
                        <button id="account_btn_cancel" type="button" class="btn btn-danger" onclick="account_cancel()">Cancel</button>
                        <button id="account_btn_save" type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                    <div class="col text-end">
                        <button id="account_btn_delete" type="button" class="btn btn-danger" onclick="window.location.replace('db/deleteUser.php')">Delete Account</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col col-4 mt-4 text-center">
        <form action="db/uploadPhoto.php" method="post" enctype="multipart/form-data">
            <input type="text" name="form-id" id="form-id" value="<?= $row['id']?>" readonly>
        <?php
            if($row['photo']!=""){
                ?><img src="img/user/<?=$row['photo']?>" id="form-img" alt="" class="border border-3 border-white"><?php
            }else{
                ?><img src="img/user/default.png" id="form-img" alt="" class="border border-3 border-white"><?php
            }
        ?>
        <br><small id="photoHelp" class="form-text text-muted">Tamanho Máximo 5Mb</small>
        <br><input type="file" name="form-img" id="form-img" aria-describedby="photoHelp"><br>
        <br><input type="submit" class="btn btn-primary" value="Trocar">
        </form>
    </div>
</div>
<?php
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'empty'){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill"></i> Necessário preencher todos os campos obrigatórios.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
  }elseif($r == 'editok'){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check2-circle"></i> Editado com sucesso.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
  elseif($r == 'editerror'){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill"></i> Erro na edição, tente outra vez.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
  elseif($r == 'okImg'){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check2-circle"></i> Foto atualizada com sucesso
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
  elseif($r == 'errorImg'){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill"></i> Erro na atualização de foto, tente outra vez.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
  elseif($r == 'updateok'){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check2-circle"></i> Foto atualizada com sucesso
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
  elseif($r == 'updateerror'){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill"></i> Erro na atualização de foto, tente outra vez.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
}?>