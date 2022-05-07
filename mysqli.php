<?php
$conexion = new mysqli("localhost","root","", "blog");

echo $conexion -> connect_errno


/* if ($conexion->connect_errno) {
    die('Connect Error: ' . $conexion->connect_errno);
}

if (!$conexion) {
    die('Connect Error: ' . mysqli_connect_errno());
}
 */
?>

