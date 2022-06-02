<?php

    include ('../conec.php');
    $codigoProductos = $_GET['id'];
    $eliminarProductos= " DELETE FROM producto WHERE codigo  = '$codigoProductos'";
    $resultado = mysqli_query($conexion, $eliminarProductos);

    header('Location: ../producto.php');
?>