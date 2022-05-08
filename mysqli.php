<?php

if ($conexion->connect_errno) {
    die('Connect Error: ');
} else{
    echo "conexion exitosa";
}

$sql = "SELECT * FROM services";

$resultado = $conexion -> query($sql);

echo $resultado -> num_rows;

while ($fila = $resultado -> fetch_assoc()) {
    echo $fila ['title'] . '_' . $fila['description'] .'<br/>';
    # code...
    echo '<a href='.$fila['url'].'> - </a>';
    echo '<img src="'  . $fila['img'] ,'"alt="">';
}
?>