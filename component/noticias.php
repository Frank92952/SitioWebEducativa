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
   <link rel="stylesheet" href="../css/style.css">

</head>
<body >
   
<!-- header section starts  -->

<header class="header">
   <img src="../images/logo1.png" width="90" height="50" alt="">
   <a href="#" class="logo">  I.E. 30093 Enrique Rosado Zarate </a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="component/index.html">Inicio</a>
      <a href="component/about.html">Acerca De</a>
      <a href="component/event.html">Último Evento</a>
      <a href="component/cursos.html">Cursos</a>
      <a href="component/contact.html">Contáctanos</a>
   </nav>

   <div class="icons">
      <div id="account-btn" class="fas fa-user"></div>
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>
   
</header>

<!-- account form section starts  -->

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


<h1 class="heading">Noticias Institucionales</h1>
<section class="about">
   <div class="image">
      <img src="../images/image1.png" alt="">
   </div>

   <div class="content">
      <h3 class="about-title">Conoce a tus maestros: Un vistazo detrás de las aulas</h3>
      <p>En un esfuerzo por promover la transparencia y fortalecer la relación entre los estudiantes y sus educadores, la escuela primaria I.E. Enrique Rosado Zarate ha implementado una nueva iniciativa llamada "Conoce a tus maestros". Esta innovadora propuesta busca acercar a los alumnos a los profesores y permitirles conocer más sobre sus antecedentes, pasiones y métodos de enseñanza.

        Durante una serie de eventos especiales, los estudiantes tendrán la oportunidad de interactuar de manera más cercana con sus maestros, fuera del entorno de aula. Estas actividades incluirán charlas informales, juegos interactivos y presentaciones de los profesores sobre sus intereses y experiencias personales.
        Además de las actividades programadas, se ha establecido un espacio en la página web de la escuela donde los profesores compartirán información adicional sobre sí mismos, como sus experiencias educativas, intereses personales y consejos para el éxito académico. Esto permitirá a los alumnos profundizar en su conocimiento sobre sus maestros incluso después de los eventos presenciales.</p>
      
   </div>
</section>

<div class="linea">
</div>

<section class="about">
    <div class="image">
       <img src="../images/image2.png" alt="">
    </div>
 
    <div class="content">
       <h3 class="about-title">Elección de Consejo Estudiantil: Los líderes del mañana son elegidos por sus compañeros</h3>
       <p>En un emocionante proceso democrático, los estudiantes de la Escuela Secundaria Central participaron en la elección del nuevo Consejo Estudiantil, un evento anual que permite a los jóvenes ejercer su derecho a votar y elegir a los líderes que los representarán en el próximo año escolar.

        Después de una intensa campaña que duró varias semanas, los candidatos presentaron sus plataformas y propuestas en asambleas escolares, carteles coloridos y discursos motivadores. Los estudiantes demostraron un gran interés en el proceso, asistiendo a los mítines electorales y participando activamente en debates sobre temas importantes para la comunidad estudiantil.
        
        La elección se llevó a cabo de manera justa y transparente, con mesas de votación instaladas en diferentes puntos estratégicos de la escuela. Los estudiantes emitieron sus votos de manera responsable, seleccionando a los candidatos que consideraban más capaces de representar sus intereses y trabajar para el beneficio de toda la comunidad estudiantil.</p>
       
    </div>
 </section>

 <div class="linea">
</div>

 <section class="about">
    <div class="image">
       <img src="../images/image3.png" alt="">
    </div>
 
    <div class="content">
       <h3 class="about-title">Regreso a clases: Lo que tienes que saber para un retorno exitoso</h3>
       <p>Con el inicio del nuevo año escolar a la vuelta de la esquina, estudiantes, padres y educadores se preparan para el esperado regreso a clases. Para asegurar un retorno exitoso, es importante estar al tanto de las medidas y recomendaciones establecidas por las autoridades educativas. Aquí te presentamos todo lo que necesitas saber: <br><br>
 
        Horarios y transporte: Verifica los horarios de clases, tanto de inicio como de finalización, para organizar tu rutina diaria. Además, asegúrate de conocer las opciones de transporte disponibles y si se han implementado cambios en las rutas o protocolos de transporte escolar. <br> <br>
        
        Útiles y materiales escolares: Prepara tu mochila con los útiles y materiales necesarios para el primer día de clases. Esto puede incluir libros de texto, cuadernos, lápices, bolígrafos y cualquier otro material solicitado por los profesores. <br> <br>
        
        Reuniones con los profesores: Estate atento a las fechas de las reuniones iniciales con los profesores. Estas reuniones son una excelente oportunidad para conocer a tus docentes, obtener información sobre las expectativas del curso y plantear cualquier pregunta o inquietud que puedas tener.</p>
    </div>
 </section>


 <div class="linea">
</div>


<!-- <section class="reviews">
 
   <h1 class="heading">Comunicados </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam
                beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/icon4.png" alt="">
            <h3>Director</h3>
            
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam 
               eatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/icon4.png" alt="">
            <h3>Sub Directora</h3>
            
         </div>

         <div class="swiper-slide slide">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim animi atque numquam harum libero nemo, eligendi laboriosam 
               beatae quo iure corrupti, neque rerum possimus non nisi quia! Cumque, tempora sit.</p>
            <img src="images/icon4.png" alt="">
            <h3>Administrador</h3>
            
         </div>
      </div>

   </div>

</section> -->

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