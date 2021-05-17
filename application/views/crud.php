<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/datatables.min.css" />

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
						Registra producto
					</button>
					<br><br>
					<hr>

					<table class="table" id="Tablaproductos">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Nomre producto</th>
								<th scope="col">Referencia</th>
								<th scope="col">Precio</th>
								<th scope="col">Peso</th>
								<th scope="col">Stock</th>
								<th scope="col">Acciones</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>

					<!-- Modal para registra productos -->
					<form method="POST" id="Guadarproducto" action="<?php echo base_url(); ?>controller_crud/guardar">
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Registro de producto</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">

										<div class="form-group">
											<label for="exampleInputNamprod">Nombre Producto</label>
											<input type="text" class="form-control" id="exampleInputNamprod" name="exampleInputNamprod" placeholder="Enter nombre producto" required>
										</div>
										<div class="form-group">
											<label for="exampleInputRefe">Referencia</label>
											<input type="text" class="form-control" id="exampleInputRefe" name="exampleInputRefe" placeholder="Referencia" required>
										</div>
										<div class="form-group">
											<label for="exampleInputPrecio">Precio</label>
											<input type="number" class="form-control" id="exampleInputPrecio" name="exampleInputPrecio" placeholder="Precio" required>
										</div>
										<div class="form-group">
											<label for="exampleInputPeso">Peso</label>
											<input type="number" class="form-control" id="exampleInputPeso" name="exampleInputPeso" placeholder="Peso" required>
										</div>
										<div class="form-group">
											<label for="inputcategoria">Categoria</label>
											<select id="inputcategoria" name="inputcategoria" class="form-control">
												<option selected>Seleccione ..</option>
												<option value='1'>Aseo</option>
												<option value='2'>enlatados</option>
												<option value='3'>lacteos</option>
											</select>
										</div>
										<div class="form-group">
											<label for="exampleInputStock">Stock</label>
											<input type="number" class="form-control" id="exampleInputStock" name="exampleInputStock" placeholder="Stock" required>
										</div>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" id="cerrarmodal" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary" id="GuardarProducto">Guardar</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- end modal -->
					<!-- Modal para registra productos -->
					<form method="POST" id="modificarproducto_1" action="<?php echo base_url(); ?>controller_crud/modificar/">
						<div class="modal fade" id="modificarproducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_1" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel_1">Modificar de producto</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">

										<div class="form-group">
											<label for="exampleInputNamprod">Nombre Producto</label>
											<input type="text" class="form-control" id="exampleInputNamprod_m" name="exampleInputNamprod_m" placeholder="Enter nombre producto">
										</div>
										<div class="form-group">
											<label for="exampleInputRefe">Referencia</label>
											<input type="text" class="form-control" id="exampleInputRefe_m" name="exampleInputRefe_m" placeholder="Referencia" >
										</div>
										<div class="form-group">
											<label for="exampleInputPrecio">Precio</label>
											<input type="number" class="form-control" id="exampleInputPrecio_m" name="exampleInputPrecio_m" placeholder="Precio" required>
										</div>
										<div class="form-group">
											<label for="exampleInputPeso">Peso</label>
											<input type="number" class="form-control" id="exampleInputPeso_m" name="exampleInputPeso_m" placeholder="Peso" required>
										</div>
										
										<div class="form-group">
											<label for="exampleInputStock">Stock</label>
											<input type="number" class="form-control" id="exampleInputStock_m" name="exampleInputStock_m" placeholder="Stock" required>
										</div>
										<input type="hidden" id="exampleInputID_m" name="exampleInputID_m">
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" id="cerrarmodal_1" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary" id="modipro">Guardar</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- end modal -->
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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		var baseurl = "<?php echo base_url(); ?>";
		
	</script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>

</html>