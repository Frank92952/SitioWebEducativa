<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensaje = $_POST['mensaje'];

    // Configuración del correo electrónico
    $destinatario = 'fcaysahuanadelao@gmail.com'; // Reemplaza con tu dirección de correo electrónico
    $asunto = 'Nuevo mensaje desde el formulario de contacto';

    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Email: $email\n";
    $cuerpo .= "Celular: $celular\n";
    $cuerpo .= "Mensaje: $mensaje\n";

    // Envío del correo
    $resultado = mail($destinatario, $asunto, $cuerpo);

    // Verificar si el correo se envió correctamente
    if ($resultado) {
        echo "El mensaje se envió correctamente. Gracias por contactarnos.";
    } else {
        echo "Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>