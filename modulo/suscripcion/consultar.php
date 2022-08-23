<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="VELEZ CALERO JOE FERNANDO">
    <title>Suscripcion</title>
    <?php  
        include_once '../../plantillas/styles.php';
    ?>
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
        background: orange;
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
        background: #ebe7e0;
    }
    </style>
</head>

<body>
    <?php  
        $titulo = 'Suscripciones';
        include_once '../../plantillas/encabezado.php';
        require_once('../../conexion.php');
        $sql = "SELECT * FROM suscripcion";
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
                    <td><?php echo $fila['id'] ?></td>
                    <td><?php echo $fila['nombre'] ?></td>
                    <td><?php echo $fila['apellido'] ?></td>
                    <td><?php echo $fila['edad'] ?></td>
                    <td><?php echo $fila['genero'] ?></td>
                    <td><?php echo $fila['plan']?></td>
                    <td><?php echo  "<a href='eliminar.php?id=".$fila['id']."'>Eliminar</a>";?></td>
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