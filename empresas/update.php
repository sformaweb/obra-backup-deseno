<?php
	
	require './conexion.php';
	
	$id = $_POST['id'];
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
	// 		if ($contador != $num_array-1)
	// 		$arrayIntereses .= $value.' ';
	// 		else
	// 		$arrayIntereses .= $value;
	// 		$contador++;
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
						<h3>REGISTRO MODIFICADO</h3>
						<a href="./index.php" class="btn btn-primary">VOLTAR</a>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
						<a href="./modificar.php" class="btn btn-primary">VOLTAR</a>
					<?php } ?>
					
				</div>
			</div>
		</div>
		
	</body>
</html>