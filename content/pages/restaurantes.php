<main class="container border mb-2 shadow-lg text-center p-3"><!--CONTEUDO DA PAGINA-->
<img src="img/banner/banner-restaurantes.gif" alt="" class="container mx-auto">
  <h1 class="animate__animated animate__fadeInLeft">RESTAURANTES</h1>
  <p>Lista de todos os restaurantes nossos parceiros, desde Sushi a Picanha, Cozinha Portuguesa e Internacional. O que lhe apetecer, é só pedir.</p>
  <hr>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 w-75 mx-auto"> <!--TABELA DE CARDS-->
  <?php include('db/selectRestaurants.php'); ?>
</div>