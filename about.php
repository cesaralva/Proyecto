<section class="container about" id="sobre%20mi">
    <div>
        <div class="row">
            <div class="col">
                <img class="perfil" src="img/profile.jpg" alt="foto de perfil">
            </div>
            <div class="col">
                <div>
                    <h5>Mi nombre es Cesar</h5>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Odio commodi modi esse iure est iusto sit eligendi dolore at porro,
                        neque dolorem corrupti distinctio rem excepturi eius, inventore,
                        molestiae labore.</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Progreso de trabajo</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

/*
 Inserting data into the database. 
if ($conexion -> connect_errno) {
    die("Error de conexion");
}else {
    $sql = "INSERT INTO profile(name, lastname, role, email, phone,  address, city, birthday) 
    VALUES('Cesar','Alva','estudiante','csarx09@gmail.com','912659101','Jr. Ayacucho 3891','Lima','1985-09-16')";

 Checking if the row was added. 
    $resultado = $conexion->query($sql);
   if ($conexion -> affected_rows <=1) {                                                                                                                                                                                                                                                                
       echo "fila agregada:" . $conexion->affected_rows;
}
}
?>
*/

/* Metodo Preparared statements */
/* 
if ($conexion->connect_errno) {
} else {
    $statement = $conexion->prepare("INSERT INTO profile(name, lastname, role, email, phone,  address, city, birthday) 
    VALUES(?,?,?,?,?,?,?,?)");

    $statement->bind_param(
        'ssssisss',
        $name,
        $lastname,
        $role,
        $email,
        $phone,
        $address,
        $city,
        $birthday
    );

    $name = "Cesar";
    $lastname = "Alva";
    $role = "Programador";
    $email = "csarx09@gmail.com";
    $phone = 912659101;
    $address = "jr Ayacucho 3891";
    $city = "Lima";
    $birthday = '1985-09-16';

    $statement->execute();
    echo "fila agregada" . $conexion->affected_rows;
} */


/* Connecting to the database and then it is selecting all the data from the profile table. */

/* Connecting to the database and then it is selecting all the data from the profile table. */
$name = 'cesar';
/* 
// Conexión de MYSQLi
if ($conexion->connect_errno) {
    die("Error de conexión");
} else {

    // Crear la declaración preparada
    $statement = $conexion->prepare("SELECT * FROM profile WHERE name=?");
    $statement->bind_param('s', $name);
    $statement->execute();

    // Asociar los resultados de la declaración preparada
    $statement->bind_result($name, $lastname, $role, $email, $phone, $address, $city, $birthday);
    $statement->fetch();

    // Imprimir en pantalla cada valor asociado
    printf($name);
    echo "<br/>";
    printf($lastname);
    echo "<br/>";
    printf($role);
    echo "<br/>";
    printf($email);
    echo "<br/>";
    printf($phone);
    echo "<br/>";
    printf($address);
    echo "<br/>";
    printf($city);
    echo "<br/>";
    printf($birthday);
}
 */







?>