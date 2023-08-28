<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contáctanos</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<!-- header section starts  -->

<header class="header">

   <img src="../images/logo1.png" width="90" height="50" alt="">
   <a href="#" class="logo">  I.E. 30093 Enrique Rosado Zarate </a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="../index.php">Inicio</a>
      <a href="about.php">Acerca De</a>
      <a href="event.php">Último Evento</a>
      <a href="cursos.php">Cursos</a>
      <a href="contact.php">Contáctanos</a>
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

   <form action="../conexion/IniciarSesion.php" method="POST"  class="login-form active">
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

   <form class="register-form" action="../conexion/RegistrarSesion.php" method="POST">
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

<section class="heading-link">
   <h3>Contáctanos</h3>
   <p> <a href="../index.php">Inicio</a> / Contáctanos </p>
</section>

<!-- contact section starts  -->

<section class="contact">

   <h1 class="heading"> Ponerse en Contácto </h1>

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
         <h3>Horario de apertura:</h3 >
         <p>08:00am to 03:00pm</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
         <h3>Celular:</h3>
         <p>+51 951 871 622   </p>
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
         <h3> Email: </h3>
         <p>Ester@gmail.com</p>
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
         <h3>Ubicación:</h3>
         <p>Calle Santo Domingo N° 162 Sicaya - Huancayo - Junín</p>
      </div>

   </div>

   <div class="row">

      <div class="image">
         <img src="../images/lugar.png" alt="">
      </div>

      <form action="enviar_correo.php" method="POST">
      <h3>Mandanos un mensaje</h3>
      <input type="text" name="nombre" placeholder="nombre" class="box">
      <input type="email" name="email" placeholder="email" class="box">
      <input type="number" name="celular" placeholder="celular" class="box">
      <textarea name="mensaje" class="box" placeholder="mensaje" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="enviar mensaje" class="btn">
   </form>

   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq">

   <h1 class="heading">Preguntas frecuentes</h1>

   <div class="accordion-container">

      <div class="accordion active">
         <div class="accordion-heading">
            <h3>Enseñaza contextualizada</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            La mediación del docente parte de lo vivencial y práctico para luego, usando metodologías desarrolladoras, generar nuevos niveles de razonamiento, pensamiento critico y creatividad.
								
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>Aprendizaje colaborativo e individual</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            El aprendizaje activo, colaborativo y autónomo dirigida por los docentes, asegura el desarrollo y perfeccionamiento de competencias.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>Liderazgo y valores</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            
		Un clima de sana convivencia y  gran protagonismo estudiantil caracteriza nuestra enseñanza, inspirando el interés y compromiso de los estudiantes.
							
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>Docentes con Vocación</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Docentes investigadores y comprometidos con el aprendizaje y la formación d el personalidad de sus estudiantes.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>Propuesta Educativa</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            El propósito principal es la formación integral de nuestros estudiantes; por ello, consideramos que debe promover el desarrollo de las capacidades cognitivas, artísticas y deportivas.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>Infraestructura de calidad</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Nuestros Institución Educativa brindan los mejores espacios y condiciones para el aprendizaje de sus estudiantes.
         </p>
      </div>

   </div>

</section>

<!-- faq section ends -->

<!-- logo slider starts  -->

<section class="logo-container">
   <div class="swiper logo-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide"> <img src="images/subject-icon-1.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/subject-icon-2.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/subject-icon-3.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/subject-icon-4.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/subject-icon-5.png" alt=""> </div>
      </div>
   </div>
</section>

<!-- logo slider ends -->







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
   







<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>