<?php
require_once '../includes/conexion.php';
require_once '../includes/funciones.php';
if(isset($_POST)){
    borrarMensajes();
//Asignacione de variables
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : FALSE;
    $password = isset($_POST['password']) ? $_POST['password']: FALSE;

    $query = "SELECT * from usuario WHERE username = '$nombre' AND contrasena = '$password' ; ";
    $result = mysqli_query($conexion, $query);

    if($result &&  mysqli_num_rows($result) == 1 ){
        $usuario = mysqli_fetch_assoc($result);
        //guardamos los datos del usuario en una sesion

        //$verify = password_verify($password, $usuario['contraseña']);

        if($usuario){
            
            $_SESSION['usuario'] = $usuario; 

        }else{
            $_SESSION['message']='<p class="alert alert-danger"> Login incorrecto</p>';
            header('location: ../views/login.php');
        }

    }else{
        //almacenamos un mensaje de error en una sesion para mostrala posteriormente
        $_SESSION['message']='<p class="alert alert-danger"> Login incorrecto</p>';
        header('location: ../views/login.php');
    }
}

header('location: ../index.php');