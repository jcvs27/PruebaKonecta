<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"> 
	<title>Fase 5</title>
</head>

<body>
	<!-- Encabezado de la página -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light  bg-dark" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu"
						aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon bg-white"></span>
					</button>
					<a href="index.html" class="navbar-brand text-white">Fase 5</a>
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
								<a class="nav-link text-white" id="menu_2" data-toggle="pill" role="tab"
									aria-controls="pills-gr" aria-selected="false">Trabajos Grupales</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white" id="menu_3" data-toggle="pill" role="tab"
									aria-controls="pills-exam" aria-selected="false">Evaluación en Línea</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white" id="menu_4" data-toggle="pill" role="tab"
									aria-controls="pills-contact" aria-selected="false">Quienes somos</a>
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
			<h1>Blog Proyecto de Grado</h1>
			<p class="parrafo">Fase 5</p>
		</div>
	</section>
	<!-- Todo el contenido -->
	<section class="main container">
	
	
		<!-- Contenido de los trabajos iGrupales-->
		<div class="container menu_2">
			<h3>Explicación</h3>
			<p class="parrafo">Documentos de las diferentes fase de los trabajos Colaborativos.</p>
			<div class="container-list">
				<div class="list" id="list">
					<!-- ? Fase #2 -->
					<div class="row Fase">
						<div class="col-md-4 foto v mb-1">
							<p class="label">Fase</p>
							<img src="" alt="">
						</div>
						<div class="col-md-4">
							<p class="label">Tema</p>
							<p class="dato">Propuesta Inicial</p>
						</div>
						<div class="col-md-4">
							<p class="label">Documento</p>
							<a href="https://drive.google.com/file/d/1fxSSrADdlI6CMi_Kng5FXZ2a2GLMdWyH/view?usp=sharing"
								target="_blank" class="btn btn-primary">Ver</a>
						</div>
					</div>

					<!-- ? Fase #3 -->
					<div class="row Fase">
						<div class="col-md-4 foto  mb-1">
							<p class="label">Fase</p>
							<img src="" alt="">
						</div>
						<div class="col-md-4">
							<p class="label">Tema</p>
							<p class="dato">Avance de la propuesta</p>
						</div>
						<div class="col-md-4">
							<p class="label">Documento</p>
							<a href="https://drive.google.com/file/d/1Z0x2aHcCBkIXNmHIkPsgz0oLuc8Pfl5p/view?usp=sharing"
								target="_blank" class="btn btn-primary">Ver</a>
						</div>
					</div>

					<!-- ? Fase #4 -->
					<div class="row Fase">
						<div class="col-md-4 foto mb-1">
							<p class="label">Fase</p>
							<img src="" alt="">
						</div>
						<div class="col-md-4">
							<p class="label">Tema</p>
							<p class="dato">Propuesta Ampliada</p>
						</div>
						<div class="col-md-4">
							<p class="label">Documento</p>
							<a href="https://drive.google.com/drive/folders/1ct6o9RfmL6vZXhOcxtcYrnXM6nmADGvO?usp=sharing"
								target="_blank" class="btn btn-primary">Ver</a>
						</div>
					</div>
					<div class="row Fase">
						<div class="col-md-4 foto mb-1">
							<p class="label">Fase</p>
							<img src="" alt="">
						</div>
						<div class="col-md-4">
							<p class="label">Tema</p>
							<p class="dato">Evaluación final por proyecto</p>
						</div>
						<div class="col-md-4">
							<p class="label">Documento</p>
							<a href="https://drive.google.com/file/d/1-rDlG1ZsR8lDn5UYqPv4nUrf2psgFaSl/view?usp=sharing" target="_blank" class="btn btn-primary">Ver</a>
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
			<label class="mt-2">Copyright 2020 - Proyecto de Grado</label>
		</div>
	</footer>
	<!-- Footer -->
	<!-- Js -->
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>

</html>