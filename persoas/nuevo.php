<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../css-obra/modificar-nuevo.css">
<script src="../js/header.js"></script>
<script src="../js/footer.js"></script>

<body>
	<!-- MENU SUPERIOR -->
	<header-component></header-component>

	<!-- MAIN -->

	<div class="container">
		<div class="row">
			<h3 style="text-align:center">NOVO REXISTRO</h3>
		</div>

		<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nome" class="col-sm-2 control-label">Nome:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome" required>
					</div>
				</div>
				<div class="form-group">
					<label for="primeiro_apelido" class="col-sm-2 control-label">Primeiro Apelido:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="primeiro_apelido" placeholder="Primeiro Apelido" required>
					</div>
				</div>
				<div class="form-group">
					<label for="segundo_apelido" class="col-sm-2 control-label">Segundo Apelido:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="segundo_apelido" placeholder="Segundo Apelido" required>
					</div>
				</div>
				<div class="form-group">
					<label for="nif" class="col-sm-2 control-label">DNI / NIF:</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="nif" name="nif" placeholder="Número do DNI" pattern="[0-9]{8}+[A-Z]{1}" maxlength="9" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="data_nacemento" class="col-sm-2 control-label">Data de nacemento:</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="data_nacemento" name="data_nacemento" placeholder="dd-mm-aa" required>
					</div>
				</div>
				<div class="form-group">
					<label for="sexo" class="col-sm-2 control-label">Sexo:</label>
					<div class="col-sm-10">
						<select class="form-control" id="sexo" name="sexo">
							<option value="HOME">HOME</option>
							<option value="MULLER">MULLER</option>
							<option value="OUTRO">OUTRO</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="codigo_postal" class="col-sm-2 control-label">Código postal:</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Código postal" maxlength="5" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Teléfono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" maxlength="9" required>
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Correo electrónico:</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico">
					</div>
				</div>
				
				<br>
				<br>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">VOLTAR</a>
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