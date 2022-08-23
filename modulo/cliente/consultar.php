<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Zevallos Escalante Guillermo David">
    <title>Clientes</title>
    <?php  
        include_once '../../plantillas/styles.php';
    ?>
    <style>
        body{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
    </style>
</head>

<body>
    <?php  
        $titulo = 'Clientes';
        include_once '../../plantillas/encabezado.php';
        require_once('../../conexion.php');
        $sql = "SELECT * FROM cliente";
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
                    <td><?php echo $fila['telefono'] ?></td>
                    <td><?php echo $fila['email'] ?></td>
                    <td><?php echo $fila['asunto'] ?></td>
                    <td><?php echo $fila['mensaje'] ?></td>
                    <td><?php echo  "<a href='eliminar.php?id=".$fila['id']."'>Eliminar</a>";?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <div>
            <a href="./insertar.php">Agregar Datos</a>
        </div>
    </main>


</body>

</html>