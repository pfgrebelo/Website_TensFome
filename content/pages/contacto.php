<main class="container border mb-2 shadow-lg p-3"><!--CONTEUDO DA PAGINA-->
<img src="img/banner/banner-contacto.gif" alt="" class="container mx-auto">
    <div class="text-center">
      <h1 class="animate__animated animate__fadeInLeft">CONTACTO</h1>
      <p>Estamos prontos para ajudar. Para entrar em contacto connosco pode fazê-lo através do seu telefone, email, ou até pelo nosso formulário.</p>
    </div>
    <hr>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-3 col-lg-3">
          <h5>Apoio ao cliente / Encomendas</h5>
          <i class="bi bi-telephone-fill"></i>
          <p>911 222 333<br>Horário: 10:00 às 22:00</p>
          <i class="bi bi-envelope-fill"></i>
          <p>apoioaocliente@tensfome.pt</p>
        </div>
        <div class="col-xl-9 col-lg-9">
          <div class="text-left">
            <form action="email.php" method="get" class="row g-3 w-75 mx-auto bg-white m-2 border border-5 border-dark">
            <div class="mb-3">
                <label for="FormInputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="FormInputNome" name="form-name" placeholder="Primeiro e ultimo nome">
              </div>
              <div class="mb-3">
                <label for="FormInputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="FormInputEmail" name="form-from" placeholder="Insira o seu email">
              </div>
              <div class="mb-3">
                <label for="FormInputAssunto" class="form-label">Assunto</label>
                <input type="text" class="form-control" id="FormInputAssunto" name="form-subject" placeholder="Assunto">
              </div>
              <div class="mb-3">
                <label for="FormInputMsg" class="form-label">Mensagem</label>
                <textarea class="form-control" id="FormInputMsg" name="form-message" rows="5" placeholder="Mensagem"></textarea>
              </div>
              <div class="col-12 mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-primary">Limpar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
    <?php 
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'empty'){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-triangle-fill"></i> Necessário preencher campos obrigatórios.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
  }elseif($r == 'error'){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-triangle-fill"></i> Erro no envio do email.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
  elseif($r == 'ok'){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check2-circle"></i> Email enviado com sucesso.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php }
}?>