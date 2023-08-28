<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   <title>Acerca De</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

   <style>
      .blue{
         background: #404b8b;
      }
      .white{
         background: #ffffff;
      }
      .m{
         margin: 10px;
      }
   </style>
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
   <h3>Plantel Institucional</h3>
   <p> <a href="../index.php">Inicio</a> / Acerca de </p>
</section>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="../images/mensajedirectivos.jpg" alt="">
   </div>

   <div class="content">
      <h3 class="about-title">Mensaje de los directivos</h3>
      <p>Estimada comunidad educativa,

         Nos dirigimos a ustedes con alegría y entusiasmo para darles la más cordial bienvenida a un nuevo año escolar en la Institución Educativa "Enrique Rosado Zárate". Como directivos de esta querida institución, estamos comprometidos con brindarles una educación de calidad y formar a nuestros estudiantes como ciudadanos integrales, capaces de enfrentar los desafíos del futuro.
         
         Nos enorgullece contar con un equipo docente excepcional, dedicado y altamente capacitado, que trabaja arduamente para garantizar un entorno de aprendizaje enriquecedor y estimulante. Nuestro objetivo principal es fomentar el desarrollo académico, social y emocional de cada estudiante, promoviendo su autonomía, creatividad y pensamiento crítico.
         
         En la Institución Educativa "Enrique Rosado Zárate", valoramos la participación activa de las familias en la educación de sus hijos. Creemos en la importancia de establecer una relación sólida y colaborativa entre padres, docentes y alumnos, ya que juntos formamos un equipo que trabaja en aras del éxito educativo. <br> <br>

         ¡Adelante, con entusiasmo y determinación! <br> <br>

         Atentamente, <br>

         Sub Directora, Ester

      </p>
   </div>

</section>

<!-- about section ends -->

<!-- teachers section starts  -->


<section class="teachers">

   <h1 class="heading">NOSOTROS</h1>

   <div class="swiper teachers-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <h3>Nos proyectamos ser una Institución Educativa competitiva en el bicentenario que brinde servicios educativos de calidad, para fortalecer las competencias de nuestros niños y niñas en lo intelectual, social, moral, emocional, tecnológico y ciudadano para
                  afrontar los retos del mundo actual, basada en valores con principios científicos, humanistas e inclusivos, en un enfoque ambiental.
               </h3>
               <div class="share">
                  <h5>VISION</h5>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <h3>Somos una Institución Educativa que brindamos una educación de calidad, formadora de niñas y niñas competentes con valores, creativos, investigadores, conciencia
                  ambiental, uso de la tecnología, desarrollo de la ciudadanía, con principios humanistas e inclusivos, capaces de afrontar los retos de la sociedad actual.
               </h3>
               <div class="share">
                  <h5>MISION</h5>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <h3>
                  <li>
                     <ul>
                        <li><h3>Responsabilidad</h3></li>
                        <li><h3>Respeto</h3></li>
                        <li><h3>Puntualidad</h3></li>
                        <li><h3>Honestidad</h3></li>
                        <li><h3>Liderazgo</h3></li>
                        <li><h3>Competitividad</h3></li>
                     </ul>
                  </li>
               </h3>
               <div class="share">
                  <h5>VALORES</h5>
               </div>
            </div>
         </div>
         
      </div>

   </div>

</section>


<!-- students reviews section starts  -->

<section>
   <h1 class="heading">Directorio de llamada</h1>
   <div class="row blue p-5 ">
      <div class="row">
         <div class="row text-white">
            
         </div>
         <div class="row d-flex flex-row">
            <div class="col-md-2 col-sm-12 white p-3 m">
               <div class="row"><h4>Directivo</h4></div>
               <div class="row"><h4>info@gmail.com</h4></div>
               <div class="row"><h4>902456738</h4></div>
            </div>
            <div class="col-md-2 col-sm-12 white p-3 m">
               <div class="row"><h4>SubDirector</h4></div>
               <div class="row"><h4>info@gmail.com</h4></div>
               <div class="row"><h4>902456738</h4></div>
            </div>
            <div class="col-md-2 col-sm-12 white p-3 m">
               <div class="row"><h4>Coordinador</h4></div>
               <div class="row"><h4>info@gmail.com</h4></div>
               <div class="row"><h4>902456738</h4></div>
            </div>
            <div class="col-md-2 col-sm-12 white p-3 m">
               <div class="row"><h4>Secretaria</h4></div>
               <div class="row"><h4>info@gmail.com</h4></div>
               <div class="row"><h4>902456738</h4></div>
            </div>
         </div>
      </div>
   </div>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>