<?php 
	require_once('conexion.php');
	/*if (isset($_SESSION['id_usu'])) {*/
?>		
		<!DOCTYPE html>
		<html>
		<head>
			<?php #require_once("../head/head.php"); ?>
			<title>Multiservicios: Productos</title>
		</head>
		<body>
			<div class="container">
				<?php #require_once("../header/header.php"); ?>
				<main class="container">
					<div class="container my-5"> 
						<div class="row p-4">
							<div class="col-md-5">
								<div class="card">
									<div class="card-body">
										<form id="task-form" method="post">
											<div class="form-group">
												<input type="text" name="cat" id="cat" class="form-control my-2" placeholder="Ingrese categoria">
											</div>
											<div class="form-group">
												<input type="text" name="des" id="des" class="form-control my-2" placeholder="Ingrese descripcion">
											</div>
											<div class="form-group">
												<input type="text" name="can" id="can" class="form-control my-2" placeholder="Ingrese cantidad">
											</div>
											<div class="form-group">
												<input type="text" name="pre" id="pre" class="form-control my-2" placeholder="Ingrese precio">
											</div>
											<button type="submit" class="btn btn-primary text-center w-100" name="action" value="add">Guardar</button>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<div class="card-body">
									<form class="d-flex">
										<input type="search" id="search" class="form-control me-2" placeholder="Buscar" name="">
										<button type="submit" class="btn btn-warning">Buscar</button>
									</form>
								</div>
								<div class="card my-a" id="task-result">
									<div class="card-body">
										<ul id="container"></ul>
									</div>
								</div>
								<table class="container table table-dark table-striped " id="tabla_pro">
									<thead>	
										<tr>
											<th>ID</th>
											<th>CATEGORIA</th>
											<th>DESCRIPCION</th>
											<th>CANTIDAD</th>
											<th>PRECIO</th>
											<th></th>
										</tr>
									</thead>
									<tbody id="task"></tbody>
								</table>
						
							</div>
						</div>
						
					</div>
						
				</main>
				<?php include_once("../footer/footer.php") ?>
				
			</div>
		
		<script  src="jquery.js"></script>
		<script  src="ajax/productos.ajax.js"></script>
		<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		
		
		</body>
		</html>

<?php 		
	/*}else{
		header("Location:".conectar::ruta()."index.php");
	}*/

 ?>