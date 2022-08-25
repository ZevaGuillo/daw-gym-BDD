<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="MAITTE CHANGO QUINTO">
    <title>Eliminar</title>
    <?php  
        include_once '../../plantillas/styles.php';
    ?>
</head>

<body>

    <?php     
        $titulo = 'Eliminar Formulario';
        include_once '../../plantillas/encabezado.php';
        require_once('../../conexion.php');
     ?>
    <h1>Eliminar formulario </h1>
    <?php
       

        if (!empty($_GET['id'])) {
            $data = ['id' => htmlentities($_GET['id'])];
            $sql = "select * from nosotros where id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);

            $filas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($filas as $fila) {
    ?>
    <div>
        <form method="post">
            <label>Id:</label><input type="text" name="id" readonly="" value="<?php echo $fila['id'] ?>">
            <input type="submit" value="Eliminar">
        </form>
    </div>
    <?php
            }
            }
            ?>

    <?php
        if (isset($_POST['id'])) {
            $data = ['id' => htmlentities($_POST['id'])];
            $sql = "delete from nosotros where id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);

            if ($stmt->rowCount() > 0) {
            header("location:consultar.php"); 
            } else {
            echo 'NO ES POSIBLE ELIMINAR ';
            }
        }
  ?>
</body>

</html>