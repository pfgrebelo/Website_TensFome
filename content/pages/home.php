<main class="container border mb-2 shadow-lg text-center p-3"><!--CONTEUDO DA PAGINA-->
  <img src="img/banner/banner-index.gif" alt="" class="container mx-auto">
    <h1 class="animate__animated animate__fadeInLeft">TENS FOME <?php if(isset($_SESSION['username'])) echo $_SESSION['username']?>?</h1>
    <p>Está com fome mas não lhe apetece cozinhar? Está demasiado confortável no seu pijama para ir comer ao seu restaurante favorito?<br>Não tem problema, nós levamos o restaurante até si!<br> É só fazer a encomenda e nós levamos os seus pratos favoritos a sua casa.</p>
    <hr>
    <!--SLIDER DE IMAGENS-->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade border border-3 border-white w-75 mx-auto" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slider/img1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block border border-3 border-white">
        <h5>O nome de um Restaurante</h5>
        <p>Uma pequena descrição.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slider/img2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block border border-3 border-white">
        <h5>Outro Restaurante</h5>
        <p>Uma pequena descrição.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slider/img3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block border border-3 border-white">
        <h5>Mais um Restaurante</h5>
        <p>Uma pequena descrição.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>