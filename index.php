<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sitio Web I.E. Enrique Rosado Zarate</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
 

</head>
<body >
   
<!-- header section starts  -->

<header class="header">
   <img src="images/logo1.png" width="90" height="50" alt="">
   <a href="#" class="logo">  I.E. 30093 Enrique Rosado Zarate </a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="index.php">Inicio</a>
      <a href="component/about.php">Acerca De</a>
      <a href="component/event.php">Último Evento</a>
      <a href="component/cursos.php">Cursos</a>
      <a href="component/contact.php">Contáctanos</a>
   </nav>

   <div class="icons">
      <div id="account-btn" class="fas fa-user"></div>
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>
   
</header>

<!-- account form section starts  -->

<div class="account-form">

   <div id="close-form" class="fas fa-times"></div>

   <div class="buttons">
      <span class="btn active login-btn">Acceder</span>
      <span class="btn register-btn">Registrar</span>
   </div>

   <form action="conexion/IniciarSesion.php" method="POST"  class="login-form active">
      <h3>EROZA</h3>
      <?php
         if (isset($_GET['error'])) {  
         ?>
         <p class="error"> 
            <?php
            echo $_GET['error']
            ?>
         </p> 
      <?php      
         }
      ?>
     
      <input type="text" name="Usuario" placeholder="Usuario"  class="box">
      <input type="password" name="Clave" placeholder="Contraseña" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">Recordarme</label>
         <a href="#">¿Olvitaste tu contraseña?</a>
      </div>
      <input type="submit" value="ENTRAR" class="btn">
   </form>

   <form class="register-form" action="conexion/RegistrarSesion.php" method="POST">
      <h3>EROZA</h3>
      <?php
         if (isset($_GET['error1'])) {  
         ?>
         <p class="error1"> 
            <?php
            echo $_GET['error1']
            ?>
         </p> 
      <?php      
         }
      ?>
      <br>
      <?php
         if (isset($_GET['success'])) {  
         ?>
         <p class="success"> 
            <?php
            echo $_GET['success']
            ?>
         </p> 
      <?php      
         }
      ?>
      <input type="text" name="Usuario" placeholder="usuario" class="box">
      <input type="password" name="Clave" placeholder="Contraseña" class="box">
      <input type="password" name="RClave" placeholder="confirmar tu contraseña" class="box">
      <input type="submit" value="REGISTAR" class="btn">
   </form>

</div>
<!-- account form section ends -->

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">
      
      <div class="swiper-wrapper">

         <section class="swiper-slide slide" style="background: url(images/fondo.jpg) no-repeat;">
            <div class="content">
               <h3>Vuelta a clases</h3>
               <h4>Bienvenidos todos los estudiantes</h4>
               <a href="component/event.php" class="btn">Descubre la escuela</a>
            </div>
         </section>

         <section class="swiper-slide slide" style="background: url(images/imagenportada.jpg) no-repeat;">
            <div class="content">
               <h3>Amplios espacios, para una mejor educación</h3>
               <a href="component/contact.php" class="btn">Contáctanos</a>
            </div>
         </section>


      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- home section ends -->

<!-- subjects section starts  -->


<section class="subjects">

   <h1 class="heading">Bienvenido a la I.E. 30093 ENRIQUE ROSADO ZARATE</h1>

   <div class="box-container">
      
      <div class="box">
         <img src="images/icon1.png" alt="">
         <a href="component/cursos.php"><h3>¡Click, aquí! Programas</h3></a>
         <p>Cursos y actividades extracurriculares</p>
      </div>

      <div class="box">
         <img src="images/icon2.png" alt="">
         <a href="component/event.php"><h3>¡Click, aquí! Eventos</h3></a>
         <p>Conoce nuestros Últimos Eventos de la I.E.</p>
      </div>

      <div class="box">
         <img src="images/icon3.png" alt="">
         <a href="component/contact.php"><h3>¡Click, aquí! Admisión</h3></a>
         <p>Informes de matriculas, contáctanos</p>
      </div> 

   </div>

</section>


<!-- subjects section ends -->

<!-- home courses slider section starts  -->


<section class="home-courses">

   <h1 class="heading">Últimas Noticias</h1>

   <div class="swiper home-courses-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/image1.png" alt="">
               <h3>Conoce a tus maestros</h3>
            </div>
            <div class="content">
               <h3>Conoce a tus maestros</h3>
               <p>Conoce, quienes serán tus maestros</p>
               <a href="component/noticias.php" class="btn">Leer más</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/image2.png" alt="">
               <h3>Elección de consejo estudiantil</h3>
            </div>
            <div class="content">
               <h3>Elección de consejo estudiantil</h3>
               <p>Proceso de elección del consejo estudiantil</p>
               <a href="component/noticias.php" class="btn">Leer más</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/image3.png" alt="">
               <h3>Regreso a clases, lo que tienes que saber</h3>
            </div>
            <div class="content">
               <h3>Regreso a clases, lo que tienes que saber</h3>
               <p>Conoce más sobre el inicio del año escolar</p>
               <a href="component/noticias.php" class="btn">Leer más</a>
            </div>
         </div>

         
      </div>
   </div>
</section>

<h1 class="heading">Información Institucional</h1>
<section class="about">
   

   <div class="image">
      <img src="images/fondo.jpg" alt="">
   </div>

   <div class="content">
      <h3 class="about-title">Información esencial de la I.E.</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam 
         hic magnam fugit exercitationem neque, quae laboriosam natus. 
         Ut maxime assumenda facere ea quasi accusamus dolores delectus 
         tempora animi, expedita iste.</p>
      <div class="icons-container">
         <div class="icons">
            <img src="images/about-icon-1.png" alt="">
            <h3>5 años</h3>
            <span>Al servicio de la comunidad estudiantil</span>
         </div>
         <div class="icons">
            <img src="images/about-icon-2.png" alt="">
            <h3>Más de 600</h3>
            <span>Estudiantes</span>
         </div>
         <div class="icons">
            <img src="images/about-icon-3.png" alt="">
            <h3>Niveles</h3>
            <span>Primaria</span>
         </div>
      </div>
   </div>

</section>


<section class="mensajes-event">
<h1 class="heading">Comunicados </h1>
<?php
// Conectar a la base de datos (Asegúrate de establecer los valores correctos para tu base de datos)
include('conexion/Conexion.php');
// Obtener los mensajes de la base de datos

$sql = "SELECT * FROM mensaje";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    // Mostrar los mensajes en una tabla
    echo "<table border='5'>
            <tr>
             
              <th>Titulo</th>
              <th>Mensaje</th>
            </tr>";

    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>
               
                <td>" . $fila["titulo"] . "</td>
                <td>" . $fila["contenido"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No hay mensajes.";
}

// Cerrar la conexión
$conexion->close();
?>
</section>

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3> <i class=""></i> I.E. 30093 Enrique Rosado Zarate </h3>
         <p>Institución pública, líder en la enseñanza de la región</p>
      </div>

      <div class="box">
         <h3>Conéctate con nuestras redes sociales</h3>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-youtube"></a>
         </div>
      </div>

      <div class="box">
         <h3>Contáctanos</h3>
         <p>Calle Santo Domingo N° 162 Sicaya - Huancayo - Junín</p>
         <p>Teléfono: 064 2787789</p>
         <p>Correo: enriquerosadozarate@gmail.com</p>
         <!--<form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscribe" class="btn">
         </form>-->
      </div>

   </div>


</section>

<!-- footer section ends -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>