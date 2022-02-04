<?php
	
	require 'conexion.php';

	$id = $_GET['id'];
	
	$sql = "DELETE FROM empresas WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="gl">
	<head>
		
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="../css-obra/guardar-eliminar-update.css">
	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REXISTRO ELIMINADO</h3>
				<?php } else { ?>
				<h3>ERRO AO ELIMINAR</h3>
				<?php } ?>
				
				<a href="index.php" class="btn btn-primary">VOLTAR</a>
				
				</div>
			</div>
		</div>
		
	</body>
</html>
