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
            <input type="text" name="nombre"><br />

            <label>correo:</label>
            <input type="email" name="correo"><br />

            <label>Cuanto dinero paga mensualmente en el gimnasio:</label>
            <input type="text" name="pagoMensual"><br />

            <label>Fecha de Pago:</label>
            <input type="date" name="fecha"><br />

            <label>Cuales son sus objetivos en el GYM:</label><br />
            <input type="radio" name="objetivos" value="Adelgazar">Adelgazar<br />
            <input type="radio" name="objetivos" value="Aumento de Masa Muscular">Aumento Masa Muscular<br />
            <input type="radio" name="objetivos" value="Tonificación">tonificación<br />


            <input type="submit" value="Insertar"><br />
        </form>
    </div>

    <?php
       $data = [
        $nombre=$_POST['nombre'],
        $correo=$_POST['correo'],
        $pagoMensual=$_POST['pagoMensual'],
        $fecha=$_POST['fecha'],
        $objetivos= htmlentities($_POST['objetivos']),
    ];
    $sql = "INSERT INTO nosotros (id, nombre, correo, pagoMensual,fecha,objetivos)"
."VALUES(NULL,'$nombre','$correo','$pagoMensual','$fecha','$objetivos')";

$ejecutarInsertar =mysqli_query($enlace, $sql);

if(!$ejecutarInsertar){
header("location:consultar.php");
} else{

echo"Error en la linea de sql";
}
    ?>
</body>

</html>