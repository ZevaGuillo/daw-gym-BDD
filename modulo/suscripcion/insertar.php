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

    #central {
        display: flex;
        flex-direction: column;
    }

    form {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        background: #0c0c22;
    }

    .form_div {
        padding: 1%;
        margin: 1%;
        background: #32314e;
    }

    .central_dos {
        display: flex;
        justify-content: center;
        margin: 1%;
    }
    </style>
</head>

<body>
    <main id="central">
        <div>
            <form method="POST">
                <div class="form_div">
                    <label>Nombre</label>
                    <input type="text" name="nombre">
                </div>

                <div class="form_div">
                    <label>Apellido</label>
                    <input type="text" name="apellido">
                </div>

                <div class=" form_div">
                    <label>Edad</label>
                    <input type="number" name="edad">
                </div>

                <div class="form_div">
                    <input type="radio" id="masculino" name="genero" value="Masculino" checked>
                    <label for="masculino">Masculino</label><br>
                    <input type="radio" id="femenino" name="genero" value="Femenino">
                    <label for="femenino">Femenino</label><br>
                </div>

                <div class="form_div">
                    <fieldset>
                        <legend>Plan</legend>
                        <div>
                            <input type="checkbox" name="plan[]" value="Gratis">
                            <label>Gratis</label>
                        </div>

                        <div>
                            <input type="checkbox" name="plan[]" value="Mensual">
                            <label>Mensual</label>
                        </div>
                        <div>
                            <input type="checkbox" name="plan[]" value="Anual">
                            <label>Anual</label>
                        </div>
                    </fieldset>
                </div>

                <div class="central_dos">
                    <input type="submit" value="Agregar">
                </div>
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