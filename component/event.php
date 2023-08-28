<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Eventos Escolares</title>

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
   <h3>Eventos Escolares</h3>
   <p> <a href="../index.php">Inicio</a> / Eventos </p>
</section>

<section class="courses">

   <h1 class="heading"> Eventos de la Institución Educativa </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="../images/event1.jpg" alt="">
            <h3>1° Grado</h3>
         </div>
         <div class="content">
            <h3>¡ Día de la madre !</h3>
            <p>Este día los niños del primer grado celebrarón a sus madre con el baile del festejo </p>
            <a href="#" class="btn">Leer mas</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="../images/event2.jpg" alt="">
            <h3>2° Grado</h3>
         </div>
         <div class="content">
            <h3>¡Día del Padre!</h3>
            <p>Este día los alumnos celebraron a los padres con una hermosa hora loca</p>
            <a href="#" class="btn">Leer mas</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="../images/evento3.jpg" alt="">
            <h3>3° Grado</h3>
         </div>
         <div class="content">
            <h3>¡Día del maestro !</h3>
            <p>¡Este día los alumnos crearon un baile mix !</p>
            <a href="#" class="btn">Leer mas</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="../images/evento4.jpg" alt="">
            <h3>4° Grado</h3>
         </div>
         <div class="content">
            <h3>¡Campeonato!</h3>
            <p>Este día era el campeonato donde partiparon todo la Institución Educativa </p>
            <a href="#" class="btn">Leer mas</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="../images/evento5.jpg" alt="">
            <h3>5° Grado</h3>
         </div>
         <div class="content">
            <h3>¡Foto de todo el salón!</h3>
            <p>Una foto para el recuerdo de todo el salon</p>
            <a href="#" class="btn">Leer mas</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="../images/evento6.jpg" alt="">
            <h3>6° Grado</h3>
         </div>
         <div class="content">
            <h3>¡Navidad !</h3>
            <p>Los alumnos protagaonizaron un escena del nacimiento del niño Jesus</p>
            <a href="#" class="btn">Leer mas</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

      <div class="box hide">
         <div class="image">
            <img src="../images/evento7.jpg" alt="">
            <h3>Ingles</h3>
         </div>
         <div class="content">
            <h3>Ingles</h3>
            <p>Saber inglés te permitirá: Tener acceso a información actualizada y completa. Conocer y obtener la mayoría de textos científicos, académicos y tecnológicos que se encuentran originalmente redactados en inglés</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

      <div class="box hide">
         <div class="image">
            <img src="../images/evento8.jpg" alt="">
            <h3>Educación Fisica</h3>
         </div>
         <div class="content">
            <h3>Educación Fisica</h3>
            <p>Los estudiantes no solo necesitan recibir lecciones dentro de un aula de clase, sino que también deben practicar deportes que les ayuden a mejorar su condición física y alcanzar el equilibrio que necesitan en su vida.
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

      <div class="box hide">
         <div class="image">
            <img src="../images/evento9.jpg" alt="">
            <h3>Computación</h3>
         </div>
         <div class="content">
            <h3>Computación</h3>
            <p>Aprender el uso de una computadora en los niños favorece la comunicación, y además son más autónomos a la hora de aprender. Muchos juegos favorecen su sistema cognitivo y ayudan al desarrollo de ciertas actividades mentales.</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

   </div>

   <div class="load-more"> <div class="btn">Leer mas</div> </div>

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
<script src="../js/script.js"></script>

</body>
</html>