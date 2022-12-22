<?php
$servername = "localhost";
$database = "postulados";
$username = "root";
$password = "";
//Hacemos un llamado al input del formulario postulate
$nombre= ($_POST['nombrepost']);
$apellido= ($_POST['apellidopost']);
$correo= ($_POST['correopost']);
$tel= ($_POST['phonepost']);
$archivo= ($_POST['filepost']);
$dni=($_POST['dni']);

// Crear conexión
$connection= mysqli_connect($servername, $username, $password);
//Chequear la conexión
if (!$connection) {
    
}
else{
    
}
//indicamos seleccionar a la base de datos
$db= mysqli_select_db($connection,$database);
//comprobación
if (!$db){

}

else{
}
//insertar datos de registro en mi base de datos solo si tengo completos los input de mi formulario
if ($nombre!="" && $apellido!="" && $correo!="" && $tel!="" && $archivo!="" && $dni!=""){
    $instruccion_SQL= "INSERT INTO subircv (nombre,apellido,correo,tel,archivo,dni) VALUES ('$nombre','$apellido','$correo','$tel','$archivo','$dni')";
    $resultado= mysqli_query($connection,$instruccion_SQL);
}
else{
    echo "<script>alert('Todos los campos son obligatorios');</script>";
}
$dni2= ($_POST['dni2']);
$consulta2= "DELETE FROM subircv WHERE dni='$dni2'";
$result2= mysqli_query($connection,$consulta2);
if (!$result2)
    {
        echo "<script>alert('Se eliminó su postulación con éxito')</script>";
    }
else{
    echo "<script>alert('El Dni ingresado es incorrecto')</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--ESTILO BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
<!--ESTILO CSS-->
    <style>
      
      #registrarse{
        background-image: url("https://img.freepik.com/vector-gratis/vector-fondo-diseno-textura-acuarela-rosa-suave-decorativo_1055-10739.jpg?w=2000");
      }
      #login{
        background-image: url("https://img.freepik.com/vector-gratis/vector-fondo-diseno-textura-acuarela-rosa-suave-decorativo_1055-10739.jpg?w=2000");
      }
      #quienes{
        background:black;
        color:white;
      }
      #postulate{
      }
      table,td ,th {
	    border: 1px solid black;
    }
    footer{
        background: black;
        color: white;
    }
    </style>

    <title>SaludMental Ya!</title>
</head>
<body>
    <!--BARRA DE MENÚ-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
       
          <a class="navbar-brand" href="">SaludMentalYA! <img id="logo" src="img/logo.jpg" width="30" height="30" class="d-inline-block align-top"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#quienes">¿QUIENES SOMOS?</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    FORMÁ PARTE
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#registrarse">REGISTRATE</a>
                    <a class="dropdown-item" href="#login">INICIÁ SESIÓN</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#postulate">SÚMATE COMO PROFESIONAL</a>
                </div>
               </li>
             <li class="nav-item">
                <a class="nav-link" active aria-current="page" href="#">Contacto </a>
             </li>
            </ul>
           
        </div>
    </nav>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active ">
                <img class="d-block w-100" src="https://eupharlaw.com/wp-content/uploads/2016/10/banner-salud-mental.png" alt="First slide" 
                width="620" height="600">
          </div>
          <div class="carousel-item ">
                <img class="d-block w-100" src="https://www.corprodinco.org/wp-content/uploads/2020/10/Banner-Dia-de-la-Salud-Mental.png" alt="Second slide"
                width="620" height="600">
          </div>
          <div class="carousel-item">
                <img class="d-block w-100" src="https://cordescorporacion.cl/wp-content/uploads/2016/05/Banner-salud-mental-naranja-.png" alt="Third slide"
                width="620" height="600">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </a>
      </div>
    
    <section id=quienes>
        <div class="container-fluid">
    <h1><b>NOS PRESENTAMOS...</b></h1>
            <img src= "https://www.ceupe.com/images/easyblog_articles/3089/b2ap3_large_que-es-una-empresa-concepto-definicion.jpg" width= "1200" height="500">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, similique? Fugiat cum corporis, asperiores alias accusamus tenetur provident quam. Quibusdam id assumenda laboriosam. Deleniti ab dolorum rem laudantium voluptatum illum.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, vero minus? Veniam totam harum numquam quibusdam at optio neque nemo exercitationem. Quas eos nam harum magnam atque reprehenderit ut amet!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam sit aspernatur, amet accusamus in quam ex beatae deleniti perspiciatis fuga porro modi, rem, veniam iusto ut esse labore error quibusdam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore reprehenderit, itaque aliquam consectetur possimus blanditiis dicta consequuntur accusamus cupiditate doloremque vero quisquam neque esse pariatur ipsam et? Facere, dolore dolor?</p>
        </div>
        
    </section>

    <section id=registrarse>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card">
                        <br>
                        <div class="card-header">
                            <img src="https://veedorfiscal.files.wordpress.com/2014/09/registro1.jpg?w=627&h=470" width="300"alt="">
                        </div>
                        <div class="card-body">
                            
                            <form  action="principal.php" method="post">
                                <input type="email"class="form-control"  name="email" id="email_user" placeholder="Ingrese su email">
                                <br><input class="form-control" type="password" name="pass_user" id="password_user" placeholder="Contraseña">
                                <br><input type="password" class="form-control" name="repite_pass" id="repite_password" placeholder="Repetir contraseña">
                                <br><button class="form-control" type="submit" name="enviar" >Confirmar</button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>

    <section id="login">
        <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4"><br>
                        <div class="card">
                            <div class="card-header">
                                <img src="img/logo.jpg" width="250" height="250" ><br>
                                <br><b><i><u>Iniciar Sesión</u></i></b>
                            </div>
                            <div class="card-body">
                                <form action="principal.php" method="POST">
                                        
                                        <br><input class="form-control" type="email"  name="username" placeholder="Usuario" >
                                        <br><input class="form-control" type="password" name="password" placeholder="Password">
                                        <br><br><button type="submit" class="form-control" name="btnIngresar" >Ingresar</button>
                                        
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                

                </div>
            </div>
    </section>
    <section id= postulate>
        <div class="container">
            <form action="principal.php" method="POST" autocomplete="off">
                <div class="row">
                    <div class="col-md-6">
                            <h1> ENVIANOS TU CURRICULUM</h1>
                            <h1><u>"FORMULARIO DE POSTULACIÓN"</u></h1>
                            <br>Nombre: <input class="form-control" type="text" name="nombrepost" placeholder="Nombre completo">
                            <br>Apellido: <input class="form-control" type="text" name="apellidopost" placeholder="Apellido/s" >
                            <br>Correo actualizado: <input  class="form-control" type="text" name="correopost" >
                            <br> Teléfono/Celular: <input class="form-control" type="text" name="phonepost" >
                            <br> DNI: <input class="form-control" type="text" name="dni" >
                            <br>Subir currículum: <input class="form-control" type="file" name="filepost" >
                            <br><button type="submit" class="btn btn-primary form-control">Enviar</button>

            </form>
                        
                            <br><br><br>    
                    </div>
                    <div class="col-md-6">
                        <br><br><br>
                        <?php 
                        //SELECCIONO MI TABLA COMPLETA
                        $consulta= "SELECT * FROM subircv";
                        $result= mysqli_query($connection,$consulta);
                        if (!$result)
                        {
                            echo "No se ha podido realizar la consulta";
                        }

                        echo "<table>";
                        echo "<tr>";
                        echo "<th><h1>Nombre</th></h1>";
                        echo "<th><h1>Apellido</th></h1>";
                        echo "<th><h1>Correo</th></h1>";
                        echo "<th><h1>Tel</th></h1>";
                        echo "<th><h1>Archivo</th></h1>";
                        echo "</tr>";

                        while ($colum=mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                echo "<td><h2>" . $colum['nombre']. "</td></h2>";
                                echo "<td><h2>" . $colum['apellido']. "</td></h2>";
                                echo "<td><h2>" . $colum['correo'] . "</td></h2>";
                                echo "<td><h2>" . $colum['tel'] . "</td></h2>";
                                echo "<td><h2>" . $colum['archivo'] . "</td></h2>";
                                echo "</tr>"; 
                            }
                            echo "</table>";
                   
?>
                    </div>       
        </div>
    </section>
    <div class="container">
     ¿Desea retirar su postulación?
                        Ingrese su dni:
                        <form action="principal.php"
                        method="POST">
                             <input type="text" name="dni2">
                             <button type="submit" class="btn btn-danger">Eliminar </button>
                        </form>
    </div>
    
      <!-- PIE DE PÁGINA-->
    <footer>
                <p class="h4"><u><b>CONTACTO</b></u></p>
                <p class="h5">Nos podes encontrar en las siguientes redes sociales. Hacé Click! </p>
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"><a href="https://es-la.facebook.com/"><img src="https://cdn.icon-icons.com/icons2/808/PNG/512/facebook_icon-icons.com_66092.png" width="80"></a></li>
                    <li class="list-inline-item"> <a href="https://www.instagram.com/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" width="70"></a></li>
                    <li class="list-inline-item"><a href="https://www.whatsapp.com/?lang=es"><img src="https://www.freepnglogos.com/uploads/whatsapp-png-image-9.png" alt="" width="80"></a></li>
                    <li class="list-inline-item"><a href="https://www.youtube.com/"><img src="https://trebolito.com/wp-content/uploads/2018/05/youtube-logo-png-20.png" alt="" width="80"></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/?lang=es"><img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/Twitter_Logo.png" alt="" width="80"></a></li>
                </ul>
            </div>
        </div>
    </footer>
      
</body>
</html>