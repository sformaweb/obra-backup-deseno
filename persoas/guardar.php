<?php

require 'conexion.php';

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
//     foreach ($intereses as $key => $value) {
//         if ($contador != $num_array-1){
//         $arrayIntereses .= $value.' ';
//         $contador++;
//         } else {
//         $arrayIntereses .= $value;
//         }
//     }
// }

$sql = "INSERT INTO persoas (nome, primeiro_apelido, segundo_apelido, nif, data_nacemento, sexo, codigo_postal, telefono, email) VALUES ('$nome', '$primeiro_apelido', '$segundo_apelido', '$nif', '$data_nacemento', '$sexo', '$codigo_postal', '$telefono', '$email')";
$resultado = $mysqli->query($sql);

?>

<html lang="gl">

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
                <?php if ($resultado) { ?>
                    <h3>REXISTRO GARDADO</h3>
                <?php } else { ?>
                    <h3>ERRO AO GARDAR</h3>
                <?php } ?>

                <a href="./index.php" class="btn btn-primary">VOLTAR</a>

            </div>
        </div>
		</div>
		
        


</body>

</html>