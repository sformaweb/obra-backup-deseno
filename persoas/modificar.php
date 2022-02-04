<?php
require '../persoas/conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM persoas WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>
<html lang="gl">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="../css-obra/modificar-nuevo.css">
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="../js/header.js"></script>
	<script src="../js/footer.js"></script>
</head>

<body>
	<!-- MENU SUPERIOR -->
	<header-component></header-component>

	<!-- MAIN -->

	<div class="container">
		<div class="row">
			<h3 style="text-align:center">MODIFICAR REXISTRO</h3>
		</div>

		<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
			<div class="form-group">
				<label for="nome" class="col-sm-2 control-label">Nome:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome" value="<?php echo $row['nome']; ?>" required>
				</div>
			</div>

			<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

			<div class="form-group">
				<label for="primeiro_apelido" class="col-sm-2 control-label">Primeiro Apelido:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre" name="primeiro_apelido" placeholder="Primeiro Apelido" value="<?php echo $row['primeiro_apelido']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="segundo_apelido" class="col-sm-2 control-label">Segundo Apelido:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre" name="segundo_apelido" placeholder="Segundo Apelido" value="<?php echo $row['segundo_apelido']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="nif" class="col-sm-2 control-label">DNI / NIF:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="telefono" name="nif" placeholder="Número do DNI" value="<?php echo $row['nif']; ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="data_nacemento" class="col-sm-2 control-label">Data de nacemento:</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="email" name="data_nacemento" placeholder="Correo electrónico" value="<?php echo $row['data_nacemento']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="sexo" class="col-sm-2 control-label">Sexo:</label>
				<div class="col-sm-10">
					<select class="form-control" id="estado_civil" name="sexo">
						<option value="HOME" <?php if ($row['sexo'] == 'HOME') echo 'selected'; ?>>HOME</option>
						<option value="MULLER" <?php if ($row['sexo'] == 'MULLER') echo 'selected'; ?>>MULLER</option>
						<option value="OUTRO" <?php if ($row['sexo'] == 'OUTRO') echo 'selected'; ?>>OUTRO</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="codigo_postal" class="col-sm-2 control-label">Código postal:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="email" name="codigo_postal" placeholder="Código postal" value="<?php echo $row['codigo_postal']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="telefono" class="col-sm-2 control-label">Teléfono</label>
				<div class="col-sm-10">
					<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="<?php echo $row['telefono']; ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">Correo electrónico:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="telefono" name="email" placeholder="Correo electrónico" value="<?php echo $row['email']; ?>">
				</div>
			</div>

			<br>
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