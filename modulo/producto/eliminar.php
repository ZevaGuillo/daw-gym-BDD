<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="MUÑOZ SOLORZANO JOHANAN NATANAEL">
    <title>ELIMINACION DE PRODUCTO</title>
</head>

<body>

    <?php

        require_once '../../conexion.php';

        if (!empty($_GET['id'])) {
            $data = ['id' => htmlentities($_GET['id'])];
            $sql = "select * from producto where prd_id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);

            $filas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($filas as $fila) {
                ?>
    <div>
        <form method="post">
            <!-- <input type="hidden" name="txtid" value=""> -->
            <label>Id:</label><input type="text" name="prd_id" readonly="" value="<?php echo $fila['prd_id'] ?>">
            <label>Nombre:</label><input type="text" name="nombre_prd" value="<?php echo $fila['prd_nombre'] ?>">
            <input type="submit" value="Eliminar">
        </form>

    </div>
    <?php
            }
        }
        ?>
    <?php
        if (isset($_POST['prd_id'])) {
            $data = ['id' => htmlentities($_POST['prd_id'])];
            $sql = "delete from producto where prd_id = :id";
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