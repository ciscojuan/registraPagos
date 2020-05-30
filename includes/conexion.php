<?
$host = 'localhost';
$usuario = 'root';
$contraseña = '';
$db = 'registroPagos';

$conexion = mysqli_connect($host, $usuario, $contraseña, $db) or die(mysqli_error($conexion));
mysqli_query($conexion, "SET NAMES 'utf8'");

if (!isset($_SESSION)) {
    session_start();
}
