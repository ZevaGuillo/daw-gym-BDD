<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Marcillo Falcones Fernando ">
    <title>Articulos</title>
    <?php  
        include_once '../../plantillas/styles.php';
    ?>
    <style>
    <style>
    * {
        color: #aaa6ca;
        margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
    }

    main {
        display: flex;
        justify-content: center;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        align-items: center;
        background: #0c0c22;
    }

    .contenedor {
        display: flex;
        justify-content: center;
    }

    table {
        border: #b2b2b2 1px solid;
    }

    td,
    th {
        border: #b2b2b2 1px solid;
        margin: 1%;
    }

    .tabla {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        background: #0c0c22;
    }

    button {
            align-self: center;
            width: 100%;
            padding: 1rem;
            background-color: crimson;
            color: #f2f2f2;
            font-size: 1.2rem;
            border: none;
            border-radius: 10px;
            transition: .2s all ease-in;
        }

        button:hover {
            background-color: rgb(221, 45, 80);
        }
    </style>
</head>

<body>
    <?php  
        $titulo = 'Articulo';
        include_once '../../plantillas/encabezado.php';
        require_once('../../conexion.php');
        $sql = "SELECT * FROM articulo";
        $statement = $pdo->prepare($sql);
        $statement->execute();
    ?>

    <main>
        <div class="contenedor">
        
          
          <table>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>ARTICULOS</th>
                      <th>NOMBRE</th>
                      <th>APELLIDO</th>
                      <th>CEDULA</th>
                      <th>CORREO</th>
                      <th>DIRECCION</th>
                      <th>EDITAR/ELIMINAR</th>
                  </tr>
              </thead>
              <tbody>  
                  <?php
                   $filas = $statement->fetchAll(PDO::FETCH_ASSOC);
                   foreach ($filas as $fila)  {
                      ?>
                      <tr>
                          <td><?php echo $fila['id'] ?></td>
                          <td><?php echo $fila['art_nombre'] ?></td>
                          <td><?php echo $fila['nombre'] ?></td>
                          <td><?php echo $fila['apellido'] ?></td>
                          <td><?php echo $fila['cedula']?></td>
                          <td><?php echo $fila['correo']?></td>
                          <td><?php echo $fila['direccion']?></td>
                          <td>
                              <a href="editar.php?id=<?php echo $fila['id'] ?>">Editar</a>
                             
                              <a href="eliminar.php?id=<?php echo $fila['id'] ?>">Eliminar</a>
                             
                           <?php  
                              ?>


                          </td>
                      </tr>
                  <?php } ?>
              </tbody>
          </table>
        <div>
             <button><a href="insertar.php">Insertar</a></button>
        </div>
    </main>


</body>

</html>