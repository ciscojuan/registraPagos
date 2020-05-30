<?php
require_once 'conexion.php';

function consultaBien($conexion){
    $bien = mysqli_query($conexion, "select * from bien");
    $result = array();
    if($bien  && mysqli_num_rows($bien) >1){
        $result = $bien;
    }
    return $result;
}

function consultaCategoria($conexion, $id = null){
    $sql = "SELECT  * from categoria ";
    
    if($id){
        $sql .= "where concepto_id = '$id'";
    }

    $categoria = mysqli_query($conexion, $sql);

    $result = array();
    if($categoria && mysqli_num_rows($categoria) >1){
        $result = $categoria;
    }    
    return $result;
}
//consulta cantidad de entradas por categoria.
function consultaEntradasC($conexion, $id ){
    $sql = "select e.id AS 'id', u.username AS 'usuario', b.nombre  AS 'bien', co.nombre AS     
    'concepto', c.nombre AS 'categoria', p.nombre AS 'pago', e.valor AS 'valor', e.fechaPago AS 'fecha' from entrada e     
    INNER JOIN usuario u ON u.id = e.usuario_id     
    INNER JOIN bien b ON b.id = e.bien_id  
    INNER JOIN concepto co ON co.id = e.concepto_id     
    INNER JOIN categoria c ON c.id = e.categoria_id     
    INNER JOIN pago p ON p.id = e.pago_id   
    WHERE e.categoria_id = $id  ORDER BY e.fechaPago DESC";
    $entrada = mysqli_query($conexion, $sql);
    $result = array();
    if($entrada && mysqli_num_rows($entrada) >1){
        $result = $entrada;
    }
    return $result;
}

//consulta cantidad de entradas por categoria.
function EntradasMantenimiento_Reparacion($conexion, $id ){
    $sql = "select e.id AS 'id', u.username AS 'usuario', b.nombre  AS 'bien', co.nombre AS     
    'concepto', c.nombre AS 'categoria', p.nombre AS 'pago', e.valor AS 'valor', e.fechaPago AS 'fecha' from entrada e     
    INNER JOIN usuario u ON u.id = e.usuario_id     
    INNER JOIN bien b ON b.id = e.bien_id  
    INNER JOIN concepto co ON co.id = e.concepto_id     
    INNER JOIN categoria c ON c.id = e.categoria_id     
    INNER JOIN pago p ON p.id = e.pago_id   
    WHERE e.concepto_id = $id  ORDER BY e.fechaPago DESC";
    $entrada = mysqli_query($conexion, $sql);
    $result = array();
    if($entrada && mysqli_num_rows($entrada) >1){
        $result = $entrada;
    }
    return $result;
}

//consulta cantidad de entradas por categoria.
function detalleEntrada($conexion, $id ){
    $sql = "select e.id AS 'id', e.categoria_id AS idCategoria, u.username AS 'usuario', b.nombre  AS 'bien', co.nombre AS     
            'concepto', co.id AS id, c.nombre AS 'categoria', p.nombre AS 'pago', e.valor AS 'valor', e.fechaPago AS 'fecha', e.fechaRegistro AS 'pagoReg', e.descripcion AS 'descripcion', e.imagen from entrada e     
            INNER JOIN usuario u ON e.usuario_id = u.id    
            INNER JOIN bien b ON e.bien_id = b.id
            INNER JOIN concepto co ON e.concepto_id = co.id    
            INNER JOIN categoria c ON e.categoria_id = c.id     
            INNER JOIN pago p ON e.pago_id = p.id
            WHERE e.id = $id  ORDER BY e.fechaPago DESC";

    $entrada = mysqli_query($conexion, $sql);
    $result = array();

    if($entrada && mysqli_num_rows($entrada) >=1){
        $result = mysqli_fetch_assoc($entrada);
    }
    return $result;
}

function consultaConcepto($conexion, $id = null){
    $sql=  "SELECT * FROM concepto";
    
    if($id){
        $sql .= " WHERE id = '$id' ";
    }

    $conceptos = mysqli_query($conexion,$sql) or die(mysqli_error($conexion));
    $result = array();

    if($conceptos && mysqli_num_rows($conceptos)>1){
        $result = $conceptos;
    }
    return $result;
}

function consultaBusqueda($conexion, $busqueda ){
    $sql = "(select e.id AS 'id', u.username AS 'usuario', b.nombre  AS 'bien', co.nombre AS     
    'concepto', c.nombre AS 'categoria', p.nombre AS 'pago', e.valor AS 'valor', e.fechaPago AS 'fecha' from entrada e     
    INNER JOIN usuario u ON u.id = e.usuario_id     
    INNER JOIN bien b ON b.id = e.bien_id  
    INNER JOIN concepto co ON co.id = e.concepto_id     
    INNER JOIN categoria c ON c.id = e.categoria_id     
    INNER JOIN pago p ON p.id = e.pago_id   
    WHERE u.username LIKE '%$busqueda%') UNION
    
    (select e.id AS 'id', u.username AS 'usuario', b.nombre  AS 'bien', co.nombre AS     
    'concepto', c.nombre AS 'categoria', p.nombre AS 'pago', e.valor AS 'valor', e.fechaPago AS 'fecha' from entrada e     
    INNER JOIN usuario u ON u.id = e.usuario_id     
    INNER JOIN bien b ON b.id = e.bien_id  
    INNER JOIN concepto co ON co.id = e.concepto_id     
    INNER JOIN categoria c ON c.id = e.categoria_id     
    INNER JOIN pago p ON p.id = e.pago_id   
    WHERE b.nombre LIKE '%$busqueda%') UNION

    (select e.id AS 'id', u.username AS 'usuario', b.nombre  AS 'bien', co.nombre AS     
    'concepto', c.nombre AS 'categoria', p.nombre AS 'pago', e.valor AS 'valor', e.fechaPago AS 'fecha' from entrada e     
    INNER JOIN usuario u ON u.id = e.usuario_id     
    INNER JOIN bien b ON b.id = e.bien_id  
    INNER JOIN concepto co ON co.id = e.concepto_id     
    INNER JOIN categoria c ON c.id = e.categoria_id     
    INNER JOIN pago p ON p.id = e.pago_id   
    WHERE co.nombre LIKE '%$busqueda%') UNION

    (select e.id AS 'id', u.username AS 'usuario', b.nombre  AS 'bien', co.nombre AS     
    'concepto', c.nombre AS 'categoria', p.nombre AS 'pago', e.valor AS 'valor', e.fechaPago AS 'fecha' from entrada e     
    INNER JOIN usuario u ON u.id = e.usuario_id     
    INNER JOIN bien b ON b.id = e.bien_id  
    INNER JOIN concepto co ON co.id = e.concepto_id     
    INNER JOIN categoria c ON c.id = e.categoria_id     
    INNER JOIN pago p ON p.id = e.pago_id   
    WHERE c.nombre LIKE '%$busqueda%') UNION

    (select e.id AS 'id', u.username AS 'usuario', b.nombre  AS 'bien', co.nombre AS     
    'concepto', c.nombre AS 'categoria', p.nombre AS 'pago', e.valor AS 'valor', e.fechaPago AS 'fecha' from entrada e     
    INNER JOIN usuario u ON u.id = e.usuario_id     
    INNER JOIN bien b ON b.id = e.bien_id  
    INNER JOIN concepto co ON co.id = e.concepto_id     
    INNER JOIN categoria c ON c.id = e.categoria_id     
    INNER JOIN pago p ON p.id = e.pago_id   
    WHERE p.nombre LIKE '%$busqueda%')";

    $entrada = mysqli_query($conexion, $sql);
    $result = array();
    if($entrada && mysqli_num_rows($entrada) >1){
        $result = $entrada;
    }
    return $result;
}

function borrarMensajes(){
    if(isset($_SESSION['message'])){
        $_SESSION['message']=null;
    }
}

/*
SELECT DISTINCT e.id AS '#',b.nombre AS 'INMUEBLE', c.nombre AS 'CONCEPTO', ca.nombre AS 'CATEGORIA', p.nombre AS 'MEDIO PAGO', e.valor AS 'VALOR', e.fechaPago, e.descripcion, u.nombre AS 'USUARIO', e.fechaRegistro FROM entrada e 
INNER JOIN bien b ON e.bien_id = b.id 
INNER JOIN usuario u ON e.usuario_id = u.id 
INNER JOIN concepto c ON e.concepto_id = c.id 
INNER JOIN categoria ca ON e.categoria_id = categoria_id 
INNER JOIN pago p ON e.pago_id = p.id ORDER BY `bien_id` LIMIT 100
*/