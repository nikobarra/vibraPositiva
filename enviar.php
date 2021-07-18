<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- linkeo bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link estilos propios -->
    <link rel="stylesheet" href="../css/style.css">

    <meta name="keywords" content="balcarce, flores, bach, cuerpo, mente, alma, mascotas, humanos, plantas, terapia, alternativa, energia">
    <meta name="description" content="contactanos para empezar a cambiar tu vida">

    <script src="https://kit.fontawesome.com/e2dc135306.js" crossorigin="anonymous"></script> <!--linkeo iconos-->
    
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    

    <title>Enviado</title>

</head>
<body>

<?php 
$myemail = 'nikodread1979@gmail.com';
$name = $_POST['nombre'];
$apell = $_POST ['apellido'];
$email = $_POST['email'];
$phone = $_POST['telefono'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Apellido: $apell \n Correo: $email \n Mensaje: \n $phone";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>

    <header class="container-fluid">
        <div class="content-logo">
            <img src="../img/logoPersonas.jpg" alt="banner con logo principal flores" >    
        </div>
        <div class="drop">
            <img src="../img/drop.png">
            <img src="../img/drop.png">
            <img src="../img/drop.png">
            <img src="../img/drop.png">
            <img src="../img/drop.png">
            <img src="../img/drop.png">
            <img src="../img/drop.png">
            <img src="../img/drop.png">
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand"><i class="fab fa-pagelines"></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/pets.html">Mascotas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/people.html">Personas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/bach.html">Sobre Bach</a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link" href="../pages/aboutFlowers.html">Sobre Las flores</a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link active" href="../pages/contact.html">Contacto</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="contact-container contact-caja">  
      <div class="container-fluid">
        <div class="form-container">
            <p class="title">Ingrese sus datos para que nos pongamos en contacto</p> 
            <form  method="POST" action="enviar.php" class="form-container">
                <div class="form-item nombre">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <span class="item-indicator"></span>
                </div>
                <div class="form-item apellido">
                    <input type="text" name="apellido" placeholder="Apellido">
                    <span class="item-indicator"></span>
                </div>
                <div class="form-item email">
                    <input type="text" name="correo" placeholder="e-mail">
                    <span class="item-indicator"></span>
                </div>
                <div class="form-item telefono">
                    <input type="text" name="telefono" placeholder="Telefono">
                    <span class="item-indicator"></span>
                </div>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-success" type="Submit">Enviar</button>
                    <button class="btn btn-secondary" type="reset">Borrar</button>
                  </div>
            </form>

        </div>
      </div>
    </div> 
    

    <footer class="container-fluid">
        <!--las redes sociales apuntan al home sin usuario definido por el momento-->
        <div>
            <a href="https://www.facebook.com"> 
                <i class="fab fa-facebook-square"></i> 
            </a>
            <a href="https://www.instagram.com" > 
                <i class="fab fa-instagram-square"></i>
            </a>
        </div>
            <p> Webmaster: Nicolas Barra</p> <!--Acomodar mas adelante cuando corresponda-->
    </footer>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>