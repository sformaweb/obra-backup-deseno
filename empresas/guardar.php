<?php
	
	require 'conexion.php';
	
	$nome = $_POST['nome'];
	$poboacion = $_POST['poboacion'];
	$actividade = $_POST['actividade'];
	$data_alta = $_POST['data_alta'];
	$ofertas_emprego = $_POST['ofertas_emprego'];
    $ofertas_formacion = $_POST['ofertas_formacion'];
	
	$sql = "INSERT INTO empresas (nome, poboacion, actividade, data_alta, ofertas_emprego, ofertas_formacion) VALUES ('$nome', '$poboacion', '$actividade', '$data_alta', '$ofertas_emprego', '$ofertas_formacion')";
	$resultado = $mysqli->query($sql);
	
?>

<!DOCTYPE html>
<html lang="gl">
	<head>
		
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../css/bootstrap-theme.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../css-obra/guardar-eliminar-update.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REXISTRO GARDADO</h3>
					<?php } else { ?>
						<h3>ERRO AO GARDAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Voltar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>