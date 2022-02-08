<?php

$conn = mysqli_connect("localhost", "root", "", "obra");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}


?>
<html>

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
    <!-- HEADER -->
    <header-component></header-component>
    <!-- MAIN -->
    <div class="container">
        <h3 style="text-align: center;">ENGADIR CITA</h3>
        <form class="form-horizontal" action="insert.php" method="post">
            <div class="form-group">
                <label class="required">Data</label>
                <div class="col-sm-10">
                    <input class="form-control date-input" type="date" name="data" id="data" data-trigger="hover" data-toggle="popover">
                </div>
            </div>
            <div class="form-group">
                <label class="required">Nome</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="nome" id="nome">
                </div>
            </div>
            <div class="form-group">
                <label class="required">Hora de comezo</label>
                <div class="col-sm-10">
                    <input class="form-control time-input" type="text" name="horain" id="horain">
                </div>
            </div>
            <div class="form-group">
                <label class="required">Hora de saída</label>
                <div class="col-sm-10">
                    <input class="form-control time-input" type="text" name="horaout" id="horaout">
                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <div style="margin-left:4%" class="col-sm-10">
                    <input  class="btn-primary" type="submit" value="Confirmar">
                </div>
            </div>
        </form>
    </div>
    <!-- FOOTER -->
    <footer-component></footer-component>

</body>

</html>