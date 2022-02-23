<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cesar Alva | Developer</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">




</head>

<body>
    <?php
    include 'profile.php';
    ?>


    <nav>
        <div>
            <?php
            print "<h2 class=\"name\">$name $lastname</h2>";
            ?>
        </div>
    </nav>

    <section>
        <nav>
            <div>
              
                  <ul>
                    <?php
                    foreach ($nav as $Nav_element) {
                        echo '<li>' . $Nav_element . '</li>';
                    }
                    ?>
                </ul>
                
            </div>
        </nav>

        <div>




        </div>
    </section>

    <section class="container about">
        <h2>



            <?php
            echo $nav[0]
            ?>
            <li>
                <img class="perfil" src="img/profile.jpg" alt="foto de perfil">
                <span class="sub-title"> Cloud Technical Solutions Consultant &amp; Development Instructor</span>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Odio commodi modi esse iure est iusto sit eligendi dolore at porro,
                    neque dolorem corrupti distinctio rem excepturi eius, inventore,
                    molestiae labore.</p>

            </li>

        </h2>
    </section>
    <section class="container services">
        <h2>
            <?php
            echo $nav[1]
            ?>
        </h2>
    </section>
    <section class="container works">
        <h2>
            <?php
            echo $nav[2]
            ?>
        </h2>
    </section>
    <section class="container blog">
        <h2>
            <?php
            echo $nav[3]
            ?>
        </h2>
    </section>
    <section class="container contact">
        <h2>
            <?php
            echo $nav[4]
            ?>
        </h2>
    </section>


    <section class="redes">
        <div>
            <lu>
                <li>
                    <img src="img/facebook.svg" alt="icono de facebook">
                    <img src="img/instagram.svg" alt="icono de instagram">
                    <img src="img/linkedin.svg" alt="icono de linkedin">
                </li>
            </lu>
        </div>
    </section>
    </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>