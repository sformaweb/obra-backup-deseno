<?php
	
	require 'conexion.php';
	
	$nome = $_POST['nome'];
	$poboacion = $_POST['poboacion'];
	$actividade = $_POST['actividade'];
	$data_incorporacion = $_POST['data_incorporacion'];
    $ofertas_contratacion = $_POST['ofertas_contratacion'];
    $ofertas_formacion = $_POST['ofertas_formacion'];
	
	

	
	// $arrayIntereses = null;
	
	// $num_array = count($intereses);
	// $contador = 0;
	
	// if($num_array>0){
	// 	foreach ($intereses as $key => $value) {
	// 		if ($contador != $num_array-1){
	// 		$arrayIntereses .= $value.' ';
	// 		$contador++;
	// 		} else {
	// 		$arrayIntereses .= $value;
	// 		}
	// 	}
	// }
	
	$sql = "INSERT INTO empresas (nome, poboacion, actividade, data_incorporacion, ofertas_contratacion, ofertas_formacion) VALUES ('$nome', '$poboacion', '$actividade', '$data_incorporacion', '$ofertas_contratacion', '$ofertas_formacion')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-theme.css" rel="stylesheet">
		<link rel="stylesheet" href="../css-obra/guardar-eliminar-update.css">
		<script src="../js/jquery-3.1.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REXISTRO GARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AO GARDAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>