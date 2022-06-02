<?php
//datos de la base de datos
$hostname = 'localhost'; //127.0.0.1
$username = 'root';
$password = 'root';
$database = 'tienda';
//query para la conexion a la db
$conexion = mysqli_connect($hostname,$username,$password,$database);
//validor de conexion de la db
if(mysqli_connect_error()){
    echo 'Conexion fallida';
}else{
    echo 'conexion exitosa';
}
?>