<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<title>Prueba Konecta</title>
</head>

<body>
	<!-- Encabezado de la página -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light  bg-dark" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon bg-white"></span>
					</button>
					<a href="index.html" class="navbar-brand text-white">Prueba Konecta</a>
				</div>
				<!--Menu -->
				<div class="row collapse navbar-collapse" id="menu">
					<div class="col">
						<ul class="nav nav-pills" id="pills-tab" role="tablist">
							<!--<li class="nav-item">
								<a class="nav-link active text-white" id="menu_1" data-toggle="pill" role="tab"
									aria-controls="pills-home" aria-selected="true">Trabajos Individuales</a>
							</li>> -->
							<li class="nav-item">
								<a class="nav-link text-white" id="menu_2" data-toggle="pill" role="tab" aria-controls="pills-gr" aria-selected="false">Registro de productos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white" id="menu_3" data-toggle="pill" role="tab" aria-controls="pills-exam" aria-selected="false">Venta de productos</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- Aqui va el jumbotron -->
	<section class="jumbotron">
		<div class="container">
			<h1>Prueba Konecta</h1>
		</div>
	</section>
	<!-- Todo el contenido -->
	<section class="main container">


		<!-- Contenido de los trabajos iGrupales-->
		<div class="container menu_2">
			<h3>Explicación</h3>
			<p class="parrafo">Registros de productos y visualización de ellos.</p>
			<div class="container-list">
				<div class="list" id="list">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						Launch demo modal
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									...
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Contenido de la evaluacion -->
		<div class="container menu_3">
			<div class="container-list">
				<div class="list" id="list">
					<div class="row Fase">
						<div class="col-md-12 text-center">
							<p class="parrafo">Enlace de la evaluación en línea.</p>
							<p class="parrafo">Tiempo límite : 2 Horas</p>
							<p class="parrafo">Número de Intentos: 1</p>
							<button class="btn btn-success" id="AbrirQuiz">Abrir Examen</button>
						</div>
					</div>
				</div>
			</div>
		</div>



	</section>
	<!-- Footer del blog-->
	<br>
	<footer class="bg-dark">
		<div class="text-center">
			<label class="mt-2">Copyright 2021 - Prueba KONECTA</label>
		</div>
	</footer>
	<!-- Footer -->
	<!-- Js -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>

</html>