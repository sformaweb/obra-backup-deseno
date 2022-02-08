<?php
require 'conexion.php';

$where = "";

if (!empty($_POST)) {
	$valor = $_POST['campo'];
	if (!empty($valor)) {
		$where = "WHERE nome LIKE '%".$valor."%'";
	}
}
$sql = "SELECT * FROM empresas $where";
$resultado = $mysqli->query($sql);

?>



<!-- <html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h2 style="text-align:center">EMPRESAS</h2>
			</div>
			
			<div class="row">
				<a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>			
			</div>
		</div>
	</body>
	
</html> -->

<html lang="gl">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="../css-obra/empresas-index.css">
	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/header.js"></script>
	<script src="../js/footer.js"></script>
</head>

<body>

	<!-- MENU SUPERIOR -->
	<header-component></header-component>
	
	<!-- MAIN -->
	<div class="container">
		<div class="row1">
			<h2 style="text-align:center">Empresas</h2>
		</div>

		<div class="row2">
			<a href="nueva.php" class="btn btn-primary">Nova Empresa</a>

			<div class="busca-persoas">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nome: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>
		</div>

		<br>

		<div class="row table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Poboación</th>
						<th>Actividade</th>
						<th>Data de incorporación</th>
						<th>Ofertas de contratación</th>
						<th>Ofertas de Formación</th>
					</tr>
				</thead>

				<tbody>
					<?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['nome']; ?></td>
							<td><?php echo $row['poboacion']; ?></td>
							<td><?php echo $row['actividade']; ?></td>
							<td><?php echo $row['data_incorporacion']; ?></td>
							<td><?php echo $row['ofertas_contratacion']; ?></td>
							<td><?php echo $row['ofertas_formacion']; ?></td>
							<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><i class="fas fa-pencil-alt"></i></a></td>
							<td><a href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash-alt"></i></a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Eliminar Rexistro</h4>
				</div>

				<div class="modal-body">
					¿Desea eliminar este registro?
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<a class="btn btn-danger btn-ok">Delete</a>
				</div>
			</div>
		</div>
	</div>

	<!-- <button id="myBtn"><a href="#top" style="color: white; text-decoration: none";><i class="fas fa-chevron-up"></i></a></button> -->
	<div id="myBtn"><a href="#top" ;><i class="fas fa-chevron-up"></i></a></div> 

		<!-- FOOTER -->
		<footer-component></footer-component>
		<!-- FOOTER -->
	<script>
		$('#confirm-delete').on('show.bs.modal', function(e) {
			$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

			$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
		});
	</script>

</body>

</html>