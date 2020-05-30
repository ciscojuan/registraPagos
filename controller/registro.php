<?php
var_dump($_POST, $_FILES);

if(isset($_POST)){

    require_once '../includes/conexion.php';
    require_once '../includes/funciones.php';
    borrarMensajes();
    //Asignacion de variables
    $bien = isset($_POST['bien']) ? $_POST['bien'] : FALSE;
    $concepto = isset($_GET['concepto']) ? $_GET['concepto'] : FALSE;
    $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : FALSE;
    $tpago = isset($_POST['bien']) ? $_POST['bien'] : FALSE;
    $valor = isset($_POST['valor']) ? $_POST['valor'] : FALSE;
    $fecha =isset($_POST['fecha']) ? $_POST['fecha'] : FALSE;
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : FALSE;
    $archivo = isset($_FILES['archivo']) ? $_FILES['archivo'] : FALSE;


    $usuario = $_SESSION['usuario']['id'];

    $ruta = '../static/img/img-bills/'; //asignacion de la ruta de imagenes
        
        //construir un nombre para la imagen
    $now = date('m.d.y'); //fecha actual
    $random = rand(1,99);
    $rutaImagen = $ruta .$now .'-'. $random .'-'. $archivo['name']; //concateno la ruta del directorio con el nombre el archivo

    if(!is_dir($ruta)){
        mkdir($ruta, 777);     
    }

    move_uploaded_file($archivo['tmp_name'], $rutaImagen);
    
    $query = "INSERT INTO entrada VALUES (
        null,
        $usuario, 
        $bien, 
        $concepto, 
        $categoria, 
        $tpago, $valor, 
        '$fecha', 
        '$descripcion', 
        '$rutaImagen', 
        CURDATE()
        );";
    

    //var_dump($query);

    $resultado = mysqli_query($conexion, $query) ;
    
    //var_dump($resultado);

    if($resultado){

        $_SESSION['message']= '<p class="text-success"> Registro Completo!</p>';
        header('location: ../index.php');
        
     } else { 

        $_SESSION['message']= '<p class="text-danger"> Error en el registro.</p>';
        header('location: ../index.php');
    }
        
}


?>