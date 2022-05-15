<section class="container works" id="works">
    <h2 class="display-4 text-center mb-md-4">
        <?php
        echo $nav[2]
        ?>
    </h2>
     <?php
    if ($conexion->connect_errno) {
        die('Error de conexion');
    } else {

        $sql = 'SELECT * FROM works';
        $resultado = $conexion->query($sql);

        echo '<div class=" container ">';
        echo '<div class="row">';

        while ($fila = $resultado->fetch_assoc()) {
            echo '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 ">';
            echo '<div class="card-services card mb-5 text-center" style="width: auto;">';
            echo '<img src=" ' . $fila['img'] . '  " class="card-img-top mx-auto d-block img-fluid" img-responsive alt="...">';

            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $fila['title'] . '</h5>';
            echo '<p class="card-text">' . $fila['description'] . '</p>';
            echo '<a href="' . $fila['url'] . '" class="btn btn-primary" target="_blank" >Ver mas Informacion</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo   '</div>';
        echo   '</div>';
    }

    ?>
</section>