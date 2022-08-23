<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="VELEZ CALERO JOE FERNANDO">
    <title>Suscripcion</title>
    <style>
    * {
        color: #aaa6ca;
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
    </style>
</head>

<body>
    <?php  
        $titulo = 'Productos';
        include_once '../../plantillas/encabezado.php';
        require_once('../../conexion.php');
        $sql = "SELECT * FROM producto";
        $statement = $pdo->prepare($sql);
        $statement->execute();
    ?>

    <main>
        <div class="contenedor">
            <table class="tabla">
                <?php
                $filas = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($filas as $fila) {
            ?>
                <tr>
                    <td><?php echo $fila['prd_id'] ?></td>
                    <td><?php echo $fila['prd_nombre'] ?></td>
                    <td><?php echo $fila['prd_valor'] ?></td>
                    <td><?php echo $fila['prd_cantidad'] ?></td>
                    <td><?php echo $fila['prd_estado'] ?></td>
                    <td><?php echo $fila['prd_codigo_proveedor_producto']?></td>
                    <td><?php echo  "<a href='eliminar.php?id=".$fila['prd_id']."'>Eliminar</a>";?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <div>
            <a href="insertar.php">Agregar Datos</a>
        </div>
    </main>


</body>

</html>