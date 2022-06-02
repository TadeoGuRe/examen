<!DOCTYPE html>
<html lang="en">
  <head class="titulo">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <!--aqui-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    
    <title> TIENDA JENZ</title>
  </head>
  <body>
    <h2> WELCOME!!!</h2>
    <form action="registrofabricante.php" method="POST">
      <div class="mb-3">
        <label class="form-label"> Fabricantes</label>
        <input
          type="text"
          class="form-control"
          name="nomFabricante"
          value=""
          placeholder="Nombre del Fabricante"
        />
      </div>
      <button
        type="submit"
        name="enviar"
        class="btn btn-primary"
        value="Insertar fabricante"
      >
      crear fabricante
      </button>
    </form>

    <!--inicio de la tabla de datos--> 
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#codigo</th>
            <th scope="col">Fabricante</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>
        <?php
      include ('conec.php');
      $consulta = "SELECT * FROM fabricante";
      $resultado = mysqli_query($conexion,$consulta);
      while($fila=  mysqli_fetch_array($resultado)){
    ?>
    <!-- columnas de la tabla-->
    <tr>
      <th scope="row"> <?php echo $fila["codigo"] ?></th>
      <td><?php echo $fila["nombre"] ?></td>
      <td><a href="acciones/eliminarFabricante.php?id=<?php echo $fila["codigo"] ?>"><i class="bi bi-trash text-danger"></i></td>
    </tr>
    <?php } ?>

    </table>
    
    <!--final de la tabla-->
    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script>
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
