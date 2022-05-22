<?php


//$lastname = $_GET['lasetname'];
try {

    $hostname = 'mysql:host=localhost; dbname=blog';
    $user = 'root';
    $password = '';

    $conexion = new PDO($hostname, $user, $password);
    /* echo 'conexion ok '; */

    //metodo de tipo query
  
} catch (PDOException $e) {
    print "Error de conexion " . $e->getMessage();
    die();
}
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina']:1;
$entrada = 3;
$inicio = ($pagina > 1 ) ? ($pagina * $entrada - $entrada):0;

$articulos = $conexion -> prepare("SELECT SQL_CALC_FOUND_ROWS * FROM post LIMIT $inicio, $entrada");
$articulos -> execute();

$articulos = $articulos -> fetchAll();
//print_r($articulos);

$totalEntrada = $conexion -> query('SELECT FOUND_ROWS() as total');
$totalEntrada = $totalEntrada -> fetch()['total'];
//echo $totalEntrada;

$numeroEntrada = ceil($totalEntrada / $entrada);
//echo $numeroEntrada;


$sql = 'SELECT * FROM services';
//$resultado = $conexion->query($sql);

echo '<div class=" container ">';
echo '<div class="row">';

