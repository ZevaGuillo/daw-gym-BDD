<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Zevallos Escalante Guillermo David">
    <title>Insertar Clientes</title>
</head>

<body>
    <main id="central">
        <div>
            <form method="POST">
                <label for="inputNombre">Nombre</label>
                <input type="text" id="inputNombre" name="nombre">

                <label for="inputTele">Tel&eacute;fono</label>
                <input type="text" id="inputTele" name="telefono">

                <label for="inputEmail">Email</label>
                <input type="email" id="inputEmail" name="email">

                <label for="inputAsunto">Asunto</label>
                <input type="text" id="inputAsunto" name="asunto">

                <label for="inputMensaje">Mensaje</label>
                <textarea name="mensaje" id="inputMensaje" cols="30" rows="10" name="mensaje"></textarea>

                <div class="central_dos">
                    <input type="submit" value="Agregar">
                </div>
            </form>
        </div>
    </main>
    <?php
        require_once('../../conexion.php');
        
        if(!empty($_POST['nombre']) && !empty($_POST['telefono']) && isset($_POST['email']) && !empty($_POST['asunto'])  && !empty($_POST['mensaje'])){
            $diccionario =[
                "nombre" => htmlentities($_POST['nombre']),
                "telefono" => (int)htmlentities($_POST['telefono']),
                "email" => htmlentities($_POST['email']),
                "asunto" => htmlentities($_POST['asunto']),
                "mensaje" => htmlentities($_POST['mensaje']),
            ];
            

            $sql = "INSERT INTO `cliente` (`id`, `nombre`, `telefono`, `email`, `asunto`, `mensaje`) VALUES (NULL, :nombre, :telefono, :email, :asunto, :mensaje);";
            echo $sql;
            
            $statement = $pdo->prepare($sql);
            $statement->execute($diccionario);

            if ($statement->rowCount() > 0) {
                header("location:consultar.php");
            }
        }
    ?>
</body>

</html>