<?php include "layout/header.php"; ?>
<?php //include_once "layout/header.php"; ?>
<?php //require "layout/header.php"; ?>

<?php include "layout/menu.php"; ?>

<div class="container">
	<p>&nbsp;</p>
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
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-292" src="img/merry.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-292" src="img/relogios.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-292" src="img/bik.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-292" src="img/not.png" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-292" src="img/merry2.jpg" alt="Third slide">
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
			<div class="card ext-white bg-warning mb-3" style="width: 20rem;">
				<img class="card-img-top" src="img/produto1.jpg" alt="Imagem de capa do card">
				<div class="card-body">
					<h5 class="card-title">Notebook Ideapad 320</h5>
					<p class="card-text">Intel Core i3 4GB 1TB Full HD 15.6'' Prata Windows 10 com Dolby Áudio, entrada USB tipo C, WiFi AC ultrarrápido</p>
					<a href="#" class="btn btn-dark">Visitar</a>
				</div>
			</div>
		</div>

			<div class="col">
			<div class="card ext-white bg-warning mb-3" style="width: 20rem;">
				<img class="card-img-top" src="img/note9.jpg" alt="Imagem de capa do card">
				<div class="card-body">
					<h5 class="card-title">Smartphone Samsung Galaxy Note 9 </h5>
					<p class="card-text">128GB Nano Chip Tela 6.4" Octa-Core 2.8GHz 4G Câmera Dupla 12 MP 6GB RAM,Caneta S Pen</p>
					<a href="#" class="btn btn-dark">Visitar</a>
				</div>
			</div>
		</div>
			<div class="col">
			<div class="card ext-white bg-warning mb-3" style="width: 20rem;">
				<img class="card-img-top" src="img/ops.jpg" alt="Imagem de capa do card">
				<div class="card-body">
					<h5 class="card-title">	Call Of Duty: Black Ops 4 - XBOX ONE</h5>
					<p class="card-text">No Blackout, o Black Ops ganha vida em uma experiência massiva de batalha real</p>
					<a href="#" class="btn btn-dark">Visitar</a>
				</div>
			</div>
		</div>

	</div>

</div>

<?php include "layout/footer.php"; ?>