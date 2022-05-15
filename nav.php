<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">CsarAlvaDev</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php
            if ($conexion->connect_errno) {
                die('Connect Error: ');
            } else {

                $sql = 'SELECT * FROM nav';
                $resultado = $conexion->query($sql);

                while ($fila = $resultado->fetch_assoc()) {
                    echo '<li class="nav-item active"><a class="nav-link" href="#' . $fila['name'] . '">' . $fila['name'] . '</a></li>';
                }
            }

            ?>


            <!-- Devuelve un array asociativo de strings que representa a la fila obtenida del 
            conjunto de resultados, donde cada clave del array representa el nombre de una de las columnas
             de éste; o null si no hubieran más filas en dicho conjunto de resultados.-->




        </ul>
    </div>
</nav>