<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Zevallos Escalante Guillermo David">
    <title>Insertar Clientes</title>
    <?php  
        include_once '../../plantillas/styles.php';
    ?>
    <style>
    input{
        margin: .7rem 0;
    }
    </style>
</head>

<body>
    <?php 
        $titulo = 'Insertar Cliente';
        include_once '../../plantillas/encabezado.php';
    ?>
    <main>
        <form method="POST">
            <label for="inputNombre">Nombre
                <input type="text" id="inputNombre" name="nombre">
            </label>


            <label for="inputTele">Tel&eacute;fono
                <input type="text" id="inputTele" name="telefono">
            </label>


            <label for="inputEmail">Email
                <input type="email" id="inputEmail" name="email">

            </label>

            <label for="inputAsunto">Asunto
                <input type="text" id="inputAsunto" name="asunto">
            </label>


            <label for="inputMensaje">Mensaje
                <textarea name="mensaje" id="inputMensaje" cols="30" rows="10" name="mensaje"></textarea>
            </label>

            <div style="margin: .7rem 0;">
                <input type="submit" value="Agregar">
            </div>
        </form>
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