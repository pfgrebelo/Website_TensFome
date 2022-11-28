<nav class="navbar navbar-expand-lg navbar-dark"> <!--BARRA NAVEGAÇÃO-->
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link <?php if ($_GET['p'] == 'home' || $_GET['p'] == '') echo 'active'; ?>" aria-current="page" href="index.php?p=home">Início</a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php if ($_GET['p'] == 'quem-somos') echo 'active'; ?>" href="index.php?p=quem-somos">Quem somos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php if ($_GET['p'] == 'restaurantes') echo 'active'; ?>" href="index.php?p=restaurantes">Restaurantes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php if ($_GET['p'] == 'faq') echo 'active'; ?>" href="index.php?p=faq">FAQ</a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php if ($_GET['p'] == 'contacto') echo 'active'; ?>" href="index.php?p=contacto">Contacto</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu"><?php if(isset($_SESSION['username'])) echo ('Área de '.$_SESSION['username']); else echo('Área de Cliente')?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasMenuLabel">Área de Cliente</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <?php if(empty($_SESSION['username'])){ //utilizador não autenticado?>
          
            <a class="nav-link" href="index.php?p=login">Login</a>
          
          
            <a class="nav-link" href="index.php?p=registo">Registo</a>
          
        <?php }
        else if(!empty($_SESSION['username'])){ //utilizador autenticado?>
          
            <a class="nav-link" href="index.php?p=minha-conta">Minha conta</a>
          
          <?php if(!empty($_SESSION['type']) && $_SESSION['type']==1){ //utilizador administrador?>
            
              <a class="nav-link" href="index.php?p=administracao">Administração</a>
            </li>
          <?php } ?>
          
            <a class="nav-link" href="index.php?p=logout">Logout</a>
          
        <?php }?>
        <span class="loader"></span>
  </div>
</div>