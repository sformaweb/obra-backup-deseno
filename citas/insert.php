<!DOCTYPE html>
<html lang="en">

<head>
    <title>GFG- Store Data</title>
</head>

<body>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "obra");

    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    $data = $_REQUEST['data'];
    $nome = $_REQUEST['nome'];
    $horain = $_REQUEST['horain'];
    $horaout = $_REQUEST['horaout'];

    $sql = "INSERT INTO citas  VALUES ('$data', 
            '$nome','$horain','$horaout')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$data\n $nome\n "
            . "$horain\n $horaout\n");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Gardar datos</title>
    </head>

    <body onload="redirixe()">
        <?php

        $conn = mysqli_connect("localhost", "root", "", "obra");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $data = $_REQUEST['data'];
        $nome = $_REQUEST['nome'];
        $horain = $_REQUEST['horain'];
        $horaout = $_REQUEST['horaout'];

        $sql = "INSERT INTO citas  VALUES ('$data', 
            '$nome','$horain','$horaout')";

        if (mysqli_query($conn, $sql)) {
            echo '<script type="text/javascript">',
            'redirixe();',
            '</script>';

            echo nl2br("\n$data\n $nome\n "
                . "$horain\n $horaout\n");
        } else {
            echo "ERRO $sql. "
                . mysqli_error($conn);
        }
        ?>
        <h1>Gardando datos</h1>
        <script defer>
            function redirixe() {
                location.replace("../index.php")
            }
        </script>
        <form action="insert.php" method="post">