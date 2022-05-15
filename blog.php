<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cesar Alva|Developer Web</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <?php

    include "conexion.php";
    include "profile.php";
    include "nav.php";

    ?>
    <section class="container blog" id="Blog">
        <h2 class="display-4 text-center mb-md-4">
            <?php
            echo $nav[3]
            ?>
        </h2>


    </section>
    <script src="./lib/bootstrap/js/jquery.slim.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.bundle.js"></script>

</body>

</html>