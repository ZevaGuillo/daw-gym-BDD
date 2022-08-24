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
        color: black;
        font-size: 18px;
    }

    form {
        width: auto;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
    }

    .formularios {
        width: 1000px;
        padding: 1%;
        margin: 1%;
    }

    .principal_abajo {
        display: flex;
        justify-content: center;
        margin: 1%;
    }

    #labeltext {
        margin-left: 30px;
        padding: 1%;
        font-size: 18px;
    }

    .labelprinci {
        font-size: 30px;
    }

    #ContenedorPrinciapl {
        padding: 1rem 15%;
    }
    </style>
</head>

<body>
    <?php
        $titulo = 'Insertar Suscripciones';
        include_once '../../plantillas/encabezado.php';
    ?>
    <main id="ContenedorPrinciapl">
        <div>
            <form method="POST">

                <hr>

                <div class="formularios">
                    <label>Nombre</label>
                    <input type="text" name="nombre">
                </div>

                <hr>

                <div class="formularios">
                    <label>Apellido</label>
                    <input type="text" name="apellido">
                </div>

                <hr>

                <div class="formularios">
                    <label>Edad</label>
                    <input type="number" name="edad">
                </div>

                <hr>

                <div class="formularios">
                    <input type="radio" id="masculino" name="genero" value="Masculino" checked>
                    <label for="masculino" id="labeltext">Masculino</label><br>
                    <input type="radio" id="femenino" name="genero" value="Femenino">
                    <label for="femenino" id="labeltext">Femenino</label><br>
                </div>

                <hr>

                <div class="formularios">
                    <label class="labelprinci">Plan<label>
                            <div>
                                <input type="checkbox" name="plan[]" value="Gratis">
                                <label id="labeltext">Gratis</label>
                            </div>

                            <div>
                                <input type="checkbox" name="plan[]" value="Mensual">
                                <label id="labeltext">Mensual</label>
                            </div>
                            <div>
                                <input type="checkbox" name="plan[]" value="Anual">
                                <label id="labeltext">Anual</label>
                            </div>
                </div>

                <hr>

                <div class="principal_abajo">
                    <input type="submit" value="Agregar">
                </div>

                <hr>
            </form>
        </div>
    </main>
    <?php
        require_once('../../conexion.php');
        
        if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && isset($_POST['genero']) && !empty($_POST['plan'])){
            $diccionario =[
                "nombre" => htmlentities($_POST['nombre']),
                "apellido" => htmlentities($_POST['apellido']),
                "edad" => (int)htmlentities($_POST['edad']),
                "genero" => htmlentities($_POST['genero']),
                "plan" => implode("|",$_POST['plan'])
            ];
            

            $sql = "INSERT INTO suscripcion(nombre,apellido,edad,genero,plan) VALUES(:nombre, :apellido, :edad, :genero, :plan)";
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