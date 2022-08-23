<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Zevallos Escalante Guillermo David">
    <title>Eliminacion de Clientes</title>
    <?php  
        include_once '../../plantillas/styles.php';
    ?>
    <style>
    input {
        margin: .7rem 0;
    }
    </style>
</head>

<body>

    <?php
    $titulo = 'Eliminar cliente';
    include_once '../../plantillas/encabezado.php';
    require_once '../../conexion.php';

    if (!empty($_GET['id'])) {
        $data = ['id' => htmlentities($_GET['id'])];
        $sql = "select * from cliente where id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);

        $filas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($filas as $fila) {
        ?>
    <main>
        <form method="post">
            <label>Id:
                <input type="text" name="id" readonly="" value="<?php echo $fila['id'] ?>">
            </label>
            <label>Nombre:
                <input type="text" name="nombre" value="<?php echo $fila['nombre'] ?>">
            </label>
            <input type="submit" value="Eliminar">
        </form>
    </main>
    <?php
        }
    }
    ?>
    <?php
        if (isset($_POST['id'])) {
            $data = ['id' => htmlentities($_POST['id'])];
            $sql = "delete from cliente where id = :id";
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