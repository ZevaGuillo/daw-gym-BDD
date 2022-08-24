<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="MAITTE CHANGO QUINTO">
    <title>Formulario gym</title>
    <?php  
        include_once '../../plantillas/styles.php';
    ?>


</head>

<body>
    <?php     
        $titulo = 'Agregar Formulario';
        include_once '../../plantillas/encabezado.php';
        require_once('../../conexion.php');
    ?>
    <h1>Agregar Usuarios</h1>
    <div>
        <form method="post">
            <label>Nombre:</label>
            <input type="text" name="txtNombre"><br />

            <label>correo:</label>
            <input type="email" name="txtCorreo"><br />

            <label>Cuanto dinero paga mensualmente en el gimnasio:</label>
            <input type="text" name="txtPago"><br />

            <label>Fecha de Pago:</label>
            <input type="date" name="txtFecha"><br />

            <label>Cuales son sus objetivos en el GYM:</label><br />
            <input type="radio" name="radObj" value="Adelgazar">Adelgazar<br />
            <input type="radio" name="radObj" value="Aumento de Masa Muscular">Aumento Masa Muscular<br />
            <input type="radio" name="radObj" value="Tonificación">tonificación<br />


            <input type="submit" value="Insertar"><br />
        </form>
    </div>

    <?php
        if (!empty($_POST['txtNombre']) && !empty($_POST['txtCorreo']) 
            && !empty($_POST['txtPago']) && !empty($_POST['txtFecha'])) {
          
            $nombre = htmlentities($_POST['txtNombre']);
            $correo = htmlentities($_POST['txtCorreo']);
            $pago = htmlentities($_POST['txtPago']);
            $fecha = htmlentities($_POST['txtFecha']);
            $objetivos=isset($_POST['radObj'])? htmlentities($_POST['radObj']):'';

            $data = [
                'nom'=>$nombre,
                'cor' =>$correo,
                'pag'=>$pago,
                'fec' =>$fecha,
                'obj' =>$objetivos,
            ];
            $sql = "INSERT into nosotros(nombre, correo, pago, fecha, objetivos) 
            values(:nom, :cor,:pag,:fec,:obj)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);
            
            if ($stmt->rowCount() > 0) {// rowCount() permite conocer el numero de filas afectadas
                header("location:consultar.php");
            }
        }
        ?>
</body>

</html>