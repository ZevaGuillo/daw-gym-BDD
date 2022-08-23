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
                    <input type="text" name="nombrePrd">
                </div>

                <div class="form_div">
                    <label>Valor</label>
                    <input type="number" name="valorPrd">
                </div>

                <div class=" form_div">
                    <label>Cantidad</label>
                    <input type="number" name="cantidadPrd">
                </div>

                <div class="form_div">
                    <input type="radio" id="verdadero" name="estadoPrd" value="1" checked>
                    <label for="verdadero">Verdadero</label><br>
                    <input type="radio" id="falso" name="estadoPrd" value="2">
                    <label for="falso">Falso</label><br>
                </div>

                <div class="form_div">
                    <fieldset>
                        <legend>Proveedor</legend>
                        <div>
                            <input type="checkbox" name="prov_prd[]" value="100">
                            <label>NC_CODE</label>
                        </div>

                        <div>
                            <input type="checkbox" name="prov_prd[]" value="500">
                            <label>ST</label>
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
        
        if(!empty($_POST['nombrePrd']) && !empty($_POST['valorPrd']) && isset($_POST['estadoPrd']) && !empty($_POST['prov_prd'])){
            $diccionario =[
                "nombre" => htmlentities($_POST['nombrePrd']),
                "valor" => (float)htmlentities($_POST['valorPrd']),
                "cantidad" => (int)htmlentities($_POST['cantidadPrd']),
                "estado" => htmlentities($_POST['estadoPrd']),
                "proveedor" => implode("|",$_POST['prov_prd'])
            ];
            

            $sql = "INSERT INTO producto(prd_nombre, prd_valor,prd_cantidad,prd_estado,prd_codigo_proveedor_producto) VALUES(:nombre, :valor, :cantidad, :estado, :proveedor)";
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