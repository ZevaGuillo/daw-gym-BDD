<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="ejemplo de HTML5" />
    <meta name="keywords" content="HTML5, CSS3, JavaScript" />
    <meta name = "author" content= "Marcillo Falcones Fernando">
    <title>Articulo</title>
    <?php  
        include_once '../../plantillas/styles.php';
    ?>
    <style>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            padding: 2rem;
            text-align: center;
            
        }

        main {
            color: aliceblue;
        }

        .mapa,
        iframe {
            width: 100%;
        }

        *.informacion {
            color: gray;
        }

        div h2 {
            color: crimson;
        }

        div>h3 {
            color: #f2f2f2;
        }

        .telefonos p::before {
            content: '(+593) ';
        }

        .locales,
        .horarios,
        .telefonos {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        button[type=submit] {
            align-self: center;
            width: 30%;
            padding: 1rem;
            background-color: crimson;
            color: #f2f2f2;
            font-size: 1.2rem;
            border: none;
            border-radius: 100px;
            transition: .2s all ease-in;
        }

        button:hover {
            background-color: rgb(221, 45, 80);
        }

        button{
            align-self: center;
            width: 30%;
            padding: 1rem;
            background-color: crimson;
            color: #f2f2f2;
            font-size: 1.2rem;
            border: none;
            border-radius: 10px;
            transition: .2s all ease-in;
        }

        button[type=submit]:hover {
            background-color: rgb(221, 45, 80);
        }

        .content-contacto {
            display: flex;
            padding: 0 1%;
            padding-bottom: 2rem;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .informacion {
            background-color: #201c1c;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
            border-radius: 10px;
        }

        form {
            position: relative;
            max-width: 40rem;
            background-color: #201c1c;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            border-radius: 10px;
        }

        label {
            font-weight: bold;
            color: aliceblue;
        }

        textarea {
            height: 50rem;
            resize: none;
        }

        input,
        textarea,select {
            width: 100%;
            padding: .5rem;
            height: 2.5rem;
            background-color: #f2f2f2;
            border-radius: 10px;
            border: 3px solid transparent;
        }

        input:hover,
        textarea:hover,select:hover {
            background-color: #d4cdcd;
        }

        

        input:focus,
        textarea:active {
            border: 3px solid rgb(20, 100, 220);
            outline: none;
        }

        .check {
            display: flex;
            gap: 1rem;
        }

        .check input {
            width: 1rem;
        }

        textarea {
            height: 7rem;
            resize: none;
        }


        .alert {
            padding: 1rem;
            background-color: crimson;
            border-radius: 10px;
        }

        .submit::before {
            position: absolute;
            border-radius: 10px;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(20, 147, 220, 0.5);
            content: 'Formulario enviado';
            color: #201c1c;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 2.5rem;
        }
    </style>

    
</head>
<body>
    <?php 
        $titulo = 'Insertar Cliente';
        include_once '../../plantillas/encabezado.php';
    ?>
    
    <main id="central">

<div class="informacion">
     <form method="POST" >
        <div>
       
        <label for="inputNombre">Articulo</label>
        <select name="txtarticulo">
            <option value="mancuerna">Mancuernas</option>
            <option value="cuerda">Cuerda</option>
            <option value="pesarusa">Pesa Rusa</option>
            <option value="caminadora">Caminadora</option>
            <option value="prensapierna">Prensapierna</option>
            <option value="pospierna">Pospierna</option>
            
          </select>
    </div>
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" name="txtnombre">
    </div>
    <div>
        <label for="nombre">Apellido</label>
        <input type="text" name="txtapellido">
    </div>
    <div>
        <label for="cedula">Cedula</label>
        <input type="text" name="txtcedula">
    </div>
    <div>
        <label for="Email">Correo Electronico</label>
        <input type="text" name="txtcorreo">
    </div>
    <div>
    <label for="direccion">Direccion</label>
        <input type="text" name="txtdireccion">
        
    </div>
               <div>
        <label class="check">
            <input type="checkbox" name="inputCheck">
            
            Acepto que la informacion brindada es verdadera y estoy de acuerdo con los terminos y condiciones.
        </label>
                  </div>
            <div>
        <button type="submit" value="Agregar">Enviar</button>
           </div>
           <div>
        <button> <a href="consultar.php">Consultar</a></button>
           </div>
    </form>    
</div>

</main>

<?php
      
    // incluir archivo conexion.php
   require_once('../../conexion.php');


    if (!empty($_POST['txtarticulo']) &&!empty($_POST['txtnombre']) && !empty($_POST['txtapellido']) 
           && !empty($_POST['txtcedula'])&& !empty($_POST['txtcorreo'])&& !empty($_POST['txtdireccion'])) {

            $diccionario =[
             "articulo" => htmlentities($_POST['txtarticulo']),
             "nombre" => htmlentities($_POST['txtnombre']),
               "apellido" => htmlentities($_POST['txtapellido']),
               "cedula" => htmlentities($_POST['txtcedula']),
               "correo" => htmlentities($_POST['txtcorreo']),
               "direccion" => htmlentities($_POST['txtdireccion'])
            ];
    

             $sql = "INSERT INTO articulo(art_nombre,nombre, apellido, cedula,correo,direccion) VALUES(:articulo, :nombre, :apellido, :cedula, :correo,:direccion)";
            echo $sql;
    
           $statement = $pdo->prepare($sql);
           $statement->execute($diccionario);

                
     }
?>
</body>

</html>

  
