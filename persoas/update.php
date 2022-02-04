<?php
	
	require './persoas/conexion.phpconexion.php';
	
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$primeiro_apelido = $_POST['primeiro_apelido'];
	$segundo_apelido = $_POST['segundo_apelido'];
	$nif = $_POST['nif'];
	$data_nacemento = $_POST['data_nacemento'];
	$sexo = $_POST['sexo'];
	$codigo_postal = $_POST['codigo_postal'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	
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
	
	$sql = "UPDATE persoas SET nome='$nome', primeiro_apelido='$primeiro_apelido', segundo_apelido='$segundo_apelido', nif='$nif', data_nacemento='$data_nacemento', sexo='$sexo', codigo_postal='$codigo_postal', telefono='$telefono', email='$email' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-theme.css" rel="stylesheet">
		<link rel="stylesheet" href="../css-obra/guardar-eliminar-update.css">
        <script src="/js/jquery-3.6.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="./index.php" class="btn btn-primary">REGRESAR</a>
					
				</div>
			</div>
		</div>
		
	</body>
</html>