
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!-- swiper css link  -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="stylesheet" href="estylos1.css" />
<link rel="stylesheet" href="../css/style.css" />
</head>
<style>

</style>
<body>

<header class="header">
   <img src="../images/logo1.png" width="90" height="50" alt="">
   <a href="#" class="logo">  I.E. 30093 Enrique Rosado Zarate </a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="../index.php">Inicio</a>
      <a href="Administrador.php">Mensaje</a>
      <a href="VerMensaje.php">Administrador</a>
   </nav>

</header>
<section class="actualizar-mensaje">
<?php
// Conectar a la base de datos (Asegúrate de establecer los valores correctos para tu base de datos)
session_start();
include('../conexion/Conexion.php');
// Obtener los datos del formulario
$id = $_POST['id'];
$nombre = $_POST['titulo'];
$mensaje = $_POST['contenido'];

// Actualizar el mensaje en la base de datos
$sql = "UPDATE mensaje SET titulo = '$nombre', contenido = '$mensaje' WHERE id = $id";

if ($conexion->query($sql) === TRUE) {
    echo "Mensaje actualizado correctamente.";
} else {
    echo "Error al actualizar el mensaje: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>

</section>


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

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</body>
</html>