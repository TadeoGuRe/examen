<?php

include('conec.php');

//print_r($_POST);

if(isset($_POST['enviar'])){

    $nombre = $_POST['nombre'];
    $apellidop = $_POST['apellidop'];
    $apellidom = $_POST['apellidom'];
    $tel = $_POST['tel'];
    $correo = $_POST ['correo'];
    $usuario = $_POST ['usuario'];
    $contra = $_POST ['contra'];


    $insertarExamen = "INSERT INTO examen (nombre, apellidop, apellidom, tel, correo, usuario, contra) 
    VALUE ('$nombre', '$apellidop', '$apellidom', '$tel', '$correo', '$usuario', '$contra');";

    $resultado = mysqli_query($conexion,$insertarExamen);

    if(!$resultado){
        echo '<script>alert("Los datos no se insertaron")</script>';
    }else{
        echo '<script>alert("Los datos se insertaron")</script>';
    }
}

header('Location: examen.php');
?>