<?php
session_start();
if (isset($_SESSION['usuario']) && $_SESSION['estado'] == "conectado") {
    "El usuario si esta online";
} else {
    header('Location:login/login.php');
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obra";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<html>



<head>

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css-obra/index.css">
    <script src="./js/header.js"></script>
</head>
<header-component></header-component>

<body>
    <div class="master-container">
        <div class="container-resumo">
            <h1>Axenda</h1>
            <?php
            $sql = "SELECT * FROM citas";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='table'><tr><th>Resolto</th><th>Data</th><th>Nome</th><th>Hora de comezo</th><th>Hora de saída</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td><input type='checkbox'></form><td>" . $row["data"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["horain"] . "</td><td>" . $row["horaout"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 resultados";
            }

            $conn->close();
            ?>
        </div>
        <div class="container">
            <h2>Notas</h2>
            <div class="list__items">
                <ul>
                </ul>
            </div>
            <div class="input__box">
                <input type="text" name="" id="#input__text" placeholder="Nova nota">
                <button class="add__btn"><i class="far fa-save fa-sm"></i></button>
            </div>
            <div class="cat__details">
                <span data-color="#f1c40f">
                    <p>Citas</p>
                    <div class="cat__type" style="background:#f1c40f;"></div>
                </span>
                <span data-color="#3498db">
                    <p>Documentación</p>
                    <div class="cat__type" style="background:#3498db;"></div>
                </span>
                <span data-color="#F94920">
                    <p>Reunións</p>
                    <div class="cat__type" style="background:#F94920;"></div>
                </span>
                <span data-color="#34495e">
                    <p>Chamadas</p>
                    <div class="cat__type" style="background:#34495e;"></div>
                </span>
            </div>
        </div>
    </div>
    <script src="js/index.js"></script>
</body>

<footer-component></footer-component>
<script src="js/footer.js"></script>

</html>