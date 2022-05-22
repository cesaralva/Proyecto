<?php
$hostname = 'mysql:host=localhost; dbname=blog';
$user = 'root';
$password = '';

//$lastname = $_GET['lasetname'];
try {
    $conexion = new PDO($hostname, $user,$password);
    /* echo 'conexion ok '; */

    //metodo de tipo query
    foreach ($conexion->query('SELECT * FROM profile') as $fila) {
        print_r($fila);
    }

//Prepared statements

$statement =$conexion ->prepare('SELECT * FROM nav WHERE nav_id = :id');
$statement ->execute(
   array(
    'id' => '1'
   )
   );
   $resultado =$statement -> fetch();
   print_r(($resultado));
   }
    
 catch (PDOException $e) {
    print "Error de conexion " . $e->getMessage() . "<br/>";
}




?>


