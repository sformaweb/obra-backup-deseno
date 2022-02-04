<?php
require 'conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM empresas WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="../css-obra/modificar-nuevo.css">
	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/header.js"></script>
	<script src="../js/footer.js"></script>
</head>

<body>
	<!-- MENU SUPERIOR -->
	<header-component></header-component>

	
    <div class="container">
		<div class="row">
			<h3 style="text-align:center">MODIFICAR REXISTRO</h3>
		</div>

		<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
			<div class="form-group">
				<label for="nome" class="col-sm-2 control-label">Nome:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo $row['nome']; ?>" required>
				</div>
			</div>

			<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

			<div class="form-group">
				<label for="poboacion" class="col-sm-2 control-label">Poboación</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="poboacion" name="poboacion" placeholder="poboacion" value="<?php echo $row['poboacion']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="actividade" class="col-sm-2 control-label">Actividade</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="actividade" name="actividade" placeholder="actividade" value="<?php echo $row['actividade']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="data_incorporacion" class="col-sm-2 control-label">Data de incorporación</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="data_incorporacion" name="data_incorporacion" placeholder="data incorporacion" value="<?php echo $row['data_incorporacion']; ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="ofertas_contratacion" class="col-sm-2 control-label">Ofertas de contratación</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="ofertas_contratacion" name="ofertas_contratacion" placeholder="ofertas contratacion" value="<?php echo $row['ofertas_contratacion']; ?>" required>
				</div>
			</div>
		

			<div class="form-group">
				<label for="ofertas_formacion" class="col-sm-2 control-label">Ofertas de formacion</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="ofertas_formacion" name="ofertas_formacion" placeholder="ofertas formacion" value="<?php echo $row['ofertas_formacion']; ?>" required>
				</div>
			</div>
		
			<br>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<a href="index.php" class="btn btn-default"><u>VOLTAR</u></a>
					<button type="submit" class="btn btn-primary">GARDAR</button>
				</div>
			</div>
		</form>
	</div>
	<!-- FOOTER -->
	<footer-component></footer-component>
	<!-- FOOTER -->
	
</body>

</html>
