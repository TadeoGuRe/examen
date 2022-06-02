<?php

    include('conec.php');
    if(isset($_POST['enviar'])){
        $nomProductos = $_POST['nomProductos'];
        $precioProductos = $_POST['precioProductos'];
        $codigoProductos = $_POST['codigoProductos'];
        $insertarProductos = "INSERT INTO producto (nombre, precio, codigo_fabricante) VALUE ('$nomProductos','$precioProductos','$codigoProductos');";
        
        $resultado = mysqli_query($conexion, $insertarProductos);
        if(!$resultado){
            echo '<script>alert("Los datos no se insertaron") </script>';
            
        }else{
            echo '<script>alert("Los datos se insertaron") </script>';
        }
        header('Location: index.html');
    }
?>
