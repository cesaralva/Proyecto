<section class="container works" id="works">
    <h2>
        <?php
        echo $nav[2]
        ?>
    </h2>
    <?php
 

    $sql = "SELECT * FROM works";

    $resultado = $conexion->query($sql);

    while ($fila = $resultado->fetch_assoc()) {
        echo $fila['title'] . '_' . $fila['description'] . '<br/>';
        # code...
        echo '<a href=' . $fila['url'] . '> - </a>';
        echo '<img src="'  . $fila['img'], '"alt="">';
    }

    ?>
</section>