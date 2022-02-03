<?php
session_start();
if (isset($_SESSION["usuario"])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>
        <?php echo '<h4>Benvido ' .$_SESSION["usuario"].'</h4>'; ?>
    </h2>
    <a href="salir.php">Saír a Login</a><br><br>
    <a href="../index.php">Ir a Rexistro de Persoas</a><br><br>
    <a href="../empresas/index.php">Ir a Rexistro de Empresas</a>
    
</body>
</html>

<?php 
}else{
    header("location:login.php");
}
?>