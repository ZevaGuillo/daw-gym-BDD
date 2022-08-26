<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Marcillo Falcones Fernando">
    <title>Eliminar articulo</title>
    <?php  
        include_once '../../plantillas/styles.php';
    ?>
    <style>
    <style>
    table {
                border: #b2b2b2 1px solid;
            }
            td, th {
                border: #b2b2b2 1px solid;
            }
            
            </style>
</head>

<body>

    <?php

              $titulo = 'Eliminar Articulo';
              include_once '../../plantillas/encabezado.php';
              require_once('../../conexion.php');

        if (!empty($_GET['id'])) {
            $data = ['id' => htmlentities($_GET['id'])];
            $sql = "select * from articulo where id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);

            $filas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($filas as $fila) {
                ?>
    <div>
        <form method="post">
            
            <label>Id:</label><input type="text" name="id" readonly="" value="<?php echo $fila['id'] ?>">
            <label>Articulo:</label><input type="text" name="art_nombre" value="<?php echo $fila['art_nombre'] ?>">
            <label>Cliente:</label><input type="text" name="nombre" value="<?php echo $fila['nombre'].$fila['apellido']?>">
            <input type="submit" value="Eliminar">
        </form>

    </div>
    <?php
            }
        }
        ?>
    <?php
        if (isset($_POST['id'])) {
            $data = ['id' => htmlentities($_POST['id'])];
            $sql = "delete from articulo where id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);

            if ($stmt->rowCount() > 0) {
                header("location:consultar.php");
            } else {
                echo 'No se pudo eliminar el registro';
            }
        }
        ?>
</body>

</html>