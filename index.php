<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CsarAlvaDev| Developer Web</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">



</head>

<body>
    <?php
    include 'conexion.php';
    include 'profile.php';
    include 'nav.php';


    ?>

    <h2 class="texto text-center"> I am <span class="typing text-center">Cesar Alva</span></h2>




    <?php
    include 'redes.php';
    include 'about.php';
    include 'services.php';
    include 'works.php';
    include 'contacto.php';
    include 'footer.php';
    ?>

    <script src="./js/typing.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.js" integrity="sha512-ggJ7yQCnXifbDXFFfyNhegaNXkkPMP+0cxMDobX6pABvU4zrqD+NMXxrGoAK9iANboRjpR4ajwWHCCfJXJFpJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
    <script src="./lib/bootstrap/js/jquery.slim.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.bundle.js"></script>

</body>

</html>