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
        if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['pagoMensual'])){
            $data = [
                "nombre"=> htmlentities($_POST['nombre']),
                "correo" => htmlentities($_POST['correo']),
                "pagoMensual"=>htmlentities($_POST['pagoMensual']),
                "fecha" => htmlentities($_POST['fecha']),
                "objetivos" => htmlentities($_POST['objetivos']) 
                ];
        
                $sql = "INSERT INTO nosotros(nombre, correo, pagoMensual,fecha,objetivos) VALUES(:nombre,:correo,:pagoMensual,:fecha, :objetivos)";
        
                $ejecutarInsertar = $pdo->prepare($sql);
                $ejecutarInsertar->execute($data);
        
                if(!$ejecutarInsertar){
                    header("location:consultar.php");
                } else{
                }}?>
</body>

</html>