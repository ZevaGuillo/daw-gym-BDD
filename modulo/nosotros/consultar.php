<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="MAITTE CHANGO QUINTO">
    <title>Consultar</title>
    <?php  
        include_once '../../plantillas/styles.php';
    ?>
    <style>
    table {
        border: #b2b2b2 1px solid;
    }

    td,
    th {
        border: #b2b2b2 1px solid;
    }
    </style>
</head>

<body>
    <h1>Formulario de GYM</h1>
    <?php
        $titulo = 'Nosotros';
        include_once '../../plantillas/encabezado.php';
        require_once('../../conexion.php');
        $sql = "select * from nosotros ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        ?>

    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>PagoMensual</th>
                    <th>fechaPago</th>
                    <th>objetivos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $filas = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($filas as $fila) {
                        ?>
                <tr>
                    <td><?php echo $fila['ID_REGISTRO'] ?></td>
                    <td><?php echo $fila['nombre'] ?></td>
                    <td><?php echo $fila['correo'] ?></td>
                    <td><?php echo $fila['pagoMensual'] ?></td>
                    <td><?php echo $fila['fechaPago'] ?></td>
                    <td><?php echo $fila['objetivos'] ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $fila['ID_REGISTRO'] ?>">Editar</a>
                        <a href="eliminar.php?id=<?php echo $fila['ID_REGISTRO'] ?>">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="../nosotros/insertar.php">Agregar</a>
    </div>

</body>

</html>