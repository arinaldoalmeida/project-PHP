<?php include "layout/header.php"; ?>
<?php //include_once "layout/header.php"; ?>
<?php //require "layout/header.php"; ?>

<?php include "layout/menu.php"; ?>

<div class="container">
	<p>&nbsp;</p>
	<h1>Página principal</h1>
	<div class="row">
		<div class="col">
			
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page">Home</li>
				</ol>
			</nav>
			<!-- Corrossel -->
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-292" src="img/mochila.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-292" src="img/notebook.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-292" src="img/celular.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			

			<!-- Corrossel -->
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="https://raw.githubusercontent.com/arinaldoalmeida/project-PHP/master/sistema-loja/img/estoque.jpg" alt="Imagem de capa do card">
				<div class="card-body">
					<h5 class="card-title">Título do card</h5>
					<p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					<a href="#" class="btn btn-primary">Visitar</a>
				</div>
			</div>
		</div>

		<div class="col">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="https://raw.githubusercontent.com/arinaldoalmeida/project-PHP/master/sistema-loja/img/estoque.jpg" alt="Imagem de capa do card">
				<div class="card-body">
					<h5 class="card-title">Título do card</h5>
					<p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					<a href="#" class="btn btn-primary">Visitar</a>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="https://raw.githubusercontent.com/arinaldoalmeida/project-PHP/master/sistema-loja/img/estoque.jpg" alt="Imagem de capa do card">
				<div class="card-body">
					<h5 class="card-title">Título do card</h5>
					<p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					<a href="#" class="btn btn-primary">Visitar</a>
				</div>
			</div>
		</div>

	</div>

</div>

<?php include "layout/footer.php"; ?>