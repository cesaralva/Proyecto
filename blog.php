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
    require "post.php";
    ?>

    <section class="container blog" id="Blog">
        <h2 class="display-4 text-center mb-md-4">
            <?php
            echo $nav[3]
            ?>
        </h2>

        <?php


        foreach ($articulos as $articulo) {
            echo '<div class="card mb-3">';
            echo "<img src='{$articulo['img']}'class='card-img-top' alt=''>";
            echo '<div class="card-body">';
            echo "<h5 class='card-title'>{$articulo['title']}</h5>";
            echo "<p class='card-text'>{$articulo['information']}</p>";
            echo "<p class='card-text'><small class='text-muted'>{$articulo['date_start']}</small></p>";
            echo ' </div>';
            echo '</div>';
        }
        ?>

        <nav aria-label="Page navigation example">
            <ul class="pagination">

                <?php
                if ($pagina == 1) {
                    echo "<li class='page-item disabled'>
                                <a class='page-link' href='' aria-label='Previous'>
                                    <span aria-hidden='true'>&laquo;</span>
                                </a>
                            </li>";
                } else {
                    echo "<li class='page-item'>";
                    echo '<a class="page-link" href="?pagina=' . $pagina - 1 . '" aria-label="Previous">';
                    echo "<span aria-hidden='true'>&laquo;</span>
                                </a>
                            </li>";
                }
                
                   
                


                for ($i = 1; $i <= $numeroEntrada; $i++) {
                    if ($pagina == $i) {
                        echo "<li class='page-item active'><a class='page-link' href='?pagina={$i}'>{$i}</a></li>";
                    } else {
                        echo "<li class='page-item'><a class='page-link' href='?pagina={$i}'>{$i}</a></li>";
                    }
                }
                ?>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

    </section>
    <script src="./lib/bootstrap/js/jquery.slim.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.bundle.js"></script>

</body>

</html>

<?php

/*        echo '</li>';
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
     <a class="page-link" href="#" aria-label="Next">
    <span aria-hidden="true">&raquo;</span>
            </a>
         </li>
        </ul>;
    </nav> */

?>