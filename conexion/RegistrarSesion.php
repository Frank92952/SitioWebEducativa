<?php
   session_start();
   include('Conexion.php');

   if(isset($_POST['Usuario']) && isset($_POST['Clave']) && isset($_POST['RClave']) ) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']);
    $Clave = validate($_POST['Clave']);
    $RClave = validate($_POST['RClave']);


    if (empty($Usuario)) {
        header("Location: ../index.php?error1=El Usuario Es Requerido");
        exit();
    }elseif (empty($Clave)) {
        header("Location: ../index.php?error1=La Clave Es Requerida");
        exit();
    }elseif (empty($RClave)){
        header("Location: ../index.php?error1=Repetir La Clave Es Requerida");
        exit();
    }elseif($Clave !== $RClave){
        header("Location: ../index.php?error1=La clave no coincide");
        exit();
    }else{
        //$Clave = md5($Clave);
        $sql = " SELECT * FROM usuarios WHERE Usuario = '$Usuario'";
        $query = $conexion->query($sql);

        if(mysqli_num_rows($query) > 0){
            header("Location: ../index.php?error=El usuario ya existe!");
            exit();   
            }else {
               $sql2 = "INSERT INTO usuarios(Usuario, Clave) VALUES('$Usuario', '$Clave')";
               $query2= $conexion->query($sql2);

               if ($query2) {
                header("Location: ../index.php?success=Usuario Creado Con Exito!");
                exit();   
               }else {
                header("Location: ../index.php?success=Ocurrio un Error!");
                exit(); 
               }
            }
        }
    }else{
        header("Location: ../index.php");
            exit();
    }

?>